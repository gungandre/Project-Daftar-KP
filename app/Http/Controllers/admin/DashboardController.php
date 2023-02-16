<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Pembina;
use App\Models\Magang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $tidak = 'belum di isi';
        $header_page = "dashboard menu";
        if (Auth::user()->roles == 'user') {
            $data = Magang::where('user_id', Auth::user()->id)->first();
        } else if (Auth::user()->roles == 'pembina') {

            $data = [
                "magang" => Magang::with(['pembina'])->where('status', 'active')->where('id_pembina', Auth::user()->pembina->id)->count(),
                "pembina" => Pembina::all()->count(),
                "magang_aktif" => Magang::with(['pembina'])->where('status', 'active')->where('id_pembina', Auth::user()->pembina->id)->latest()->paginate(5)
            ];
        } else {
            $data = [
                "magang" => Magang::all()->count(),
                "pembina" => Pembina::all()->count(),
                "magang_aktif" => Magang::with(['pembina'])->where('status', 'active')->latest()->paginate(5)
            ];
        }

        return view('admin.dashboard', compact('header_page', 'data', 'tidak'));
    }
}
