<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use App\Models\PeriodePendaftaran;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magang = Magang::where('status','status')->count();
        $periode = PeriodePendaftaran::all();
        $header_page = "Buka pendaftaran Magang";
        return view('admin.layouts.Periode.index',compact('header_page','periode','magang'));
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
        $periode = PeriodePendaftaran::where('status', 'active')->first();

        if ($periode) {
            return redirect()->back()->with('error', 'mohon di non aktifkan data terdahulu');
        } else {
            $data = $request->all();
            $data['status'] = 'active';
        PeriodePendaftaran::create($data);
        return redirect()->back()->with('message', 'Data Berhasil di tambahkan');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function inActivePeriode(PeriodePendaftaran $periode){
        $periode->update(['status'=>'Inactive']);

        return redirect()->back()->with('message', 'Status pendaftaran dimatikan');
    }
}
