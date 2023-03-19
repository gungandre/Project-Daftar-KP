<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikasiController extends Controller
{
    public function index(){
        return view('auth.verifikasi');
    }
    public function waitForm(){
        return view('auth.waitform');
    }
}
