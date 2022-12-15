<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Ramsey\Uuid\v1;

class AdminSMPController extends Controller
{
    public function __construct()
    {
      $this->middleware(['admin_smp', 'verified']);
    }

    public function index(Request $request){
        return view('adminsmp.index', $request);
    }
    public function profil(){
        return view('adminsmp.profil');
    }
    public function operator(){
        return view('adminsmp.operator');
    }
    public function tambah_operator(){
        return view('adminsmp.tambah_operator');
    }
    public function pengajuan(){
        return view('adminsmp.pengajuan');
    }

}