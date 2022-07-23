<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Layanan;
use App\Models\Log;
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

        // $pesanans = DB::table('pesanans')
        // ->join('layanans', 'pesanans.layanan', '=', 'layanans.id')->get();
        // return view('dashboard.pesanan.index', compact('pesanan'));

        return view('dashboard.pesanan.index', [
            'pesanan' => Pesanan::all(),
            'layanan' => Layanan::all()

        ]);
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
    public function store(Request $request, Layanan $layanan)
    {
        // $model =  new Pesanan;
        // $model ->id_pesanan = $request->id_pesanan;
        // $model ->nama = $request->nama;
        // $model ->no_hp = $request->no_hp;
        // $model ->layanan = $request->layanan_id;
        // $model ->jml_satuan = $request->jml_satuan;
        // $model ->tgl_masuk = $request->tgl_masuk;
        // $model ->tgl_selesai = $request->tgl_selesai;
        // $model ->total = $request->total;
        // $model->save();

        $model = $request->validate([
            'id_pesanan' => 'required|unique:pesanans',
            'nama' => 'required|min:3',
            'no_hp' => 'nullable|min:10|numeric',
            'jml_satuan' => 'required|numeric|min:1',
            'tgl_masuk' => 'required',
        ]);

        $model['layanan'] = $request->layanan_id;
        $layanan = Layanan::find($request->layanan_id);
        $model['tgl_selesai'] = date('Y-m-d', strtotime($request->tgl_masuk . ' +' . $layanan->waktu . ' days'));
        $model['total'] = $layanan->harga_layanan * $request->jml_satuan;
        Pesanan::create($model);
        return redirect('/dashboard/pesanan')->with('success', 'Pesanan berhasil di tambahkan!');
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
    public function update(Request $request, Pesanan $pesanan)
    {
        // $model = Pesanan::find($id);
        // $model ->id_pesanan = $request->id_pesanan;
        // $model ->nama = $request->nama;
        // $model ->no_hp = $request->no_hp;
        // $model ->layanan = $request->layanan_id;
        // $model ->jml_satuan = $request->jml_satuan;
        // $model ->tgl_masuk = $request->tgl_masuk;
        // $model ->tgl_selesai = $request->tgl_selesai;
        // $model ->total = $request->total;
        // $model->save();

        // $rules = [
        //     'nama' => 'required|min:3',
        //     'no_hp' => 'nullable',
        //     'tgl_masuk' => 'required',
        // ];

        // if($request->jml_satuan != $pesanan->jml_satuan) {
        //     $rules['jml_satuan'] = 'required|numeric|min:1';
        // }
        // if($request->tgl_selesai != $pesanan->tgl_selesai) {
        //     $rules['tgl_selesai'] = 'required|date|after:tgl_masuk';
        // }
        // if($request->total != $pesanan->total) {
        //     $rules['total'] = 'required|numeric|min:0';
        // }
        // $validatedData = $request->validate($rules);


        // Pesanan::where('id', $pesanan->id)->update($validatedData);


        // return redirect('dashboard/pesanan')->with('success', 'Pesanan berhasil di perbarui!');

        $model = $request->validate([
            'nama' => 'required|min:3|max:100',
            'no_hp' => 'nullable|min:10|numeric',
            'jml_satuan' => 'required|numeric|min:1',
            'tgl_masuk' => 'required',
            'total' => 'required|numeric|min:0',
        ]);

        $layanan = Layanan::find($request->layanan_id);
        $model['layanan'] = $request->layanan_id;
        $model['tgl_selesai'] = date('Y-m-d', strtotime($request->tgl_masuk . ' +' . $layanan->waktu . ' days'));

        Pesanan::where('id', $pesanan->id)->update($model);
        return redirect('/dashboard/pesanan')->with('success', 'Pesanan berhasil di tambahkan!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Log $log)
    {
        $model = Pesanan::find($id);
        $log->id_pesanan = $model->id_pesanan;
        $log->nama = $model->nama;
        $log->no_hp = $model->no_hp;
        $log->layanan = $model->layanan;
        $log->jml_satuan = $model->jml_satuan;
        $log->tgl_masuk = $model->tgl_masuk;
        $log->tgl_selesai = $model->tgl_selesai;
        $log->total = $model->total;
        $log->save();
        $model->delete();
        return redirect('/dashboard/pesanan')->with('success', 'Pesanan berhasil di hapus!');  
    }
}
