@extends('template')
@section('title', 'Data Sepeda')
@section('konten')

    <a href="/sepeda/tambah" class="btn btn-primary">+ Tambah Sepeda</a>

    <table class="table table-striped table-hover mt-3">
        <tr>
            <th>Kode Sepeda</th>
            <th>Merk Sepeda</th>
            <th>Stock Sepeda</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->kodesepeda }}</td>
            <td>{{ $item->merksepeda }}</td>
            <td>{{ $item->stocksepeda }}</td>
            <td>{{ $item->tersedia }}</td>
            <td>
                <a href="/sepeda/edit/{{ $item->kodesepeda }}" class="btn btn-warning">Edit</a>
                |
                <a href="/sepeda/hapus/{{ $item->kodesepeda }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
