@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <a href="/keranjang/tambah" class="btn btn-primary">+ Beli</a>

    <table class="table table-striped table-hover mt-3">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->ID }}</td>
            <td>{{ $item->KodeBarang }}</td>
            <td>{{ $item->Jumlah }}</td>
            <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
            <td>
                <a href="/keranjang/tambah" class="btn btn-success">Beli</a>
                |
                <a href="/keranjang/hapus/{{ $item->ID }}" class="btn btn-danger">Batal</a>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
