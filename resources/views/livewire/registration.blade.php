<div class="pt-5">
    @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link {{ $currentStep != 1 ? '' : 'active' }}" href="#step1">No. Peserta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentStep != 2 ? '' : 'active' }}" href="#step2">Info Peserta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentStep != 3 ? '' : 'active' }}" href="#step3">Pilih Sekolah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentStep != 4 ? '' : 'active' }}" href="#step4">Unggah Persyaratan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentStep != 5 ? '' : 'active' }}" href="#step5">Cek Ulang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentStep != 6 ? '' : 'active' }}" href="#step6">Selesai</a>
        </li>
    </ul>
    <div class="row pt-3">
        {{-- Step 1 --}}
        <div id="step1" class="needs-validation" style="display: {{ $currentStep != 1 ? 'none' : '' }}">
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="number" wire:model="nisn" class="form-control {{$errors->first('nisn') ? "is-invalid" : "" }}" id="nisn">
                @error('nik')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary" wire:click="firstStepSubmit"
                type="button">Selanjutnya</button>
        </div>

        {{-- Step 2 --}}
        <div id="step2" style="display: {{ $currentStep != 2 ? 'none' : '' }}">
            <hr><h6 class="mb-4"><b>Data Asal Sekolah</b></h6><hr>
            <div class="mb-3">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" wire:model="asal_sekolah" class="form-control {{$errors->first('asal_sekolah') ? "is-invalid" : "" }}" id="asal_sekolah">
                @error('asal_sekolah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            @foreach ($siswa as $value)
                
            <hr><h6 class="mb-4"><b>Biodata Siswa</b></h6><hr>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" wire:model="nama" class="form-control {{$errors->first('nama') ? "is-invalid" : "" }}"  id="nama" aria-describedby="nama" value="{{ $value->nama }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" wire:model="nisn" class="form-control {{$errors->first('nisn') ? "is-invalid" : "" }}" id="nisn" aria-describedby="nisn" disabled>
                @error('nisn')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label><br>
                <label class="radio-inline me-2"><input type="radio" wire:model="jk" class="me-2" value="Laki-Laki"
                    {{{ $jk == 'Laki-Laki' ? "checked" : "" }}}>Laki-Laki</label>
                    <label class="radio-inline"><input type="radio" wire:model="jk" class="me-2" value="Perempuan"
                        {{{ $jk == 'Perempuan' ? "checked" : "" }}}>Perempuan</label>
                        @error('jk') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" wire:model="tempat_lahir" class="form-control {{$errors->first('tempat_lahir') ? "is-invalid" : "" }}" id="tempat_lahir">
                        @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" wire:model="tgl_lahir" class="form-control {{$errors->first('tgl_lahir') ? "is-invalid" : "" }}"  id="tgl_lahir" value="">
                @error('tgl_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" wire:model="alamat" class="form-control {{$errors->first('alamat') ? "is-invalid" : "" }}" id="alamat" aria-describedby="alamat" value="">
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama_ortu" class="form-label">Nama Orang Tua</label>
                <input type="text" wire:model="nama_ortu" class="form-control {{$errors->first('nama_ortu') ? "is-invalid" : "" }}"  id="nama_ortu" aria-describedby="nama_ortu" value="{{ $value->nama_ortu }}">
                @error('nama_ortu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-danger" type="button" wire:click="back(1)">Kembali</button>
            <button class="btn btn-primary" type="button" wire:click="secondStepSubmit">Selanjutnya</button>
        </div>
        @endforeach
        
        {{-- Step 3 --}}
        <div id="step3" style="display: {{ $currentStep != 3 ? 'none' : '' }}">
            <div class="form-group">
                <label class="form-label" for="pilihan1">Pilihan 1</label>
                <select class="form-select mb-3 shadow-none" wire:model="pilihan1">
                    <option selected=""></option>
                    <option>SMPN 1 KUNINGAN</option>
                    <option>SMPN 2 KUNINGAN</option>
                    <option>SMPN 3 KUNINGAN</option>
                    <option>SMPN 4 KUNINGAN</option>
                    <option>SMPN 5 KUNINGAN</option>
                    <option>SMPN 6 KUNINGAN</option>
                    <option>SMPN 7 KUNINGAN</option>
                </select>
                @error('pilihan2') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="pilihan2">Pilihan 2</label>
                <select class="form-select mb-3 shadow-none" wire:model="pilihan2">
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
            <button class="btn btn-danger" type="button" wire:click="back(2)">Kembali</button>
            <button class="btn btn-primary" type="button" wire:click="thirdStepSubmit">Selanjutnya</button>
        </div>

        {{-- Step 4 --}}
        <div id="step4" style="display: {{ $currentStep != 4 ? 'none' : '' }}">
            <hr><h6 class="mb-4"><b>Upload Data Persyaratan (.jpg dan .pdf)</b></h6><hr>
            {{-- <form wire:submit.prevent="save">
            <div class="form-group">
                <label for="berkas1" class="form-label">Kartu Keluarga (Ukuran Maksimal: 1 MB)</label>
                <input type="file"  class="form-control"  wire:model="photo1">
            </div>
            <div class="form-group">
                <label for="berkas2" class="form-label">Ijazah / Surat Keterangan Lulus (Ukuran Maksimal: 1 MB)</label>
                <input type="file"  class="form-control" wire:model="photo2">
            </div>
            <div class="form-group">
                <label for="berkas3" class="form-label">Akta Kelahiran (Ukuran Maksimal: 1 MB)</label>
                <input type="file"  class="form-control"  wire:model="photo3">
            </div>
            <button type="submit">Save Photo</button>
            </form> --}}
            {{-- <livewire:upload-photo></livewire:upload-photo> --}}
            <button class="btn btn-danger" type="button" wire:click="back(3)">Kembali</button>
            <button class="btn btn-primary" type="button" wire:click="updatedPhoto">Selanjutnya</button>
         </div>
         {{-- <div id="step4" style="display: {{ $currentStep != 4 ? 'none' : '' }}">
            <hr><h6 class="mb-4"><b>Upload Data Persyaratan (.jpg dan .pdf)</b></h6><hr>
            <div class="form-group">
                <form wire:submit.prevent="save">
                    <input type="file" wire:model="photo">
                
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                
                    <button type="submit">Save Photo</button>
                </form>
            </div>
            <button class="btn btn-danger" type="button" wire:click="back(3)">Kembali</button>
            <button class="btn btn-primary" type="button" wire:click="fourthStepSubmit">Selanjutnya</button>
         </div> --}}

        {{-- Step 5 --}}
        <div id="step4" style="display: {{ $currentStep != 5 ? 'none' : '' }}">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama: {{$nama}}</li>
                <li class="list-group-item">NISN: {{ $nisn }}</li>
                <li class="list-group-item">Jenis Kelamin: {{$jk ? 'Laki-Laki' : 'Perempuan'}}</li>
                <li class="list-group-item">Tempat Lahir: {{ $tempat_lahir }}</li>
                <li class="list-group-item">Tanggal Lahir: {{$tgl_lahir}}</li>
                <li class="list-group-item">Alamat: {{ $alamat }}</li>
                <li class="list-group-item">Nama Orang Tua: {{$nama_ortu}}</li>
                <li class="list-group-item">Pilihan 1: {{ $pilihan1 }}</li>
                <li class="list-group-item">Pilihan 2: {{ $pilihan2 }}</li>
                <li class="list-group-item">Berkas 1: {{ $photo1 }}</li>
                <li class="list-group-item">Berkas 2: {{$photo2}}</li>
                <li class="list-group-item">Berkas 3: {{ $photo3 }}</li>
            </ul>
            <button class="btn btn-danger" type="button" wire:click="back(4)">Kembali</button>
            <button class="btn btn-success" wire:click="submitForm" type="button">Daftar</button>
        </div>

         {{-- Step 6 --}}
        <div id="step6" style="display: {{ $currentStep != 6 ? 'none' : '' }}">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama Peserta: {{$nama}}</li>
                <li class="list-group-item">Nomor Peserta: {{ $nisn }}</li>
                <li class="list-group-item">Kode Verifikasi: {{$k_verifikasi}}</li>
            </ul>
            <button class="btn btn-success" wire:click="submitForm" type="button">Selesai</button>
        </div>
    </div>
</div>