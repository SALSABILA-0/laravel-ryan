<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class laporanController extends Controller
{
    function laporan() {
            $title = "Laporan";
            return view('laporan', [
                "title" => $title
            ]);
    }

    function proses_tambah_pengaduan(Request $request) {
        
        // mengambil nama foto
        $namaFoto = $request->foto->getClientOriginalName();

        // validasi
        $request->validate([
            'isi_laporan' => 'required',
            'foto' => 'required'
        ]);

        // untuk menyinpan foto ke dalam storage/public/image
        $request->foto->storeAs('public/img', $namaFoto);

        $isi_pengaduan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '456',
            'isi_laporan' => $isi_pengaduan,
            'foto' => $namaFoto,
            'status' => 'Proses',
        ]);
        return redirect('/detailLaporan');
    }
}