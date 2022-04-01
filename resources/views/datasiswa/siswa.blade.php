@extends('template.main')
@section('content')
<div class="row bg-light rounded mx-0">
    <div class="">
        <article class="ms-3 mt-3">
            <h3>Data Siswa</h3>
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>NISN</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Asal Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forElse($siswa as $item)
                    <tr>
                        <th>{{$key++}}</th>
                        <th>{{$item->nama}}</th>
                        <th>{{$item->jenis_kelamin}}</th>
                        <th>{{$item->NISN}}</th>
                        <th>{{$item->tempat_lahir}}</th>
                        <th>{{$item->tanggal_lahir}}</th>
                        <th>{{$item->kelas->kelas}}</th>
                    </tr>
                    @empty
                    @endforElse
                </tbody>
            </table>
        </article>
    </div>
</div>
@endsection