@extends('siswa.dashboard_siswa')
@section('container')

<body class="   boxed">
    <title>Pendaftaran Jalur Afirmasi</title>
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
            <a href="../dashboard/index.html" class="logo-center navbar-brand col-md-3 col-lg-3 ms-0">
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
    <div>
         <div class="row">                
             <div class="col-sm-12 col-lg-12">
                 <div class="card">
                     <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                         <h4 class="card-title">Pendaftaran Jalur Afirmasi</h4>
                     </div>
                     </div>
                     <div class="card-body">
                     <form id="form-wizard1" class="mt-3 text-center">
                         <ul id="top-tab-list" class="p-0 row list-inline">
                             <li class="mb-2 col-lg-3 col-md-6 text-start active" id="account">
                                 <a href="javascript:void();">
                                     <div class="iq-icon me-3">
                                         <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                         </svg>                                        
                                     </div>
                                     <span class="dark-wizard">No. Peserta</span>
                                 </a>
                             </li>
                             <li id="personal" class="mb-2 col-lg-3 col-md-6 text-start">
                                 <a href="javascript:void();">
                                     <div class="iq-icon me-3">
                                         <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                         </svg>
                                     </div>
                                     <span class="dark-wizard">Info Peserta</span>
                                 </a>
                             </li>
                             <li id="payment" class="mb-2 col-lg-3 col-md-6 text-start">
                                 <a href="javascript:void();">
                                     <div class="iq-icon me-3">
                                         <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                         </svg>
                                     </div>
                                     <span class="dark-wizard">Cek Ulang</span>
                                 </a>
                             </li>
                             <li id="confirm" class="mb-2 col-lg-3 col-md-6 text-start">
                                 <a href="javascript:void();">
                                     <div class="iq-icon me-3">
                                         <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                         </svg>
                                     </div>
                                     <span class="dark-wizard">Selesai</span>
                                 </a>
                             </li>
                         </ul>
                         <!-- fieldsets -->
                         <fieldset>
                             <div class="form-card text-start">
                                 <div class="row">
                                 </div>
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
                             <button type="button" name="next" class="btn btn-primary next action-button float-end" value="Next" >Selanjutnya</button>
                             <a href="{{ ('dashboard_siswa') }}" type="button" name="cancel" class="btn btn-danger me-1 cancel action-button float-end" value="Cancel" >Batal</a>
                         </fieldset>
                         <fieldset>
                             <div class="form-card text-start">
                                 <div class="row">
                                 <div class="col-7">
                                     <h3 class="mb-4">DATA ASAL SEKOLAH</h3>
                                 </div>
                                 </div>
                                 <div class="row">
                                     <div class="form-group">
                                        <hr><h6 class="mb-4"><b>Data Asal Sekolah</b></h6><hr>
                                            <label class="form-label">Asal Sekolah</label>
                                            <input type="text" class="form-control" name="asalsekolah" disabled />
                                     </div>
                                    <hr><h6 class="mb-4"><b>BIODATA SISWA</b></h6><hr>
                                     <div class="form-group">
                                         <label class="form-label">Nama lengkap</label>
                                         <input type="text" class="form-control" name="nama" disabled/>
                                     </div>
                                     <div class="form-group">
                                         <label class="form-label">Jenis Kelamin</label>
                                         <div class="form-check d-block">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Laki-Laki
                                            </label>
                                        </div>
                                        <div class="form-check d-block">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Perempuan
                                            </label>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="form-label">Tempat Lahir</label>
                                         <input type="text" class="form-control" name="tempat" disabled />
                                     </div>
                                    <div class="form-group">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="ttl" disabled />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat"/><br>
                                        <div id="googleMap" style="width:100%;height:380px;"></div>
                                    </div>
                                    <div class="form-group">
                                        <hr><h6 class="mb-4"><b>DATA TAMBAHAN</b></h6><hr>
                                        <label class="form-label">Domisili</label>
                                            <select class="form-select mb-3 shadow-none">
                                            <option selected="selected"></option>
                                            <option>Dalam Kabupaten</option>
                                            <option>Luar Kabupaten</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">No. HP Orang Tua (Whatsapp)</label>
                                        <input type="number" class="form-control" name="no_hpo"/><br>
                                    </div>
                                    <div class="form-group">
                                        <hr><h6 class="mb-4"><b>SEKOLAH TUJUAN</b></h6><hr>
                                        <label class="form-label">Pilihan 1</label>
                                        <select class="form-select mb-3 shadow-none">
                                            <option selected=""></option>
                                            <option>SMPN 1 KUNINGAN</option>
                                            <option>SMPN 2 KUNINGAN</option>
                                            <option>SMPN 3 KUNINGAN</option>
                                            <option>SMPN 4 KUNINGAN</option>
                                            <option>SMPN 5 KUNINGAN</option>
                                            <option>SMPN 6 KUNINGAN</option>
                                            <option>SMPN 7 KUNINGAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Pilihan 2</label>
                                            <select class="form-select mb-3 shadow-none">
                                            <option selected="selected"></option>
                                            <option>SMPN 1 KUNINGAN</option>
                                            <option>SMPN 2 KUNINGAN</option>
                                            <option>SMPN 3 KUNINGAN</option>
                                            <option>SMPN 4 KUNINGAN</option>
                                            <option>SMPN 5 KUNINGAN</option>
                                            <option>SMPN 6 KUNINGAN</option>
                                            <option>SMPN 7 KUNINGAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <hr><h6 class="mb-4"><b>UNGGAH DATA PERSYARATAN (.jpg dan .pdf)</b></h6><hr>
                                        <label for="customFile" class="form-label custom-file-input">Kartu Keluarga (Ukuran Maksimal: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile2" class="form-label custom-file-input">Ijazah / Surat Keterangan Lulus (Ukuran Maksimal: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile2">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile3" class="form-label custom-file-input">Akta Kelahiran (Ukuran Maksimal: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile3">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile4" class="form-label custom-file-input">Kartu Bantuan Pemerintah (Ukuran Maksimal: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile4">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile5" class="form-label custom-file-input">Foto Depan Rumah (Ukuran Maksimal: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile5">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile5" class="form-label custom-file-input">Surat Keterangan Psikolog (Ukuran Maksimal: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile5">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile6" class="form-label custom-file-input">Surat Keterangan Tidak Mampu (Ukuran Maksimal: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile6">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile7" class="form-label custom-file-input">Surat Keterangan Domisili dari Desa/kelurahan (Ukuran Maksimal: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile7">
                                    </div>
                                 </div>
                             </div>
                             <button type="button" name="next" class="btn btn-primary next action-button float-end" value="Next" >Selanjutnya</button>
                             <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-end me-1" value="Previous" >Sebelumnya</button>
                         </fieldset>
                         <fieldset>
                             <div class="form-card text-start">
                                <div class="mt-1">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">Cek Ulang</h4>
                                            </div>
                                            </div>
                                            <div class="card-body p-0">
                                            <div class="table-responsive mt-1">
                                                <table id="basic-table" class="table mb-0" role="grid">
                                                    <thead>
                                                        <tr>
                                                            <th>Pilihan Sekolah</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Pilihan Ke-1</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>    
                                                            <td>Pilihan Ke-2</td>
                                                            <td></td>
                                                        </tr>
                                                        <thead>
                                                            <tr>
                                                                <th>Info Peserta</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                            <tr>
                                                                <td>NISN</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>    
                                                                <td>Sekolah Asal</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Lulusan</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>    
                                                                <td>Tahun Lulus</td>
                                                                <td></td>
                                                            </tr>
                                                            <thead>
                                                                <tr>
                                                                    <th>Data Asal Sekolah</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                                <tr>
                                                                    <td>Nama Sekolah</td>
                                                                    <td></td>
                                                                </tr>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Biodata Siswa</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                    <tr>
                                                                        <td>Nama Lengkap</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jenis Kelamin</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tempat, Tanggal Lahir</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Alamat Lengkap</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Data Tambahan</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                        <tr>
                                                                            <td>Domisili</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>No.HP Orang Tua (Whatsapp)</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Berkas Yang Diunggah</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                            <tr>
                                                                                <td>Kartu Keluarga</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Ijazah / Surat Keterangan Lulus</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Akta Kelahiran</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            tr>
                                                                                <td>Kartu Bantuan Pemerintah</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Foto Depan Rumah</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Surat Keterangan Psikolog</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Surat Keterangan Tidak Mampu</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Surat Keterangan Domisili dari Desa/kelurahan</td>
                                                                                <td></td>
                                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="bd-example">
                                            <div class="mb-0 alert alert-primary" role="alert">
                                                <p>Saya yang tercantum diatas, menyatakan bahwa data yang saya isikan diatas adalah benar adanya, dan saya menyatakan mengikuti proses PPDB SMP jalur Zonasi di Kab.Kuningan Periode 2023/2024 secara sadar dan bersedia mematuhi semua aturan yang berlaku dengan segala konsekuensinya. Jika dikemudian hari data yang saya unggah tidak sesuai dengan data sebenarnya, maka saya bersedia mendapatkan sanksi yang sesuai dengan Undang-Undang yang berlaku.</p>
                                            </div>
                                        </div>
                                        <div class="form-check d-block">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                            <label class="form-check-label" for="flexCheckDefault11">
                                                Saya Setuju
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                             </div>
                             <button type="button" name="next" class="btn btn-primary next action-button float-end" value="Submit" >Submit</button>
                             <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-end me-1" value="Previous" >Previous</button>
                         </fieldset>
                         <fieldset>
                            <div class="mt-1">
                                <div class="row">
                                  <div class="col-sm-12">
                                      <div class="card">
                                          <div class="card-header d-flex justify-content-between">
                                          <div class="header-title">
                                              <h4 class="card-title">Pendaftaran Selesai</h4>
                                          </div>
                                          </div>
                                          <div class="card-body p-0">
                                          <div class="table-responsive mt-1">
                                              <table id="basic-table" class="table mb-0" role="grid">
                                                  <thead>
                                                      <tr>
                                                          <th>Data Peserta</th>
                                                          <th></th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td>Nama Peserta</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>    
                                                          <td>Nomor Peserta</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>    
                                                        <td>Kode Verifikasi</td>
                                                        <td></td>
                                                    </tr>
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="bd-example">
                                        <div class="mb-2 alert alert-warning" role="alert">
                                            Anda <b>WAJIB</b> melakukan Cetak (Print Out) Tanda Bukti Pengajuan Pendaftaran dibawah ini.
                                        </div>
                                    </div>
                                    <center><div class="mb-2 col-12">
                                        <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-success"><i class="fas fa-print"></i>Cetak Bukti Ajuan Pendaftaran</a>
                                        </button>
                                        </div></center>
                                        <a href="{{ url('dashboard_siswa') }}" class="btn btn-primary next action-button float-end">Selesai</a>
                         </fieldset>
                     </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   </div>
@endsection