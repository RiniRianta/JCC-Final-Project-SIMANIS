@extends('template.main')
@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4">Data Jurusan</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jurusan as $item)
                        <tr>
                            <th scope="row">{{$key++}}</th>
                            <td class="pt-10">{{$item->nama}}</td>
                            <td>
                                <form method="post" action="/admin/mjurusan/{{$item->id}}">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-sm btn-sm-square btn-outline-warning m-2" href="/admin/mjurusan/{{$item->id}}/edit" role="button"><i class="fa fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-sm-square btn-outline-danger m-2"><i class="fa fa-trash"></i></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary mb-3" href="/admin/mjurusan/create" role="button">Tambah Data Siswa</a>
            </div>
        </div>
    </div>
</div>
@endsection