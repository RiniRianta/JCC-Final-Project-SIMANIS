@extends('template.main')
@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Data Kelas</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="pt-10">A</td>
                                <td><button type="button" class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-outline-warning m-2"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-outline-danger m-2"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>B</td>
                                <td><button type="button" class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-outline-warning m-2"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-outline-danger m-2"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="pt-10">C</td>
                                <td><button type="button" class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-outline-warning m-2"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-outline-danger m-2"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>D</td>
                                <td><button type="button" class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-outline-warning m-2"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-outline-danger m-2"><i class="fa fa-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection