@extends('siswa.dashboard_siswa')
@section('container')

<body class="boxed">
    <title>Pendaftaran Jalur Zonasi</title>
    <div class="boxed-inner">
      <span class="screen-darken"></span>
      <main class="main-content">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
          <div class="container-fluid navbar-inner">
            <button data-trigger="navbar_main" class="d-lg-none btn btn-primary rounded-pill p-1 pt-0" type="button">
              <svg width="20px" height="20px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
            </svg>
            </button>
            <a href="" class="logo-center navbar-brand col-md-3 col-lg-3 ms-0">
                <!--Logo start-->
               <img src="{{ asset('style/logod.png') }}" alt="" width="40" height="40">
                <!--logo End-->        <h4 class="logo-title">PPDB Online 2023</h4>
            </a>
            <!-- Horizontal Menu Start -->
            <nav id="navbar_main" class="mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav mx-md-auto">
            <div class="container-fluid">
               <div class="offcanvas-header px-0">
                  <div class="navbar-brand ms-0">
                     <!--Logo start-->
                     <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                         <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                         <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                         <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                     </svg>
                     <!--logo End-->         <h4 class="logo-title">PPDB Online 2023</h4>
                  </div>
                  <button class="btn-close float-end"></button>
               </div>
               
            </div> <!-- container-fluid.// -->
            </nav>
            <!-- Sidebar Menu End -->    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon">
                  <span class="navbar-toggler-bar bar1 mt-2"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                      <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('style/html/assets/images/avatars/01.png') }}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                        <img src="../assets/images/avatars/avtar_1.png" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                        <img src="../assets/images/avatars/avtar_2.png" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                        <img src="../assets/images/avatars/avtar_4.png" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                        <img src="../assets/images/avatars/avtar_5.png" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                        <img src="../assets/images/avatars/avtar_3.png" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
                        <div class="caption ms-3 ">
                            <h6 class="mb-0 caption-title">Hi, Calon Siswa!</h6>
                        </div>
                      </a>
                </ul>
              </div>
              <div>                            
                <a class="button" type="submit" href="{{ ('beranda') }}">
                   <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM15.01 14.9993C15.35 14.6603 15.35 14.1103 15.01 13.7703L13.23 11.9903L15.01 10.2093C15.35 9.87027 15.35 9.31027 15.01 8.97027C14.67 8.62927 14.12 8.62927 13.77 8.97027L12 10.7493L10.22 8.97027C9.87 8.62927 9.32 8.62927 8.98 8.97027C8.64 9.31027 8.64 9.87027 8.98 10.2093L10.76 11.9903L8.98 13.7603C8.64 14.1103 8.64 14.6603 8.98 14.9993C9.15 15.1693 9.38 15.2603 9.6 15.2603C9.83 15.2603 10.05 15.1693 10.22 14.9993L12 13.2303L13.78 14.9993C13.95 15.1803 14.17 15.2603 14.39 15.2603C14.62 15.2603 14.84 15.1693 15.01 14.9993Z" fill="currentColor"></path>
                   </svg>                   
                </a>                     
             </div>
          </div>
        </nav>        <!--Nav End-->
        <div class="conatiner-fluid content-inner pb-0">
         <div class="row">                
             <div class="col-sm-12 col-lg-12">
                {{-- <form action="{{ url('siswa/'.$siswa->id) }}" method="post">
                    @method('patch');
                     @csrf --}}
                 <div class="card">
                     <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                         <h4 class="card-title">Pendaftaran Jalur Zonasi</h4>
                     </div>
                     </div>
                     <div class="card-body">
                        <div class="row">
                        <div class="form-group">
                            <label class="form-label" for="nisn">NISN</label>
                            <input type="text" class="form-control" id="nisn" value="">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="sekolah_asal">Sekolah Asal</label>
                            <div class="form-check d-block">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Dalam Kabupaten
                                </label>
                            </div>
                            <div class="form-check d-block">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Luar Kabupaten
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Jenis Lulusan</label>
                            <select class="form-select mb-3 shadow-none">
                                <option selected=""></option>
                                <option value="1">Reguler</option>
                                <option value="2">Paket A / B / SLB / Lain-Lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tahun Lulus</label>
                            <select class="form-select mb-3 shadow-none">
                                <option selected=""></option>
                                <option value="1">2020</option>
                                <option value="2">2021</option>
                                <option value="3">2022</option>
                            </select>
                        </div>
                        </div>
                        <a type="button"  class="btn btn-primary next action-button float-end" href="">Selanjutnya</button>
@endsection