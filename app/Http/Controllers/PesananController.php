<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pesanan = DB::table('pesanans')
        ->join('layanans', 'pesanans.layanan', '=', 'layanans.id')->get();
        return view('dashboard.pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pesanan;
        $layanans = Layanan::all();
        return view('dashboard.pesanan.create', compact('model', 'layanans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model =  new Pesanan;
        $model ->id_pesanan = $request->id_pesanan;
        $model ->nama = $request->nama;
        $model ->no_hp = $request->no_hp;
        $model ->layanan = $request->layanan_id;
        $model ->jml_satuan = $request->jml_satuan;
        $model ->tgl_masuk = $request->tgl_masuk;
        $model ->tgl_selesai = $request->tgl_selesai;
        $model ->total = $request->total;
        $model->save();

        return redirect('dashboard/pesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Pesanan::find($id);
        $layanans = Layanan::all();
        return view('dashboard.pesanan.edit', compact('model', 'layanans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Pesanan::find($id);
        $model ->id_pesanan = $request->id_pesanan;
        $model ->nama = $request->nama;
        $model ->no_hp = $request->no_hp;
        $model ->layanan = $request->layanan_id;
        $model ->jml_satuan = $request->jml_satuan;
        $model ->tgl_masuk = $request->tgl_masuk;
        $model ->tgl_selesai = $request->tgl_selesai;
        $model ->total = $request->total;
        $model->save();

        return redirect('dashboard/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pesanan::find($id);
        $model->delete();
        return redirect('dashboard/pesanan');
    }
}
