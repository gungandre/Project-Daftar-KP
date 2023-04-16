<?php

namespace App\Http\Middleware;

use App\Models\PeriodePendaftaran;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class Periode
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
        $now = Carbon::now();
        $periode = PeriodePendaftaran::where('status', 'active')->first();

        if ($now < $periode->tanggal_buka) {
            // Registration period has not started yet
            return redirect()->back()->with('error', 'Maaf, pendaftaran belum dibuka.');
        }

        if ($now > $periode->tanggal_tutup) {
            // Registration period has ended
            return redirect()->back()->with('error', 'Maaf, pendaftaran sudah ditutup.');
        }

        // The registration period is still ongoing
        return $next($request);
    }
}
