<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;

class DashboardIndexController extends Controller
{
    public function index(){
        $total = DB::table('logs')->sum('total');
        $totalHarian = DB::table('logs')->where('tgl_masuk', date('Y-m-d'))->sum('total');
        return view ('dashboard.index', [
            'title' => 'Dashboard',
            'total'=> $total,
            'totalHarian'=> $totalHarian,
            'log' => Log::all(),
            'pesanan' => Pesanan::all(),
        ]);
    }

}
