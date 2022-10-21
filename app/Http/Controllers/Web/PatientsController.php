<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PatientsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editPatient(){
        return view("patients.edit");
    }

    public function patientsList(){
        return view('patients.list');
    }

}
