@extends('siswa.dashboard_siswa')
@section('container')

<body class="   boxed">
    <div class="boxed-inner">
      <span class="screen-darken"></span>
      <main class="main-content">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                <form action="{{ url('siswa') }}" method="post">
                    @csrf
                             <div class="form-card text-start">
                                 <div class="row">
                                 </div>
                                 <div class="row">
                                    <div class="form-group">
                                        <label class="form-label" for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" autofocus>
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="nik">NIK</label>
                                        <input type="number" class="form-control" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                        @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="nisn">NISN</label>
                                        <input type="number" class="form-control" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}">
                                        @error('nisn')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="jk" name="jk" class="form-label">Jenis Kelamin</label>
                                        <input type="text" name= "jk" id="setting-input-2" class="form-control @error('jk') is-invalid @enderror" value="{{ old('jk') }}"> 
                                        @error('jk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                    <div class="form-group">
                                        <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}">
                                        @error('tempat_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir') }}">
                                        @error('tgl_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                                        @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success" >Simpan</button>
                                <button type="cancel" class="btn btn-danger" >Batal</button>
                     </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   </div>
@endsection