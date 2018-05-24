<?php

namespace App\Http\Controllers\Api;

use App\Locality;
use App\Province;
use App\Repositories\AdTypeRepo;
use App\Repositories\FrequencyRepo;
use App\Repositories\LocalityRepo;
use App\Repositories\ProvinceRepo;
use App\Repositories\WasteRepo;
use App\Repositories\WasteTypeRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Validator;

class WasteController extends Controller
{
    protected $adRepo;
    protected $frequencyRepo;
    protected $wasteTypeRepo;
    protected $localityRepo;
    protected $provinceRepo;
    protected $wasteRepo;

    function __construct(AdTypeRepo $adTypeRepo, FrequencyRepo $frequencyRepo, WasteTypeRepo $wasteTypeRepo, LocalityRepo $localityRepo, ProvinceRepo $provinceRepo, WasteRepo $wasteRepo)
    {
        $this->adRepo = $adTypeRepo;
        $this->frequencyRepo = $frequencyRepo;
        $this->wasteTypeRepo = $wasteTypeRepo;
        $this->localityRepo = $localityRepo;
        $this->provinceRepo = $provinceRepo;
        $this->wasteRepo = $wasteRepo;
    }

    public function allCreateData(){

        try{
            $adType = $this->adRepo->allOrderByName('asc');
            $frequencies = $this->frequencyRepo->allOrderByName('asc');
            $types = $this->wasteTypeRepo->allOrderByName('asc');
            $localities = $this->localityRepo->allOrderByName('asc');
            $provinces = $this->provinceRepo->allOrderByName('asc');
            return response()->json(['ads' => $adType, 'frequencies' => $frequencies, 'types' => $types, 'localities' => $localities, 'provinces' => $provinces], 200);
        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }

    }

    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'waste_type' => 'required',
            'quantity' => 'required',
            'measured_unit' => 'required',
            'frequency' => 'required',
            'composition' => 'required',
            'dangerous' => 'required',
            'handling' => 'required',
            'generation_date' => 'required',
            'pickup_date' => 'required',
            'address_line' => 'required',
            'postal_code' => 'required',
            'province' => 'required',
            'locality' => 'required',
            'packaging' => 'required',
            'transport' => 'required',
            'cer_code' => 'required',
            'ad_type' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }

        $input = $request->all();

        $name = $input['name'];
        $waste_type = $input['waste_type'];
        $quantity = $input['quantity'];
        $measured_unit = $input['measured_unit'];
        $frequency = $input['frequency'];
        $composition = $input['composition'];
        $dangerous = $input['dangerous'];
        $handling = $input['handling'];
        $generation_date = $input['generation_date'];
        $pickup_date = $input['pickup_date'];
        $packaging = $input['packaging'];
        $transport = $input['transport'];
        $cer_code = $input['cer_code'];
        $ad_type = $input['ad_type'];
        $address_line = $input['address_line'];
        $postal_code = $input['postal_code'];
        $province = $input['province'];
        $locality = $input['locality'];
        $creator_id = Auth::user()->getId();
        $description = array_key_exists('description', $input) ? $input['description'] : null;
        $presentation = array_key_exists('presentation', $input) ? $input['presentation'] : null;
        $production = array_key_exists('production', $input) ? $input['production'] : null;

        DB::beginTransaction();
        try{
            $waste = $this->wasteRepo->register($name, $waste_type, $quantity, $measured_unit, $frequency, $composition, $dangerous, $handling, $generation_date, $pickup_date, $packaging, $transport, $cer_code, $ad_type, $address_line, $postal_code, $province, $locality, $description, $presentation, $production, $creator_id);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Residuo registrado correctamente.'
            ], 200);

        }catch (\Exception $exception){
            DB::rollBack();
            Log::error($exception);
            return response()->json(['exception' => $exception], 500);
        }

    }
}
