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
    public function allUsers(Request $request)
    {
        $perPage = $request->input('per_page', 20); // default 20
        $search  = $request->input('search', '');

        $users = User::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('phone', 'like', "%{$search}%");
        })
            ->paginate($perPage)
            ->withQueryString(); // ⬅️ مهم جداً عشان يحتفظ بـ search و per_page في روابط الـ pagination

        return view('admin.pages.allUsers', compact('users', 'search', 'perPage'));
    }
}
