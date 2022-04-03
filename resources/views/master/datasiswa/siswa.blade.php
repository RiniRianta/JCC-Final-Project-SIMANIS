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
                        <th>Aksi</th>
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
                        <th>
                            <form method="post" action="/datasiswa/{{$item->id}}">
                                @csrf
                                @method('delete')
                                <a class="btn btn-sm btn-sm-square btn-outline-warning m-2" href="/datasiswa/{{$item->id}}/edit" role="button"><i class="fa fa-edit"></i></a>
                                <button type="submit" class="btn btn-sm btn-sm-square btn-outline-danger m-2"><i class="fa fa-trash"></i></button>

                            </form>
                        </th>
                    </tr>
                    @empty
                    @endforElse
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary mb-3" href="/datasiswa/create" role="button">Tambah Data Siswa</a>
            </div>
        </article>
    </div>
</div>
@endsection