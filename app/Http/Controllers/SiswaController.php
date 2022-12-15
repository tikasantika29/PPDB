<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth');
    // }

    // public function index()
    // {
    //     // if (request()->user()->hasRole('siswa')) {
    //     //     return view('siswa.jalur');
    //     // } else {
    //     //     return redirect('/login');
    //     // } 
    // }

    public function data(){
        $siswa = Siswa::all();
        return view('siswa.siswa', ['siswa' => $siswa]);
    }
    public function dashboard_siswa(){
        return view('siswa.dashboard_siswa'); 
    }

    public function jalur(){
        return view('siswa.jalur');
    }

    public function zonasi($nisn){
        $siswa = Siswa::find($nisn);
        return view('siswa.zonasi', compact($siswa));
    }

    public function add_zonasi(Request $request){
        $request->validate([
            'nisn' => 'required|min:2',
            'sekolah_asal' => 'required',
            'jenis_lulusan' => 'required',
            'tahun_lulus' => 'required',
        ],[
            'nisn.required'=> 'NISN tidak boleh kosong',
            'sekolah_asal.required'=> 'Sekolah Asal tidak boleh kosong',
            'jenis_lulusan.required'=> 'Jenis Lulusan tidak boleh kosong',
            'tahun_lulus.required'=> 'Tahun Lulus tidak boleh kosong'
        ]);  
        
    }

    public function afirmasi(){
        return view('siswa.afirmasi');
    }

    public function prestasi(){
        return view('siswa.prestasi');
    }

    public function kepindahan(){
        return view('siswa.kepindahan');
    }

    public function test(){
        return view('siswa.test');
    }

    public function users()
    {
        $users = DB::table('users')->get();
        return view('templates.navbar', compact('users'));
    }

    public function siswa()
    {
        $siswa = DB::table('siswa')->get();
        return view('siswa.add', compact('siswa'));
    }

    public function add()
    {
        return view('siswa.add');
    }

    public function cari()
    {
        return view('siswa.cari');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|min:2',
            'nisn' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ],[
            'nama.required'=> 'Nama tidak boleh kosong',
            'nik.required'=> 'NIK tidak boleh kosong',
            'nisn.required'=> 'NISN tidak boleh kosong',
            'jk.required'=> 'Jenis kelamin tidak boleh kosong',
            'tempat_lahir.required'=> 'Tempat lahir tidak boleh kosong',
            'tgl_lahir.required'=> 'Tanggal lahir tidak boleh kosong',
            'alamat.required'=> 'Alamat tiwedak boleh kosong',
        ]);

        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ]);
        return view('siswa.add')->with('status', 'Data Siswa Berhasil Ditambahkan');
    }

    public function ambil($id_siswa){
        $siswa = DB::table('siswa')->where('id_siswa', $id_siswa)->first();
        return view('siswa.zonasi', compact('siswa'));
    }

    public function editProcess(Request $request, $id){
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|min:2',
            'nisn' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);
        
        DB::table('siswa')->where('id', $id)
        ->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'nisn' => $request->nis,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ]);
        return redirect('siswa')->with('status', 'Data Berhasil Diedit');
    }

    public function hapus($id){
        DB::table('siswa')->where('id', $id)->delete();
        return redirect('siswa')->with('status', 'Data Berhasil Dihapus');
    }

    // public function cari($id_siswa){
    //     $siswa = DB::table('siswa')->where('id_siswa', $id_siswa)->get();
    //     return view('users.edit', ['siswa' => $siswa]);
    // }
   
    public function find($id_siswa){
        $siswa  = Siswa::whereId($id_siswa)->first();
        return view('siswa.zonasi')->with('siswa', $siswa);
    }

    public function edit_siswa(){
        return view('siswa.edit_siswa');
    }

    public function edit($id_siswa)
    {
        $siswa = Siswa::find($id_siswa);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id_siswa)
    {
        $siswa = Siswa::find($id_siswa);
        $siswa->nama = $request->input('nama');
        $siswa->nik = $request->input('nik');
        $siswa->nisn = $request->input('nisn');
        $siswa->jk = $request->input('jk');
        $siswa->tempat_lahir = $request->input('tempat_lahir');
        $siswa->tgl_lahir = $request->input('tgl_lahir');
        $siswa->alamat= $request->input('alamat');
        $siswa->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }

    

}
