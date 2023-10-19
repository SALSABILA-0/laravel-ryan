<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailLaporanController extends Controller
{
    function tampilData() {
        $title = "Detail Laporan";
        // query builder
        // $pengaduan = DB::table('pengaduan')->get();
        // ELOQUENT ORM
        $pengaduan = pengaduan::all();
        // $pengaduan = DB::table('pengaduan')
        //     ->join('masyarakat', 'pengaduan.nik', '=', 'masyarakat.nik')
        //     ->select('masyarakat.nama', 'pengaduan.isi_laporan', 'pengaduan.foto', 'pengaduan.status')
        //     ->get();

        return view('/detailLaporan', [
            "title" => $title,
            "pengaduan" => $pengaduan   
        ]);
    }

    function hapus($id_pengaduan){
        DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->delete();
        return redirect('/detailLaporan');
    }    
    
    function detail($id_pengaduan){
        $title = "Laporan Per Orang";
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->first();
        
        return view('/laporanPerOrang', [
            "title" => $title,
            "pengaduan" => $pengaduan
        ]);
    }

    function tampil_update($id_pengaduan){
        $title = "Update Data";
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->first();
        
        return view('/update', [
            "pengaduan" => $pengaduan,
            "title" => $title
        ]);
    }
    
    function update($id_pengaduan, Request $request){
        $isi_laporan = $request->isi_laporan;
        $foto = $request->foto;
        
        DB::table('pengaduan')
        ->where('id_pengaduan', $id_pengaduan)
        ->update([
            'isi_laporan' => $isi_laporan,
            'foto' => $foto
        ]);
        
        return redirect('/detailLaporan');
    }
}