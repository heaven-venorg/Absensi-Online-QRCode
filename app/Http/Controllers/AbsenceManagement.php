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


    public function detailedUser(int $id)
    {
        $today = Carbon::today();
        $user = User::findOrFail($id);
        $absensiToday = Absences::whereDate('absensi_time', $today)->where('user_id', $id)->first();
        $absensiDetail = Absences::where('user_id', $id)->latest()->get();
        $absensiAll = Absences::where('user_id', $id)->count();
        return view('admin.detailedUser', compact('user', 'absensiDetail', 'absensiToday', 'absensiAll'));
    }
}