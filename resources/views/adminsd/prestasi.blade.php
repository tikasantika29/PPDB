@extends('templates.main_sd')
@section('container')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
         <div class="row">                
             <div class="col-sm-12 col-lg-12">
                 <div class="card">
                     <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                         <h4 class="card-title">Pendaftaran Jalur Prestasi</h4>
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
                                    <button type="button" name="cancel" class="btn btn-danger cancel action-button float-end" value="Cancel" >Batal</button>
                         </fieldset>
                         <fieldset>
                             <div class="form-card text-start">
                                 <div class="row">
                                 <div class="col-7">
                                     <h3 class="mb-4">Informasi Peserta</h3>
                                 </div>
                                 </div>
                                 <div class="row">
                                     <div class="form-group">
                                        <hr><h6 class="mb-4"><b>Data Asal Sekolah</b></h6><hr>
                                            <label class="form-label">Asal Sekolah</label>
                                            <input type="text" class="form-control" name="asalsekolah" disabled />
                                     </div>
                                    <hr><h6 class="mb-4"><b>Biodata Siswa</b></h6><hr>
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
                                        <hr><h6 class="mb-4"><b>Data Tambahan</b></h6><hr>
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
                                        <hr><h6 class="mb-4"><b>Pilih Sekolah Tujuan</b></h6><hr>
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
                                        <hr><h6 class="mb-4"><b>Upload Data Persyaratan (.jpg dan .pdf)</b></h6><hr>
                                        <label for="customFile" class="form-label custom-file-input">Kartu Keluarga (Ukuran Maksmial: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile2" class="form-label custom-file-input">Ijazah / Surat Keterangan Lulus (Ukuran Maksmial: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile2">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile2" class="form-label custom-file-input">Akta Kelahiran (Ukuran Maksmial: 1 MB)</label>
                                        <input class="form-control" type="file" id="customFile3">
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
                                                            <td> SMP</td>
                                                        </tr>
                                                        <tr>    
                                                            <td>Pilihan Ke-2</td>
                                                            <td> SMP</td>
                                                        </tr>
                                                        <thead>
                                                            <tr>
                                                                <th>Info Peserta</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                            <tr>
                                                                <td>NISN</td>
                                                                <td>28983727</td>
                                                            </tr>
                                                            <tr>    
                                                                <td>Sekolah Asal</td>
                                                                <td>SDN 1 Kuningan</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Lulusan</td>
                                                                <td>Reguler</td>
                                                            </tr>
                                                            <tr>    
                                                                <td>Tahun Lulus</td>
                                                                <td>2022</td>
                                                            </tr>
                                                            <thead>
                                                                <tr>
                                                                    <th>Data Asal Sekolah</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                                <tr>
                                                                    <td>Nama Sekolah</td>
                                                                    <td>SDN 1 Winduhaji</td>
                                                                </tr>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Biodata Siswa</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                    <tr>
                                                                        <td>Nama Lengkap</td>
                                                                        <td>Euis Santika</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jenis Kelamin</td>
                                                                        <td>Perempuan</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tempat, Tanggal Lahir</td>
                                                                        <td>Kuningan, 29 Juli 1999</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Alamat Lengkap</td>
                                                                        <td>Winduhaji, Kuningan</td>
                                                                    </tr>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Data Tambahan</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                        <tr>
                                                                            <td>Domisili</td>
                                                                            <td>Dalam Kabupaten</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>No.HP Orang Tua (Whatsapp)</td>
                                                                            <td>081220650455</td>
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
                                              <h4 class="card-title">Cek Ulang</h4>
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
                                                          <td>Euis Santika</td>
                                                      </tr>
                                                      <tr>    
                                                          <td>Nomor Peserta</td>
                                                          <td>389247824</td>
                                                      </tr>
                                                      <tr>    
                                                        <td>Kode Verifikas</td>
                                                        <td>389</td>
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