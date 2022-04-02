@extends('template.main')
@section('content')
<div class="row bg-light rounded mx-0 pt-3 pe-3 pb-3 ps-3">
    <div class="">
        <h4>Edit Data kelas</h4>
        <form action="/admin/mkelas/{{$kelas->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Nama Kelas</label>
                <select class="form-select" aria-label="Default select example" name="nama" id="nama">
                    <option value="X" {{$kelas->kelas == "X" ? 'selected' : ''}}>X</option>
                    <option value="XI" {{$kelas->kelas == "XI" ? 'selected' : ''}}>XI</option>
                    <option value="XII" {{$kelas->kelas == "XII" ? 'selected' : ''}}>XII</option>

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
                    @foreach($jurusan as $item)
                    <option value="{{$item->id}}" name="jurusan" id="jurusan" {{$kelas->jurusan->nama == $item->nama ? 'selected' : ''}}>{{$item->nama}}</option>
                    @endforeach

                </select>
            </div>
            <div class="mt-3"><button type="submit" class="btn btn-primary">Simpan</button></div>

        </form>
    </div>
</div>
@endsection