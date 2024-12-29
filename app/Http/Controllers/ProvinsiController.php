<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    //
    public function index(){
        $data = Provinsi::all();
        return view("welcome",compact("data"));
    }
}
