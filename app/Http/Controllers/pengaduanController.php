<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pengaduanController extends Controller
{
    function index() {

        // return Auth::user();
        $judul = "Selamat Pagi Semuanya";
        $title = "Home";
        return view('home', [
            "textJudul" => $judul,
            "title" => $title
        ]);
    }
}
