@extends('layouts.navbar')  

@section('content')
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" style="color: #FFF;">Foto Bukti</label>
        <input type="file" class="form-control" id="exampleFormControlInput1" name="foto">
        @error('foto')
            <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Silahkan masukan bukti foto terlebih dahulu',
                })
            </script>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label" style="color: #FFF;">Laporan Pengaduan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_laporan" placeholder="Laporan Pengaduan" rows="3"></textarea>
        @error('isi_laporan')
            <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Silahkan isi laporan terlebih dahulu',
                })
            </script>
        @enderror
    </div>
    <button class="btn btn-success mt-3" type="submit" name="submit">Laporkan</button>
</form>
@endsection