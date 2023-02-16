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
        $header_page = "dashboard menu";
        $id =  Auth::user()->id;
        $pembina = Pembina::where('user_id', $id)->first();
        if (Auth::user()->roles == 'user') {
            $user = User::find(Auth::user()->id);
            $data = Magang::where('user_id', $id)->first();
        } elseif (Auth::user()->roles == 'pembina') {
            $data = Magang::where('id_pembina', $pembina->id)->first();
        } else {
            $data = Magang::tobase()->paginate('8');
        }

        return view('admin.dashboard', compact('header_page', 'data'));
    }
}
