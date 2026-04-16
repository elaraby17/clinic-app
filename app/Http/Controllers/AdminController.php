<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $doctorsCount = Doctor::count();
        $usersCount = User::count();
        $allDoctors = Doctor::with('major')->get();
        $majors = Major::withCount('doctors')->get();
        $majorsTop = $majors->sortByDesc('doctors_count')->take(5);



        return view('admin.pages.dashboard', compact('doctorsCount', 'usersCount', 'majorsTop', 'allDoctors'));
    }



    public function addDoctors()
    {

        return view('admin.pages.addDoctors');
    }
}
