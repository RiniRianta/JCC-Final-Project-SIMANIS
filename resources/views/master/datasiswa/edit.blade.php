@extends('template.main')
@section('content')
<div class="row bg-light rounded mx-0 pt-3 pe-3 pb-3 ps-3">
    <div class="">
        <h4>Tambah Data Siswa</h4>
        <p>Silakan input form dibawah untuk menambahkan data siswa</p>
        <form action="/datasiswa/{{$siswa->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="{{$siswa->nama}}" name="nama">
            </div>
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="form-group mt-2">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="Laki-laki" {{$siswa->jenis_kelamin == "Laki-laki" ? 'selected' : ''}}>Laki-laki</option>
                    <option value="Perempuan" {{$siswa->jenis_kelamin == "Perempuan" ? 'selected' : ''}}>Perempuan</option>
                </select>
            </div>
            @error('jenis_kelamin')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="form-group mt-2">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" id="name" name="nisn" value="{{$siswa->NISN}}">
            </div>
            @error('nisn')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="form-group mt-2">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$siswa->tempat_lahir}}">
            </div>
            @error('tempat_lahir')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="form-group mt-2">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$siswa->tanggal_lahir}}">
            </div>
            @error('tanggal_lahir')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="form-group mt-2">
                <label for="kelas">Kelas</label>
                <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                    @foreach($kelas as $item)
                    <option value="{{$item->id}}" name="kelas" id="kelas">{{$item->kelas}}</option>
                    @endforeach

                </select>
            </div>
            @error('kelas')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="mt-3"><button type="submit" class="btn btn-primary">Submit</button></div>

        </form>
    </div>
</div>
@endsection