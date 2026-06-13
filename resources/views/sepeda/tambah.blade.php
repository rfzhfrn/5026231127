@extends('template')
@section('title', 'Tambah Sepeda')
@section('konten')

    <h4>Form Tambah Sepeda</h4>

    <form action="/sepeda/simpan" method="POST">
        @csrf
        <div class="mb-3">
            <label>Merk Sepeda</label>
            <input type="text" name="merksepeda" class="form-control" maxlength="30" placeholder="Masukkan merk sepeda" required>
        </div>
        <div class="mb-3">
            <label>Stock Sepeda</label>
            <input type="text" name="stocksepeda" class="form-control" placeholder="Masukkan jumlah stock" required>
        </div>
        <div class="mb-3">
            <label>Tersedia (Y/N)</label>
            <input type="text" name="tersedia" class="form-control" maxlength="1" placeholder="Y atau N" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/sepeda" class="btn btn-secondary">Kembali</a>
    </form>

@endsection
