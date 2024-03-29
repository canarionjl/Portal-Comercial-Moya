<?php

namespace App\Http\Controllers\Sensors;

use App\Http\Controllers\Controller;
use App\Models\DatosSensor;
use App\Models\Sensor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($startDate, $endDate, $id = null)
    {

        $startDate = Carbon::createFromFormat('dmY', $startDate);
        $startDate = Carbon::parse($startDate)->startOfDay()->toISOString();
        $endDate = Carbon::createFromFormat('dmY', $endDate);
        $endDate = Carbon::parse($endDate)->endOfDay()->toISOString();
        if($id==null){
            return DatosSensor::whereBetween('fecha',[$startDate,$endDate])
                ->get();
        }else{
            return DatosSensor::whereBetween('fecha',[$startDate,$endDate])
                ->where('sensor_id','=',$id)
                ->get();
        }

        // Example: http://proyectoweb22.test/api/get/01112022/01012023
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(Request $request)
    {
        $sensorData = $request->all();
//        foreach ($sensorData as $i => $sensor){
//            $sensorData[$i]['fecha'] = Carbon::createFromFormat('d/m/Y-H:i:s', $sensor['fecha']);
//        }
        if(DatosSensor::insert($sensorData)){
            return "OK";
        }else{
            return "ERROR";
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getSensors(){
        $sensors = Sensor::all();
        return $sensors;
    }

    public function getSensorData($sensor_id){
        $sensorData = DatosSensor::where('sensor_id',$sensor_id)->get();
        for ($i = 0; $i < sizeof($sensorData); $i++) {
            $sensorData[$i]['sensor_name'] = $sensorData[$i]->sensor->sensor_name;
        }
        return $sensorData;
    }
}
