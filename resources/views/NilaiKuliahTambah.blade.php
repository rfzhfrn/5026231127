@extends('template')
@section('title', 'Tambah Nilai Kuliah')
@section('konten')

    <h4>Form Tambah Nilai Kuliah</h4>

    <form action="/nilaikuliah/simpan" method="POST">
        @csrf
        <div class="mb-3">
            <label>NRP</label>
            <input type="text" name="NRP" class="form-control" maxlength="6" placeholder="Masukkan NRP" required>
        </div>
        <div class="mb-3">
            <label>Nilai Angka</label>
            <input type="text" name="NilaiAngka" class="form-control" placeholder="Masukkan nilai angka" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="text" name="SKS" class="form-control" placeholder="Masukkan jumlah SKS" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/nilaikuliah" class="btn btn-secondary">Kembali</a>
    </form>

@endsection
