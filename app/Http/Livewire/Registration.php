<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Siswa;

class Registration extends Component
{
    public $currentStep = 1;
    public $nama, $nik, $nisn, $jk, $tempat_lahir, $tgl_lahir, $alamat, $nama_ortu, $pilihan1, $pilihan2, $photo1, $photo2, $photo3, $k_verifikasi, $asal_sekolah;
    public $successMessage = '';

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'nisn' => 'required',
        ]);
 
        $this->currentStep = 2;
    }
  
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'asal_sekolah' => 'required',
            'nama' => 'required',  
            'nisn' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'nama_ortu' => 'required',
        ]);
  
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'pilihan1' => 'required',
            'pilihan2' => 'required',  
        ]);
  
        $this->currentStep = 4;
    }

    // public function fourthStepSubmit()
    // {
    //     $validatedData = $this->validate([
    //         'berkas1' => 'required',
    //         'berkas2' => 'required',
    //         'berkas3' => 'required', 
    //     ]);
  
    //     $this->currentStep = 5;
    // }


  
    public function submitForm()
    {
        Siswa::create([
            'nama' => $this->nama,
            'nik' => $this->nik,
            'nisn' => $this->nisn,
            'jk' => $this->jk,
            'tempat_lahir' => $this->tempat_lahir,
            'tgl_lahir' => $this->tgl_lahir,
            'alamat' => $this->alamat,
            'nama' => $this->nama_ortu,
        ]);
  
        $this->successMessage = 'You\'ve successfully registered';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    public function clearForm()
    {
        $this->nama = '';
        $this->nik = '';
        $this->nisn = '';
        $this->jk = '';
        $this->tempat_lahir = '';
        $this->tgl_lahir = '';
        $this->alamat = '';
        $this->nama_ortu = '';
    }
    
    public function render()
    {
        return view('livewire.registration');
    }
 
    // public function mount($photo){
    //     $this->photo = $photo;
    // }
}