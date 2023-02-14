<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Absen;
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

        $absens = User::with(['Absensi', 'KegiatanMagang'])->withExists(['Absensi', 'KegiatanMagang'])->where('roles', 'user')->paginate(10);

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
        //
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
        //
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
