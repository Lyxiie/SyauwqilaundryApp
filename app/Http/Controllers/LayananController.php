<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.layanan.index', [
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
        return view('dashboard.layanan.create', [
            'layanan' => Layanan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            'id_layanan' => 'required',
            'nama_layanan' => 'unique:layanans|required',
            'harga_layanan' => 'required|min:0',
            'waktu' => 'required|numeric|min:1',

        ]);

        Layanan::create($validatedData);

        return redirect('/dashboard/layanan')->with('success', 'Layanan berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Layanan::find($id);
        return view('dashboard.layanan.edit', compact('model'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Layanan::find($id);
        $model ->id_layanan = $request->id_layanan;
        $model ->nama_layanan = $request->nama_layanan;
        $model ->harga_layanan = $request->harga_layanan;
        $model ->waktu = $request->waktu;
        $model->save();

        return redirect('dashboard/layanan')->with('success', 'Layanan berhasil di perbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Layanan::find($id);
        $model->delete();
        return redirect('dashboard/layanan')->with('success', 'Layanan berhasil di hapus!');
    }
}
