@extends('template.main')
@section('content')
<div class="row bg-light rounded mx-0 p-4">
    <h4>Isi Absensi</h4>
    <form>
        <div class="mb-3">
            <label for="kelas">Kelas</label>
            <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                <option name="kelas" id="kelas" selected>Pilih Kelas</option>
                @foreach($kelas as $item)
                <option value="{{$item->id}}" name="kelas" id="kelas">{{$item->kelas}}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="mata_pelajaran">Mata Pelajaran</label>
            <select class="form-select" aria-label="Default select example" name="mata_pelajaran" id="mata_pelajaran">
                <option name="kelas" id="kelas" selected>Pilih Mata Pelajaran</option>
                @foreach($mata_pelajaran as $item)
                <option value="{{$item->id}}" name="kelas" id="kelas">{{$item->kelas}}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection