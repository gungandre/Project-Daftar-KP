<?php

namespace App\Http\Controllers;

use Absensi;
use App\Models\User;
use App\Models\Absen;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\KegiatanMagang;
use Illuminate\Support\Facades\Auth;

class KegiatanMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header_page = "kegiatan magang";

        $absens = Kegiatan::with(['user' => function ($query) {
            return $query->where('roles', 'user');
        }])->latest()->paginate(5);

        return view('admin.layouts.kegiatanMagang.index', compact('header_page', 'absens'));
    }

    public function downloadPDF($file)
    {
        $headers = [
            'Content-Type' => 'application/pdf',
            'Cache-control' => 'no-cache, must-revalidate'
        ];

        return Response()->download(public_path('file/') . $file, $file, $headers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KegiatanMagang  $kegiatanMagang
     * @return \Illuminate\Http\Response
     */
    public function show(KegiatanMagang $kegiatanMagang)
    {
        $header_page = "Kegiatan Magang " . $kegiatanMagang->nama_lengkap . " Tanggal " . $kegiatanMagang->tanggal;
        return view('admin.layouts.kegiatanMagang.lihat-kegiatan', compact('kegiatanMagang', 'header_page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KegiatanMagang  $kegiatanMagang
     * @return \Illuminate\Http\Response
     */
    public function edit(KegiatanMagang $kegiatanMagang)
    {
        $header_page = "Approve Absensi";
        return view('admin.layouts.kegiatanMagang.approve-absen', compact('kegiatanMagang', 'header_page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KegiatanMagang  $kegiatanMagang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KegiatanMagang $kegiatanMagang)
    {
        $kegiatanMagang->update(['status' => $request->status]);

        return redirect()->route('kegiatan-magang.index')->with('message', 'Status Absensi Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KegiatanMagang  $kegiatanMagang
     * @return \Illuminate\Http\Response
     */
    public function destroy(KegiatanMagang $kegiatanMagang)
    {
        //
    }
    
}
