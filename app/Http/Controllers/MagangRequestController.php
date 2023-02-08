<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagangRequestController extends Controller
{
    public function index()
    {
        return view('auth.magang-form');
    }
}
