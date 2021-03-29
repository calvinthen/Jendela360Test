<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Mobil.penjualan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|alpha',
            'email' => 'required|email',
            'nomor' => 'required|numeric',
            'mobil' => 'required',
         ]);

         $penjualan = new Penjualan;
         $penjualan->nama_pembeli = $request->input('nama');
         $penjualan->email_pembeli = $request->input('email');
         $penjualan->nomor_telepon = $request->input('nomor');
         $penjualan->id_mobil = $request->input('mobil');

         $penjualan->save();

         $mobil = DB::table('mobils')->where('id','=',$request->input('mobil'))->first();

         $namaMobil = $mobil->nama;
         $harga = $mobil->harga;
         $nomor = $request->input('nomor');

         $nama = $request->input('nama');
         $email = $request->input('email');
         $kirim = Mail::to($email)->send(new SendMail($nama, $namaMobil, $nomor, $harga));
        if($kirim){         echo "Email telah dikirim";     }

         return dd($penjualan);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
