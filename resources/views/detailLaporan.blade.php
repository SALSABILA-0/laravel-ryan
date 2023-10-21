@extends('layouts.navbar')

@section('content')
    <table class="table table-dark table-hover">
        <tr>
            <th>ID Pengaduan</th>
            <th>Tanggal Pengaduan</th>
            <th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pengaduan as $d)
            <tr>
                <td>{{ $d->id_pengaduan }}</td>
                <td>{{ $d->tgl_pengaduan }}</td>
                <td>{{ $d->nik }}</td>
                <td>{{ $d->isi_laporan }}</td>
                <td><img width="50" src='{{asset("storage/img/$d->foto")}}' /></td>
                <td>{{ $d->status }}</td>
                <td>
                    <a href="/detailLaporan/hapus/{{ $d->id_pengaduan }}"><button type="submit" class="btn btn-danger">Delete</button></a>
                    <a href="/detailLaporan/detail/{{ $d->id_pengaduan }}"><button type="submit" class="btn btn-success">Detail</button></a>
                    <a href="/detailLaporan/update/{{ $d->id_pengaduan }}"><button type="submit" class="btn btn-primary">Update</button></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection