<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransfersController extends Controller
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

    public function editTransfer(){
        return view("transfers.edit");
    }

    public function activeTransfers(){
        return view("transfers.active");
    }

    public function transferIns(){
        return view("transfers.ins");
    }

    public function transferOuts(){
        return view("transfers.outs");
    }

}
