@extends('template.main')
@section('content')
<div class="card-body">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h6 class="mb-2 text-primary">Profile Guru</h6>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
                <label for="fullName">Nama Lengkap</label>
                <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
                <label for="eMail">Jenis Kelamin</label>
                <input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
                <label for="phone">NIP</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
                <label for="website">Tempat Lahir</label>
                <input type="url" class="form-control" id="website" placeholder="Website url">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
                <label for="phone">Tanggal Lahir</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
                <label for="website">Golongan</label>
                <input type="url" class="form-control" id="website" placeholder="Website url">
            </div>
        </div>
    </div>
    <div class="row gutters mt-3">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-end">
            <div class="text-right">
                <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
@endsection