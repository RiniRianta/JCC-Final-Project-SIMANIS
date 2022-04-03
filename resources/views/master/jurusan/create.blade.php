@extends('template.main')
@section('content')
<div class="row bg-light rounded mx-0 pt-3 pe-3 pb-3 ps-3">
    <div class="">
        <h4>Tambah Data jurusan</h4>
        <p>Silakan input form dibawah untuk menambahkan data jurusan</p>
        <form action="/mjurusan/" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama Jurusan</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Masukkan Nama Jurusan" name="nama">
            </div>
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="mt-3"><button type="submit" class="btn btn-primary">Simpan</button></div>

        </form>
    </div>
</div>
@endsection