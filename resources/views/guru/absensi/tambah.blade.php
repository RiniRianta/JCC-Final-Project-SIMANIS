@extends('template.main')
@section('content')
<div class="row bg-light rounded mx-0 p-4">
    <h4>Isi Absensi</h4>
    <form action="/guru/absensi/" method="post">
        @csrf
        <div class="mb-3">
            <label for="kelas">Kelas</label>
            <select class="form-select kelas" aria-label="Default select example" name="kelas" id="kelas">
                <option name="kelas" id="kelas" selected>Pilih Kelas</option>
                @foreach($kelas as $item)
                <option value="{{$item->id}}" name="kelas" id="kelas">{{$item->kelas}}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="mata_pelajaran">Mata Pelajaran</label>
            <select class="form-select mata_pelajaran" aria-label="Default select example" name="mata_pelajaran" id="mata_pelajaran">

            </select>
        </div>
        <div class="">
            <label for="mata_pelajaran">Pilih Tanggal</label>
            <div class="input-group date" data-provide="datepicker" id="datepicker">
                <input type="text" class="form-control" name="tanggal" placeholder="Format : YYYYMMDD">
            </div>
        </div>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <table class="table table-striped mt-3" id="table">


        </table>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection