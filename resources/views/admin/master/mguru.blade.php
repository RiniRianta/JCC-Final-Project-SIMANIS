@extends('template.main')
@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Data Guru</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Gol</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guru as $dguru)
                            <tr>
                                <th scope="row">{{$num++}}</th>
                                <td class="pt-10">{{$dguru->nama_guru}}</td>
                                <td class="pt-10">{{$dguru->NIP}}</td>
                                <td class="pt-10">{{$dguru->jenis_kelamin}}</td>
                                <td class="pt-10">{{$dguru->tempat_lahir}}</td>
                                <td class="pt-10">{{$dguru->tanggal_lahir}}</td>
                                <td class="pt-10">{{$dguru->gol}}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i class="fa fa-plus"></i></button>
                                    <button type="button" class="btn btn-sm btn-sm-square btn-outline-warning m-2"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-sm-square btn-outline-danger m-2"><i class="fa fa-trash"></i></button>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection