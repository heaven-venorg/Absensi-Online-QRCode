<?php

namespace App\Http\Controllers;

use App\Models\Absences;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AbsencesController extends Controller
{
    //
    public function absencesView()
    {
        $qrcode = QrCode::size(150)->generate(route('absences.record'));
        return view('page.absences.index', compact('qrcode'));
    }

    public function recordAbsences()
    {
        $user = Auth::user();
        $today = Carbon::today();
        $absensiToday = Absences::where('name', $user->name)->whereDate('absensi_time', $today)->first();
        if ($absensiToday) {
            return redirect()->route('root')->with('alert', 'Anda sudah melakukan absensi');
        } elseif (Carbon::now()->hour >= 12) {
            return redirect()->route('root')->with('alert', 'Anda Terlambat, dan tidak bisa absensi');
        } elseif (Carbon::now()->dayOfWeek === 0 || Carbon::now()->dayOfWeek === 6) {
            return redirect()->route('root')->with('alert', 'Hari ini libur, tidak bisa absensi');
        } else {
            Absences::create([
                'user_id' => $user->id,
                'name' => $user->name,
                'absensi_time' => Carbon::now()
            ]);
            return redirect()->route('root')->with('alert', 'Absensi anda telah direkam');
        }
    }
}