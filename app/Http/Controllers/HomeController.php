<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $magangs = Magang::latest()->limit(10)->get();
        return view('home', compact('magangs'));
    }
}
