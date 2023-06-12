<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Courier;
use App\Models\Province;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\Models\Ongkir;

class OngkirController extends Controller
{
    public function insertongkir(Request $request){
        $data = $request->validate([
            'user' => 'required',
            'layanan' => '',
            'kota' => 'required',
            'kurir' => 'required',
            'ongkir' => 'required',
        ]);
        $data = new Ongkir;
        $data->user = $request->user;
        // $data->layanan = $request->layanan;
        $data->kota = $request->kota;
        $data->kurir = $request->kurir;
        $data->ongkir = $request->ongkir;
        // dd($data);
        $data->save();
        // Session::flash('status', 'Data Berhasil Di Update');
        return redirect()->route('invoicecart');
    }

    public function addongkir(Request $request){
        if($request == null){
            return redirect()->back()->with('toast_info', 'Pilih Ongkir Terlebih Dahulu');
        }
        else 
        {
            $data = $request->validate([
                'user' => 'required',
                'layanan' => '',
                'kota' => 'required',
                'kurir' => 'required',
                'ongkir' => 'required',
            ]);
            $data = new Ongkir;
            $data->user = $request->user;
            // $data->layanan = $request->layanan;
            $data->kota = $request->kota;
            $data->kurir = $request->kurir;
            $data->ongkir = $request->ongkir;
            // dd($data);
            $data->save();
            // Session::flash('status', 'Data Berhasil Di Update');
            return redirect()->route('invoicecart');
        }
    }

    public function deleteongkir($id){
        $data = Ongkir::find($id);
        $data->delete();
        return redirect()->route('home');
        // return view("detailhijab");
    }

    public function index()
    {
        $couriers   = Courier::pluck('title', 'code');
        $provinces  = Province::pluck('title', 'province_id');
        return view('ongkir', compact('couriers', 'provinces'));
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

        return view('ekspedisi', ['namaKurir' => $namaKurir, 'rows' => $rows, 'origin' => $origin, 'destination' => $destination]);

        
    }
}
