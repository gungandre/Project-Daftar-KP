<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Magang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $header_page = "Halaman Nilai";

        if (Auth::user()->roles == 'user') {
            if ($request->has('search')) {
                $nilais = Nilai::where('user_id', Auth::user()->id)->with(['magang'])->whereRelation('magang', 'nama_lengkap', 'like', '%' . $request->search . '%')->latest()->paginate(5);
                $nilais->appends('search', $request->search);
            } else {
                $nilais = Nilai::with('magang')->latest()->paginate(5);
            }
        } else {
            if ($request->has('search')) {
                $nilais = Nilai::with(['magang'])->whereRelation('magang', 'nama_lengkap', 'like', '%' . $request->search . '%')->latest()->paginate(5);

                $nilais->appends('search', $request->search);
            } else {
                $nilais = Nilai::with('magang')->latest()->paginate(5);
            }
        }


        return view('admin.layouts.nilai.index', compact('header_page', 'nilais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        $header_page = "Halaman Nilai";

        return view('admin.layouts.nilai.edit', compact('nilai', 'header_page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        $nilai->update([
            'nilai' => $request->nilai,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('nilai.index')->with('message', 'Nilai Sudah Dimasukan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
