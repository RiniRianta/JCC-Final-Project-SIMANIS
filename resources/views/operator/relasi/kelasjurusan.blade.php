@extends('template.main')
@section('content')
<h1> Tambah Kelas Dan Jurusan </h1>
<div class="row bg-light rounded mx-0">
    <form action="/operator" method="POST"> 
        @csrf
        <div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Nama Jurusan</label>
            <input type="text" class="form-control" name="jurusans">
          </div>
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
                    
    </form>
</div>
@endsection
