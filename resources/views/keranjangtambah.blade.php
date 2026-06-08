@extends('template')
@section('title', 'Tambah Pembelian')
@section('konten')

    <h4>Form Pembelian</h4>

    <form action="/keranjang/simpan" method="POST">
        @csrf
        <div class="mb-3">
            <label>Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control" placeholder="Masukkan kode barang" required>
        </div>
        <div class="mb-3">
            <label>Jumlah Pembelian</label>
            <input type="text" name="Jumlah" class="form-control" placeholder="Masukkan jumlah" required>
        </div>
        <div class="mb-3">
            <label>Harga per Item</label>
            <input type="text" name="Harga" class="form-control" placeholder="Masukkan harga" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/keranjang" class="btn btn-secondary">Kembali</a>
    </form>

@endsection
