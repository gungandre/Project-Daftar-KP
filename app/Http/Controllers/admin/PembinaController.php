<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Pembina;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class PembinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $header_page = "Data Pembina";

        $pembinas = ($request->has('search')) ? Pembina::where('nama_pembina', 'like', "%" . $request->search . "%")->latest()->paginate(3)->appends(['search' => $request->search]) : Pembina::toBase()->latest()->paginate(5);

        return view('admin.layouts.pembina.index', compact('header_page', 'pembinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header_page = "Create Pembina";

        return view('admin.layouts.pembina.form', compact('header_page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pembina' => 'required|unique:pembina,nama_pembina',
            'alamat' => 'required',
            'bagian_kerja' => 'required',
            'no_hp' => 'numeric|required',
            'email' => 'unique:users,email|required|email|required',
            'password' => 'required',
        ]);

        User::create([
            'nama_lengkap' => $request->nama_pembina,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => 'pembina',
            'status' => 'active'
        ]);

        $user = Auth::user()->where('nama_lengkap', $request->nama_pembina);

        if ($user->exists()) {

            $getUser = $user->toBase()->first();

            Pembina::create([
                "user_id" => $getUser->id,
                "nama_pembina" => $request->nama_pembina,
                "alamat" => $request->alamat,
                "bagian_kerja" => $request->bagian_kerja,
                "no_hp" => $request->no_hp,
                "status" => "active",
                "created_at" => now()->toDateString()
            ]);

            return redirect()->route('pembina.index')->with('message', 'data pembina berhasil dibuat');
        }

        return redirect()->route('pembina.index')->with('message', 'data pembina gagal dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Pembina  $pembina
     * @return \Illuminate\Http\Response
     */
    public function show(Pembina $pembina)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Pembina  $pembina
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembina $pembina)
    {
        $header_page = "Edit Pembina";
        return view('admin.layouts.pembina.form', compact('header_page', 'pembina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\Pembina  $pembina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembina $pembina)
    {
        $request->validate([
            'nama_pembina' => 'required',
            'alamat' => 'required',
            'bagian_kerja' => 'required',
            'no_hp' => 'numeric|required',
            'email' => 'required|email',
            'password_confirmation' => "confirmed",
        ]);

        $pembinaData = [
            "nama_pembina" => $request->nama_pembina,
            "alamat" => $request->alamat,
            "bagian_kerja" => $request->bagian_kerja,
            "no_hp" => $request->no_hp,
            "status" => $request->status,
            "updated_at" => now()->toDateString()
        ];

        $usersData = [
            "nama_lengkap" => $pembinaData["nama_pembina"],
            "email" => $request->email,
        ];

        if ($request->has('password')) {
            $usersData["password"] = Hash::make($request->password);
        }

        try {
            $pembina->update($pembinaData);
            $pembina->user->update($usersData);

            return redirect()->route('pembina.index')->with("message", "Update Pembina Success");
        } catch (Throwable $th) {
            return redirect()->route("pembina.index")->with('message', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Pembina  $pembina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembina $pembina)
    {

        try {

            $pembina->delete();
            $pembina->user->delete();

            return redirect()->route('pembina.index')->with('message', 'data success deleted');
        } catch (Throwable  $th) {
            return redirect()->route('pembina.index')->with('message', $th->getMessage());
        }
    }
}
