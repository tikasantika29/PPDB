<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function view_patient(){
        return view('patient_details');
    }

    public function getCustomer(){
        $p = Customer::all();
        return response()->json($p);
    }
}
