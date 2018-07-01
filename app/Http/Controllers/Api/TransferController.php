<?php

namespace App\Http\Controllers\Api;

use App\Jobs\EnviarMail;
use App\Repositories\TransferRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransferController extends Controller
{
    protected $transferRepo;

    function __construct(TransferRepo $transferRepo)
    {
        $this->transferRepo = $transferRepo;
    }

    public function acceptTransfer(Request $request){
        $input = $request->all();
        DB::beginTransaction();
        try{
            $user = Auth::user();
            $transfer = $this->transferRepo->findOrFail($input['transfer_id']);
            $transfer->setStatusId(4);
            $transfer->save();

            $waste = $transfer->getWaste;
            DB::commit();

            return response()->json([
                'message' => "Solicitud aceptada correctamente.",
                'waste' => $waste,
                'owner_email' => $waste->getOwner->getNotificationData->getEmail()
            ], 200);

        }catch (\Exception $exception){
            Log::error('ACEPTACIÓN DE RESIDUO: '. $exception->getMessage());
            DB::rollBack();
            return response()->json(['exception' => $exception, 'message' => "Se ha producido un error al tramitar la aceptación de la solicitud."], 500);
        }
    }


    public function declineTransfer(Request $request){
        $input = $request->all();
        DB::beginTransaction();
        try{
            $user = Auth::user();
            $transfer = $this->transferRepo->findOrFail($input['transfer_id']);
            $transfer->setStatusId(2);
            $transfer->save();

            $waste = $transfer->getWaste;
            DB::commit();

            return response()->json([
                'message' => "Solicitud rechazada correctamente.",
                'waste' => $waste,
                'owner_email' => $waste->getOwner->getNotificationData->getEmail()
            ], 200);

        }catch (\Exception $exception){
            Log::error('RECHAZO DE RESIDUO: '. $exception->getMessage());
            DB::rollBack();
            return response()->json(['exception' => $exception, 'message' => "Se ha producido un error al tramitar el rechazo de la solicitud."], 500);
        }
    }


    public function cancelTransfer(Request $request){
        $input = $request->all();
        DB::beginTransaction();
        try{
            $user = Auth::user();
            $transfer = $this->transferRepo->findOrFail($input['transfer_id']);
            $transfer->setStatusId(3);
            $transfer->save();

            $waste = $transfer->getWaste;
            DB::commit();

            return response()->json([
                'message' => "Solicitud cancelada correctamente.",
                'waste' => $waste,
                'creator_email' => $waste->getCreator->getNotificationData->getEmail()
            ], 200);

        }catch (\Exception $exception){
            Log::error('CANCELACIÓN DE RESIDUO: '. $exception->getMessage());
            DB::rollBack();
            return response()->json(['exception' => $exception, 'message' => "Se ha producido un error al tramitar la cancelación de la solicitud."], 500);
        }
    }
}
