@extends('templates.main')
@section('container')
      <div class="conatiner-fluid content-inner mt-n5 py-0">
      <div class="row">
          <div class="col-sm-12">
             <div class="card">
                  <div class="card-body">
                     <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                           <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                              <img src="{{ asset('style/html/assets/images/avatars/01.png') }}" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100">
                           </div>
                           <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                              <h4 class="me-2 h4">{{ Auth::user()->name }}</h4>
                              <span> - {{ Auth::user()->role }}</span>
                           </div>
                        </div>
                     </div>
                  </div>
             </div>
          </div>
          <div class="col-sm-6">
                  <div class="card">
                     <div class="card-header">
                        <div class="header-title">
                           <h4 class="card-title">Profil Sekolah</h4><hr>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="mt-0">
                           <h6 class="mb-1">Nama Sekolah:</h6>
                           <p>SDN 1 Winduhaji</p>
                        </div>
                        <div class="mt-2">
                           <h6 class="mb-1">Alamat Sekolah:</h6>
                           <p>Jl.Tuba No.70 Lingk.Karanganyar, Winduhaji, Kuningan</p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">Contact:</h6>
                        <p><a href="#" class="text-body">(001) 4544 565 456</a></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="card">
                     <div class="card-header">
                        <div class="header-title">
                           <h4 class="card-title">Profil Admin</h4><hr>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="mt-0">
                        <h6 class="mb-1">Nama Lengkap:</h6>
                        <p>{{ Auth::user()->name }}</p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">Email:</h6>
                        <p><a href="#" class="text-body">{{Auth::user()->email}}</a></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">Contact:</h6>
                        <p><a href="#" class="text-body">(001) 4544 565 456</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
    
@endsection