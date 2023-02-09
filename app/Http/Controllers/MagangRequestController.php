<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Magang;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MagangRequestController extends Controller
{
    public function index()
    {
        return view('auth.magang-form');
    }
    public function requestForm(Request $request){
        $user = New User;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->email = $request->email;
        $user->password =Hash::make('123456789');
        $user->roles = 'user';

        $magang = array();
    }
}
