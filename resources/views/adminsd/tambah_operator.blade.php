@extends('templates.main_sd')
@section('container')
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-sm-12">
           <div class="card">
              <div class="card-header d-flex justify-content-between">
                 <div class="header-title">
            <h4 class="card-title">Tambah Operator</h4>
        </div>
    </div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label class="form-label" for="nama">Nama Operator:</label>
                <input type="label" class="form-control" id="email1">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Email:</label>
                <input type="email" class="form-control" id="email1">
            </div>
            <div class="form-group">
                <label class="form-label" for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-danger">Batal</button>
        </form>
    </div>
</div>
@endsection