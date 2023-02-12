<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $header_page = "dashboard User";

        if ($request->type == 'datatable') {
            $data = Absen::orderBy('created_at', 'desc');
            return DataTables()->of($data)
                ->addColumn('action', function ($data) {
                    $action = '';

                    $action .= '<a href="' . route('userData.edit', $data->id) . '" class="btn btn-white btn-sm" data-placement="bottom" data-bs-toggle="tooltip" data-placement="bottom" title="Edit" data-original-title="Edit">Edit</a>';

                    $action .= '<button class="btn btn-danger ml-1 btn-sm delete-item" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete" data-url="' . route('userData.destroy', $data->id) . '" data-id="' . $data->id . '">
                                        Delete
                                    </button>';
                    return $action;
                })
                ->rawColumns(['action'])
                ->make(true);
        } else {
            $data = Absen::orderBy('created_at', 'desc');
            return view('magang.absen.index', compact('header_page','data'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header_page = "dashboard Input Absen";
        return view('magang.absen.create',compact('header_page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filemagang = $request->file('file_kegiatan');
        $file = date('YmdHi') . $filemagang->getClientOriginalName();
        $filemagang->move(public_path('file'), $filemagang);
        $tidak = 'not yet received';
        $kegiatan = New Kegiatan();
        $kegiatan->user_id =Auth::user()->id;
        $kegiatan->nama_lengkap = $request->nama_lengkap;
        $kegiatan->instansi_pendidikan = $request->instansi_pendidikan;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->kehadiran = $request->kehadiran;
        $kegiatan->file_kegiatan = $file;
        $kegiatan->logbook_kegiatan = $request->logbook_kegiatan;
        $kegiatan->status = $tidak;
        $kegiatan->save();


        $absen = [
            'user_id'=>Auth::user()->id,
            'nama_lengkap'=>$request->nama_lengkap,
            'instansi_pendidikan'=>$request->instansi_pendidikan,
            'tanggal'=>$request->tanggal,
            'kehadiran'=>$tidak
        ];
         Absen::create($absen);
         Alert::success('Success','Tunggu update');
        return redirect()->route('userData.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {
        //
    }
}
