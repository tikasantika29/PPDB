@extends('templates.main')
@section('container')
<div class="conatiner-fluid content-inner mt-n5 py-0">
<div class="row">
    <div class="col-sm-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between">
             <div class="header-title">
                <h4 class="card-title">Informasi Pendaftar PPDB 2023 Kab.Kuningan</h4>
             </div>
          </div>
          <div class="card-body">
             <div class="table-responsive">
                <table id="datatable" class="table table-striped" data-toggle="data-table">
                   <thead>
                      <tr>
                         <th>No.</th>
                         <th>No. Pendaftaran</th>
                         <th>NISN</th>
                         <th>Nama Lengkap</th>
                         <th>Status Diterima</th>
                         <th>Tujuan</th>
                         <th>Aksi</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>Tiger Nixon</td>
                         <td>System Architect</td>
                         <td>Edinburgh</td>
                         <td>61</td>
                         <td>2011/04/25</td>
                      </tr>
                      <tr>
                         <td>Garrett Winters</td>
                         <td>Accountant</td>
                         <td>Tokyo</td>
                         <td>63</td>
                         <td>2011/07/25</td>
                      </tr>
                   </tbody>
                   <tfoot>
                      <tr>
                         <th>No.</th>
                         <th>No. Pendaftaran</th>
                         <th>NISN</th>
                         <th>Nama Lengkap</th>
                         <th>Status Diterima</th>
                         <th>Tujuan</th>
                         <th>Aksi</th>
                      </tr>
                   </tfoot>
                </table>
             </div>
             <a href="{{ url('dashboard') }}" class="btn btn-primary btn-sm mb-2 mt-3">Tutup</a>
          </div>
       </div>
    </div>
 </div>
</div>
 @endsection