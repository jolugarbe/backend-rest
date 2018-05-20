<?php

namespace App\Jobs;

use App\Jobs\Job;
use Exception;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;



use PHPMailer\PHPMailer\PHPMailer;
use phpmailerException;


class EnviarMail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;


    protected $destino;
    protected $asunto;
    protected $cuerpo;
    protected $adjunto;
    protected $nombre_adjunto;
    protected $nombre_origen;
    protected $origen;
    protected $nombre_destino;



    public function __construct($datos)
    {
        $this->destino=$datos[0];
        $this->nombre_destino=$datos[1];
        $this->origen=$datos[2];
        $this->nombre_origen=$datos[3];
        $this->asunto=$datos[4];
        $this->cuerpo=$datos[5];
        $this->adjunto=$datos[6];
        $this->nombre_adjunto=$datos[7];
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail = new PHPMailer(true); // notice the \  you have to use root namespace here
        try {

            $mail->isSMTP(); // tell to use smtp
            $mail->CharSet = "utf-8"; // set charset to utf8
            $mail->SMTPAuth = true;  // use smpt auth
            $mail->SMTPSecure = "tls"; // or ssl
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Host = env('MAIL_HOST', 'mail.10code.es');
            $mail->Port = env('MAIL_PORT', '587');
            $mail->Username = env('MAIL_USERNAME', 'info@10code.es');
            $mail->Password = env('MAIL_PASSWORD', 'Codeinfo10');


            $mail->setFrom($this->origen, $this->nombre_origen);
            $mail->Subject = $this->asunto;
            $mail->MsgHTML($this->cuerpo);
            $mail->addAddress($this->destino, $this->nombre_destino);

            if($this->adjunto!=null && $this->adjunto!="" && $this->nombre_adjunto!=null &&$this->nombre_adjunto!=""){
                $gestor = fopen($this->adjunto, "r");
                $contenido=fread($gestor,filesize($this->adjunto));
                $mail->addStringAttachment($contenido, $this->nombre_adjunto);
            }

            $mail->send();
        } catch (phpmailerException $e) {
            dd($e);
        } catch (Exception $e) {
            dd($e);
        }
        //die('success');
    }
}
