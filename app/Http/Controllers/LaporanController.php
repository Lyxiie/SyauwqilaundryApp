<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class LaporanController extends Controller
{
    public function index(){
        return view ('dashboard.laporan.index');
    }

    public function cari (Request $request){
        $this->validate($request, [
            'dari'=> 'required',
            'sampai'=> 'required'
        ]);

        $dari = date('Y-m-d',strtotime($request->dari));
        $sampai = date('Y-m-d',strtotime($request->sampai));

        $pesanan = DB::table('pesanans')->whereBetween('tgl_selesai', [$dari, $sampai])->get();

        $total = DB::table('pesanans')->whereBetween('tgl_selesai', [$dari, $sampai])->sum('total');

        return view ('dashboard.laporan.index', compact('pesanan', 'total'));
    }

    public function dataDashboard (Request $request){
        $this->validate($request, [
            'dari'=> 'required',
            'sampai'=> 'required'
        ]);

        $dari = date('Y-m-d',strtotime($request->dari));
        $sampai = date('Y-m-d',strtotime($request->sampai));

        $pesanan = DB::table('pesanans')->whereBetween('tgl_selesai', [$dari, $sampai])->get();

        $total = DB::table('pesanans')->whereBetween('tgl_selesai', [$dari, $sampai])->sum('total');

        return view ('dashboard.index', compact('pesanan', 'total'));
    }

}
