<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Select2Controller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function loadData(Request $request)   
    {
        if ($request->get('q')) {
            $data = DB::table('users')->select('id', 'email')->where('email', 'LIKE','%{$request->q}%')->get();
            return response()->json($data);
        }
    }
}