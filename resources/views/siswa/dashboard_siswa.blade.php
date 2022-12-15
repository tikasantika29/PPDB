@extends('siswa.main')
@section('container')

<body class="   boxed">
   <title>Dashboard Siswa</title>
    <div class="boxed-inner">
      <!-- loader Start -->
      <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>      </div>
      <!-- loader END -->
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
            <a href="{{ ('beranda') }}" class="logo-center navbar-brand col-md-3 col-lg-3 ms-0">
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
               <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab" id="profile-pills-tab" role="tablist">
                <li class="nav-item">
                   <a class="nav-link active show" data-bs-toggle="tab" href="#profile-panduan" role="tab" aria-selected="false">Panduan</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" data-bs-toggle="tab" href="#profile-pendaftaran" role="tab" aria-selected="false">Pendaftaran</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" data-bs-toggle="tab" href="#profile-pengumuman" role="tab" aria-selected="false">Pengumuman</a>
                </li>
             </ul>
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
            <div class="profile-content tab-content">
                <div id="profile-panduan" class="tab-pane fade active show">
                      <div class="card">
                         <div class="card-body">
                            <div class="iq-timeline m-0 d-flex align-items-center justify-content-between position-relative">
                               <ul class="list-inline p-0 m-0 w-100">
                                  <li>
                                     <div class="time"> 
                                        <span>Mei 2023</span>
                                     </div>
                                     <div class="content">
                                        <div class="timeline-dots new-timeline-dots"></div>
                                           <h6 class="mb-1">Siswa Menyiapkan Dokumen</h6>
                                           <div class="d-inline-block w-100">
                                           <p>Dokumen tersebut nanti akan diunggah saat pendaftaran</p>
                                           </div>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="time bg-success">
                                        <span>Juni 2023</span>
                                     </div>
                                     <div class="content">
                                        <div class="timeline-dots new-timeline-dots border-success"></div>
                                           <h6 class="mb-1">Siswa Melakukan Pendaftaran</h6>
                                           <div class="d-inline-block w-100">
                                           <p>Siswa mengajukan pendaftaran secara online di web PPDB Online Kuningan disertai dengan mengunggah dokumen persyaratan yang sebelumnya telah disiapkan</p>
                                        </div>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="time">
                                        <span>Juli 2023</span>
                                     </div>
                                     <div class="content">
                                        <div class="timeline-dots border-primary"></div>
                                           <h6 class="mb-1">Verifikasi Pendaftaran Oleh Operator</h6>
                                           <div class="d-inline-block w-100">
                                           <p>Operator akan melakukan verifikasi pendaftaran yang diajukan oleh siswa secara online</p>
                                        </div>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="time bg-success">
                                        <span>Juli 2023</span>
                                     </div>
                                     <div class="content">
                                        <div class="timeline-dots border-success"></div>
                                           <h6 class="mb-1">Pengumuman Hasil Seleksi</h6>
                                           <div class="d-inline-block w-100">
                                           <p>Siswa yang telah mendaftar memantau hasil seleksi secara online yang akan diumumkan di web PPDB Kuningan</p>
                                        </div>
                                     </div>
                                  </li>
                               </ul>
                            </div>
                         </div>
                    </div>
                </div>
                <div id="profile-pendaftaran" class="tab-pane fade">
                    <div class="card">
                       <div class="card-body">
                            <div class="bg-example">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                        <center>Pilih Salah Satu Jalur Masuk</center>
                                    </a>
                                    <a href="{{ url('zonasi') }}" class="list-group-item list-group-item-action">Zonasi</a>
                                    <a href="{{ url('prestasi') }}" class="list-group-item list-group-item-action">Prestasi</a>
                                    <a href="{{ url('afirmasi') }}" class="list-group-item list-group-item-action">Afirmasi</a>
                                    <a href="{{ url('kepindahan') }}" class="list-group-item list-group-item-action">Kepindahan Orang Tua</a>
                                </div>
                            </div>
                          </div>
                       </div>
              </div>
              <div id="profile-pengumuman" class="tab-pane fade">
                <div class="card">
                   <div class="card-body">
                    <center><img src="{{ asset('style/html/assets/images/toa 1.png') }}" width="350px" height="250px">
                        <form class="d-flex">
                           <input class="form-control me-2" type="search" placeholder="Masukkan No.Pendaftaran" aria-label="Search">
                           <a class="btn btn-outline-dark" type="submit">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                 <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                               </svg>
                           </a>
                       </form>
                     </center>
                   </div>
              </div>
          </div>

            </div>
        </div>
        @include('sweetalert::alert')
    
        @endsection