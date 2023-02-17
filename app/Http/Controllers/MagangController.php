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
        $header_page = "data magang " . $magang->nama_lengkap;

        return view('admin.layouts.magangs.show', compact('magang', 'header_page'));
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

    public function downloadPDF($file)
    {
        $headers = [
            'Content-Type' => 'application/pdf',
            'Cache-control' => 'no-cache, must-revalidate'
        ];

        return Response()->download(public_path('Image/') . $file, $file, $headers);
    }
    public function editMagang(Magang $magang)
    {
        $header_page = 'edit profile magang';

        return view('admin.layouts.magangs.edit-magang', compact('header_page', 'magang'));
    }
    public function updateMagang(Request $request, Magang $magang)
    {

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $fileFoto = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('Image/'), $fileFoto);
        } else {
            $fileFoto = $magang->fote;
        }
        if ($request->hasFile('surat_magang')) {
            $filea = $request->file('surat_magang');
            $filedocoment = date('YmdHi') . $filea->getClientOriginalName();
            $filea->move(public_path('Image/'), $filedocoment);
        } else {
            $filedocoment = $magang->surat_magang;
        }

        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'nim_nis' => $request->nim_nis,
            'alamat' => $request->alamat,
            'instansi_pendidikan' => $request->instansi_pendidikan,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'mulai_magang' => $request->mulai_magang,
            'selesai_magang' => $request->selesai_magang,
            'foto' => $fileFoto,
            'alamat' => $request->alamat,
            'surat_magang' => $filedocoment,
        ];
        $magang->update($data);
        return redirect()->route('dashboard');
    }
}
