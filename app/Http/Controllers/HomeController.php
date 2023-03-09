<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Courier;
use App\Models\Province;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class HomeController extends Controller
{
    public function index()
    {
        $couriers   = Courier::pluck('title', 'code');
        $provinces  = Province::pluck('title', 'province_id');
        return view('main', compact('couriers', 'provinces'));
    }

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('title', 'city_id');
        return json_encode($city);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'province_destination'  => 'required',
            'city_destination'      => 'required',
            'courier'               => 'required',
        ]);

        $cost = RajaOngkir::ongkosKirim([
            'origin'        => 441,
            'destination'   => $request->city_destination,
            'weight'        => 1,
            'courier'       => $request->courier
        ])->get();

        $namaKurir  = $cost[0]['name'];
        $berat      = $request->weight;

        $rows = [];
        foreach ($cost[0]['costs'] as $row) {
            $rows[] = [
                'description'   => $row['description'],
                'biaya'         => $row['cost'][0]['value'],
                'etd'           => $row['cost'][0]['etd']
            ];
        }

        // dd($rows);

        $origin         = RajaOngkir::kota()->find($request->city_origin);
        $destination    = RajaOngkir::kota()->find($request->city_destination);

        // dd($namaKurir, $rows, $origin, $destination);

        return view('result', ['namaKurir' => $namaKurir, 'rows' => $rows, 'origin' => $origin, 'destination' => $destination]);

        
    }
}
