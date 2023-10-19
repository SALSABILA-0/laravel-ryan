@extends('layouts.link')

<link rel="stylesheet" href="/css/home.css">
<h1 class="mt-5 text-center">Update</h1>
<div class="container register">

      <form method="POST" action="" class="container mt-3">
        @csrf
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" style="color: white;">Isi Laporan</label>
          <input type="text" class="form-control" name="isi_laporan" id="exampleInputPassword1" value="{{ $pengaduan->isi_laporan }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" style="color: white;">Foto</label>
          <input type="file" class="form-control" name="foto" id="exampleInputPassword1" value="{{ $pengaduan->foto }}">
        </div>
        <center><button type="submit" name="submit" class="btn btn-primary">Update</button></center>
      </form>
</div>