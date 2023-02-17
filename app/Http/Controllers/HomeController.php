<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $magangs = Magang::limit(10)->latest()->get();
        return view('home', compact('magangs'));
    }
}
