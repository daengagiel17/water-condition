<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;

class HomeController extends Controller
{
    public function index()
    {
        $water_datas = Sensor::all()->sortByDesc("created_at");
        return view('air', compact('water_datas'));
    }

    public function detail()
    {
        $dataAirs =  Sensor::orderByDesc('created_at')->take(10)->get()->reverse();

        return view('detail', compact('dataAirs'));
    }

    public function dataDetail()
    {
        $dataAirs =  Sensor::orderByDesc('created_at')->take(10)->get()->reverse();
        $jarak = $dataAirs->pluck('jarak')->toArray();
        $ph = $dataAirs->pluck('ph')->toArray();

        $waktu = array();
        foreach($dataAirs as $dataAir){
            $waktu[] = $dataAir->created_at->format('h:i:s');
        }

        $data = ['waktu' => $waktu, 'jarak' => $jarak, 'ph' => $ph];
        
        return response()->json($data);
    }
}
