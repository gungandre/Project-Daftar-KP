<?php

namespace App\Http\Controllers;

use Pembina;
use App\Models\User;
use App\Models\Magang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin\Pembina as AdminPembina;
use App\Models\Nilai;

class MagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $header_page = "Data Magang";

        if ($request->has('search')) {

            $magangs = (Auth::user()->roles == 'admin') ? Magang::with(["pembina"])->where('nama_lengkap', 'like', "%" . $request->search . "%")->latest()->paginate(5) : ((Auth::user()->roles == 'pembina') ? Magang::with(["pembina"])->where("id_pembina", Auth::user()->id)->where('nama_lengkap', 'like', "%" . $request->search . "%")->latest()->paginate(5) : "");
        } else {
            $magangs = (Auth::user()->roles == 'admin') ? Magang::with(['pembina'])->latest()->paginate(5) : ((Auth::user()->roles == 'pembina') ? Magang::with(["pembina"])->where("id_pembina", Auth::user()->id)->latest()->paginate(5) : "");
        }

        return view('admin.layouts.magangs.index', compact('magangs', 'header_page'));
    }

    public function pembina(Magang $magang)
    {
        $header_page = "Tambah Pembina";

        $pembina = AdminPembina::toBase()->get();

        return view('admin.layouts.magangs.pembina', compact('header_page', 'pembina', 'magang'));
    }

    public function pembinaUpdate(Request $request, Magang $magang)
    {
        $data = $request->all();

        $magang->update(["id_pembina" => $data['nama_pembina']]);
        Nilai::create(['magang_id' => $magang->id]);

        return redirect()->route('magang.index')->with("message_success", "Pembina Magang berhasil ditambahkan");
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
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function show(Magang $magang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function edit(Magang $magang)
    {
        $header_page = "Change Status Magang";
        return view('admin.layouts.magangs.edit-status', compact('header_page', 'magang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magang $magang)
    {
        //
    }

    public function changeStatus(Request $request, Magang $magang)
    {
        $data = $request->all();

        $magang->update(['status' => $data['status']]);
        $magang->user->update(['status' => $data['status']]);

        return redirect()->route('magang.index')->with("message_success", "Status Magang Telah Di Approve");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magang $magang)
    {
        //
    }
}
