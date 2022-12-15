<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Ramsey\Uuid\v1;

class AdminSDController extends Controller
{
    public function __construct()
    {
      $this->middleware(['admin_sd', 'verified']);
    }

    public function index(Request $request){
        return view('adminsd.index', $request);
    }
    public function profil(){
        return view('users.profil');
    }
    public function operator(){
        return view('adminsd.operator');
    }
    public function tambah_operator(){
        return view('adminsd.tambah_operator');
    }
    public function zonasi(){
        return view('adminsd.zonasi');
    }

    public function add_zonasi(Request $request){
        $request->validate([
            'nisn' => 'required|min:2',
            'sekolah_asal' => 'required',
            'jenis_lulusan' => 'required',
            'tahun_lulus' => 'required',
        ]);   
    }
    public function prestasi(){
        return view('adminsd.prestasi');
    }
    public function afirmasi(){
        return view('adminsd.afirmasi');
    }
    public function kepindahan(){
        return view('adminsd.kepindahan');
    }
    public function jalur2(){
        return view('adminsd.jalur2');
    }
}