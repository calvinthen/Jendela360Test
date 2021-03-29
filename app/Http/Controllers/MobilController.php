<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Mobil.index');
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


    public function store_index()
    {
        return view('Mobil.store_index');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $mobil = new Mobil;
        $mobil->nama = $request->input('nama');
        $mobil->stock = $request->input('stock');
        $mobil->harga = $request->input('price');

        $mobil->save();

        return view('Mobil.index')->with('message','Register Success');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = DB::table('mobils')->where('id', '=' , $id)->first();

        return view('Mobil.edit')->with('mobil',$mobil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $nama = $request->input('nama');
        $harga = $request->input('price');
        $stock = $request->input('stock');

        DB::table('mobils')->where('id', '=' , $id)->update(['nama'=>$nama, 'harga' => $harga, 'stock' => $stock]);



        return view('Mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $mobil = Mobil::findOrFail($id);

        $mobil->delete();

        return redirect()->back();
    }
}
