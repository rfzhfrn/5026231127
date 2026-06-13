@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <a href="/nilaikuliah/tambah" class="btn btn-primary">+ Tambah Data</a>

    <table class="table table-striped table-hover mt-3">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($data as $item)
        @php
            $bobot = $item->NilaiAngka * $item->SKS;

            if ($item->NilaiAngka <= 40) {
                $huruf = 'D';
            } elseif ($item->NilaiAngka <= 60) {
                $huruf = 'C';
            } elseif ($item->NilaiAngka <= 80) {
                $huruf = 'B';
            } else {
                $huruf = 'A';
            }
        @endphp
        <tr>
            <td>{{ $item->ID }}</td>
            <td>{{ $item->NRP }}</td>
            <td>{{ $item->NilaiAngka }}</td>
            <td>{{ $item->SKS }}</td>
            <td>{{ $huruf }}</td>
            <td>{{ $bobot }}</td>
        </tr>
        @endforeach
    </table>

@endsection
