<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Ramsey\Uuid\v1;

class TemplatesController extends Controller{
    public function navbar(){
        return view('templates.navbar');
    }

    public function users()
    {
        $users = DB::table('users')->get();
        return view('admin.dashboard', compact('users'));
    }
}

?>