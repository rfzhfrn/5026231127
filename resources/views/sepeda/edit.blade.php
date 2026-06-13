@extends('template')
@section('title', 'Edit Sepeda')
@section('konten')

    <h4>Form Edit Sepeda</h4>

    <form action="/sepeda/update/{{ $sepeda->kodesepeda }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Merk Sepeda</label>
            <input type="text" name="merksepeda" class="form-control" maxlength="30" value="{{ $sepeda->merksepeda }}" required>
        </div>
        <div class="mb-3">
            <label>Stock Sepeda</label>
            <input type="text" name="stocksepeda" class="form-control" value="{{ $sepeda->stocksepeda }}" required>
        </div>
        <div class="mb-3">
            <label>Tersedia (Y/N)</label>
            <input type="text" name="tersedia" class="form-control" maxlength="1" value="{{ $sepeda->tersedia }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/sepeda" class="btn btn-secondary">Kembali</a>
    </form>

@endsection
