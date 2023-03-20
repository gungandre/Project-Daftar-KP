<?php

namespace App\Http\Controllers;

use App\Models\admin\Pembina;
use App\Models\Magang;
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
    public function dasboardRe(){
        $tidak = 'Belum di isi';
        $magang = Magang::where('user_id', Auth::user()->id)->first();
        $header_page = "Dashboard Menu";
        if (Auth::user()->roles == 'user') {
            $data = Magang::where('user_id', Auth::user()->id)->first();
        }

        return view('admin.layouts.dashboard.reject', compact('header_page', 'data', 'tidak','magang'));
    }
}
