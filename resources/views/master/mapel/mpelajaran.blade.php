@extends('template.main')
@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4"><div class="row">
                <div class="col">
                    <h4 class="mb-4 mt-2 font-weight-bold">Data Mata Pelajaran</h4>
                </div>
                <div class="col">
                    <div class="mb-4 d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-primary m-2" data-toggle="modal" data-target="#tmapelModal"><i class="fa fa-plus"> Data Mapel</i></button>
                    </div>
                </div>
            </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Mata Pelajaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mapel as $mapels)
                            <tr>
                                <th scope="row">{{$num++}}</th>
                                <td class="pt-10">{{$mapels->mata_pelajaran}}</td>
                                <td>
                                    <form action="/admin/mapel/{{$mapels->id}}" method="post">
                                        <button type="button" class="btn btn-sm btn-sm-square btn-outline-warning m-2" data-toggle="modal" data-target="#tmapelModaledit"><i class="fa fa-edit"></i></button>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-sm-square btn-outline-danger m-2" onclick="return confirm('Apakah Anda Yakin Menghapus Mapel {{$mapels->nama_pelajaran}}?');"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Data Mapel -->
        <div class="modal fade" id="tmapelModal" tabindex="-1" role="dialog" aria-labelledby="tguruModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mata Pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/admin/mapel" method="post">
                        @csrf
                        <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input type="text" class="form-control" name="mpelajaran" id="mpelajaran" placeholder="Masukan Nama Mapel" required>
                        </div>
                        @foreach($mapel as $idmapel)
                        <div class="form-group">
                            <label>ID Guru</label>
                            <select class="form-select" name="guru_id" id="guru_id">
                                <option value="">Pilih ID Guru</option>
                                <option name="guru_id" id="guru_id">{{$idmapel->guru_id}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>ID Kelas</label>
                            <select class="form-select" name="kelas_id" id="kelas_id">
                                <option selected>Pilih ID Kelas</option>
                                <option name="kelas_id" id="kelas_id">{{$idmapel->kelas_id}}</option>
                            </select>
                        </div>
                        @endforeach
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    {{-- Akhir Modal Tambah Data Mapel --}}
@endsection