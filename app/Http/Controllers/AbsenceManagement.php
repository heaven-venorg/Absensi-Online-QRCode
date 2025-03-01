<?php

namespace App\Http\Controllers;

use App\Models\Absences;
use App\Models\User;
use Carbon\Carbon;

class AbsenceManagement extends Controller
{
    //
    public function managementView()
    {
        $users = User::all();
        $today = Carbon::today();
        $absences = Absences::latest()->get();
        $absencesToday = Absences::whereDate('absensi_time', $today)->get();
        $absencesTodayAll = Absences::whereDate('absensi_time', $today)->count();
        $absencesAll = Absences::count();

        return view('admin.absence', compact('users', 'absences', 'absencesToday', 'absencesAll', 'absencesTodayAll'));
    }
}