<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminPageController extends Controller
{
    function allData() {
        $title = "Admin Page";
        // $pengaduan = DB::table('pengaduan')->get();
        $pengaduan = DB::table('pengaduan')
        ->join('masyarakat', 'pengaduan.nik', '=', 'masyarakat.nik')
        ->select('masyarakat.nama', 'pengaduan.isi_laporan', 'pengaduan.foto', 'pengaduan.status')
        ->get();

        return view('adminPage', [
            "title" => $title,
            "pengaduan" => $pengaduan
        ]);
    }
}