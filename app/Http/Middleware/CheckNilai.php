<?php

namespace App\Http\Middleware;

use App\Models\admin\Pembina;
use App\Models\Magang;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckNilai
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $chekDateNow = Carbon::now();
        $id = $request->route('nilai');

        $maganggan = Magang::find($id->id);
        if($chekDateNow < $maganggan->selesai_magang){
            return redirect()->route('dashboard')->with('error','Maaf belum waktunya memberi nilai');
        }
        return $next($request);
    }
}
