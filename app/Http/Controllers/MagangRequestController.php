<?php

namespace App\Http\Controllers;

use App\Models\admin\Pembina as AdminPembina;
use App\Models\Magang as ModelsMagang;
use Illuminate\Http\Request;
use Magang;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Pembina;

class MagangRequestController extends Controller
{
    public function index()
    {
        return view('auth.magang-form');
    }
    public function requestForm(Request $request)
    {
        $user = new User;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->email = $request->email;
        $user->password = Hash::make('123456789');
        $user->status = 'inactive';
        $user->roles = 'user';
        $user->save();


        $file = $request->file('foto');
        $suratmagang = $request->file('surat_magang');

        $filefoto = date('YmdHi') . $file->getClientOriginalName();
        $suratmagangle = date('YmdHi') . $suratmagang->getClientOriginalName();

        $file->move(public_path('Image'), $filefoto);
        $suratmagang->move(public_path('Image'), $suratmagangle);

        $magang = array(
            'user_id' => $user->id,
            'nim_nis' => $request->nim_nis,
            'alamat' => $request->alamat,
            'instansi_pendidikan' => $request->instansi_pendidikan,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'mulai_magang' => $request->mulai_magang,
            'selesai_magang' => $request->selesai_magang,
            'foto' => $filefoto,
            'alamat' => $request->alamat,
            'surat_magang' => $suratmagangle,
            'status' => 'inactive',
        );

        ModelsMagang::create($magang);
        return redirect()->route('verifikasi.wait')->with('message', 'Data created !');
    }
}
