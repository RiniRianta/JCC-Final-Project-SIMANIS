@extends('template.main')
@section('content')
<div class="row bg-light rounded mx-0 pt-3 pe-3 pb-3 ps-3">
    <div class="">
        <h4>Tambah Data kelas</h4>
        <p>Silakan input form dibawah untuk menambahkan data kelas</p>
        <form action="/mkelas/" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama Kelas</label>
                <select class="form-select" aria-label="Default select example" name="nama" id="nama">
                    <option selected>Pilih Kelas</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>

                </select>
            </div>
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="form-group">
                <label for="jurusan">Kelas</label>
                <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                    <option selected>Pilih Jurusan</option>
                    @foreach($jurusan as $item)
                    <option value="{{$item->id}}" name="jurusan" id="jurusan">{{$item->nama}}</option>
                    @endforeach

                </select>
            </div>
            <div class="mt-3"><button type="submit" class="btn btn-primary">Simpan</button></div>

        </form>
    </div>
</div>
@endsection