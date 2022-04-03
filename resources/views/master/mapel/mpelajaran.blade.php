@extends('template.main')
@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-4 mt-2 font-weight-bold">Data Mata Palajaran</h4>
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
                                        <button type="submit" class="btn btn-sm btn-sm-square btn-outline-danger m-2" onclick="return confirm('Apakah Anda Yakin Menghapus {{$mapels->mata_pelajaran}}?');"><i class="fa fa-trash"></i></button>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mapel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/admin/mapel" method="post">
                    @csrf
                    <div class="form-group">
                    <label>Nama Mata Pejaran</label>
                    <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" placeholder="Masukan Nama Mapel" required>
                    </div>
                    <div class="form-group">
                     <label>ID Guru</label>
                        <select class="form-select" name="guru_id" id="guru_id">
                            <option selected>Pilih ID Guru</option>
                            <option>{{$mapels->guru_id}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ID Kelas</label>
                           <select class="form-select" name="kelas_id" id="kelas_id">
                               <option selected>Pilih ID Kelas</option>
                               <option>{{$mapels->kelas_id}}</option>
                           </select>
                       </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    {{-- Akhir Modal Tambah Data Mapel --}}

    {{-- Modal Edit Data Mapel --}}
    <div class="modal fade" id="tmapelModaledit" tabindex="-1" role="dialog" aria-labelledby="tguruModalLabeledit" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-edit" id="editModalLabel">Edit Data Mapel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/admin/mapel/{{$mapels->id}}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" id="mid" name="mid">
                    <div class="form-group">
                    <label>Nama Mata Pelajaran</label>
                    <input type="text" class="form-control" value="{{$mapels->mata_pelajaran}}" name="mata_pelajaran" id="mata_pelajaran">
                    </div>
                    <div class="form-group">
                        <label>ID Guru</label>
                           <select class="form-select" name="guru_id" id="guru_id">
                               <option>Pilih ID Guru</option>
                               <option selected>{{$mapels->guru_id}}</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <label>ID Kelas</label>
                              <select class="form-select" name="kelas_id" id="kelas_id">
                                  <option>Pilih ID Kelas</option>
                                  <option selected>{{$mapels->kelas_id}}</option>
                              </select>
                          </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning">Ubah</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    {{-- Akhir Modal Edit Data Mapel --}}
@endsection