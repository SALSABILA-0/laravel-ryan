@extends('layouts.navbar')  

@section('content')
    <table class="table table-dark table-hover">
        <tr>
            <th>id</th>
            <th>nama pelapor</th>
            <th>isi laporan</th>
            <th>bukti foto</th>
            <th>status</th>
            <th>Opsi</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($pengaduan as $p)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->isi_laporan }}</td>
                <td>{{ $p->foto }}</td>
                <td>{{ $p->status }}</td>
                <td>
                    <a href="#"><button class="btn btn-danger">Tanggapi</button></a>
                    <a href="#"><button class="btn btn-primary">Print</button></a>
                </td>
            </tr>
        @php
            $i++
        @endphp
        @endforeach
    </table>
@endsection