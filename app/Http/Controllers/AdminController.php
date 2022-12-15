<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Ramsey\Uuid\v1;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth');
    // }

    // public function buatSession(Request $request){
    //     $request->session()->put('nama', 'Euis Santika');
    //     echo "Data telah ditambah ke session";
    // }
    public function __construct()
    {
        $this->middleware(['admin_disdik', 'verified']);
    }


    public function masuk()
    {
        if (request()->user()->hasRole('admin_disdik')) {
            return view('admin.index');
        } else {
            return redirect('/login');
        } 
    }
    public function index(Request $request)
    {
        return view('admin.dashboard', $request);
    }

    public function tambah_admin(){
        return view('admin.tambah_admin');
    }

    public function tambah_siswa(){
        return view('admin.tambah_siswa');
    }

    public function jadwal(){
        return view('admin.jadwal');
    }

    public function jumlah_pendaftar(){
        return view('admin.jumlah_pendaftar');
    }

    public function jumlah_diterima(){
        return view('admin.jumlah_diterima');
    }

    public function jumlah_ditolak(){
        return view('admin.jumlah_ditolak');
    }
    
}
