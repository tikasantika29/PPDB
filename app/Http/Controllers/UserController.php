<?php

namespace App\Http\Controllers;

use App\Notifications\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Post;
use RealRashid\SweetAlert;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function show(Request $request, $id){
        $value = $request->session()->get('key');
        $value = $request->session()->get('key', 'default');

        $value = $request->session()->get('key', function(){
            return 'default';
        });

        $data = $request->session()->all();
        if($request->session()->has('users')){

        }

        if($request->session()->exists('users')){
            
        }
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                $request->session::put('name',$data->name);
                $request->session('email',$data->email);
                $request->session('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }

    // public function user(){
    //     return view('users.users');
    // }

    public function users()
    {
        $users = DB::table('users')->get();
        return view('users.users', ['users' => $users]);
    }

    public function add()
    {
        return view('users.tambah_user');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required',
        ],
        [
            'name.required' => 'Nama Tidak Boleh Kosong',
            'role.required' => 'Role Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',

        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => $request->password,

        ]);
        return redirect('users')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit(User $users){
        return view('users.edit', ['user' => $users]);
    }

    public function editProcess(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        DB::table('users')->where('id', $id)
        ->update([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('users')->alert()->success('status', 'Data User Berhasil Diupdate');
    }

    public function delete($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('users')->with('success', 'Data Berhasil dihapus!');

    }

    public function tampil_edit(){
        return view('users.edit');
    }

    // public function index(){
    //     $roles = Role::count();
    //     $posts = Post::count();
    //     $siswa = User::where('role', 'siswa')->count();
    //     $admin_disdik = User::where('role', 'admin_disdik')->count();
    //     $admin_smp = User::where('role', 'admin_smp')->count();
    //     $admin_sd = User::where('role', 'admin_sd')->count();

    //     return view('users.users', compact('roles', 'post', 'siswa', 'admin_disdik', 'admin_smp', 'admin_sd'));
    // }

    public function profil(){
        return view('users.profil');
    }

    public function sendPasswordResetNotification($token)
    {
         $this->notify(new ResetPassword($token));
    }

    public function search()
    {
        return view('index');
    }

    public function autocomplete(Request $request)
    {        
        $data = User::select("name")
                ->where("name","LIKE","%{$request->str}%")
                ->get('query');   
        return response()->json($data);
    }
}