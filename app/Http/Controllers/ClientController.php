<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        $majors = Major::get();
        $doctors = Doctor::with('major')->get();
        return view('client.pages.home', compact('majors', 'doctors'));
    }
    public function majors()
    {
        $majors = Major::get();
        return view('client.pages.majors', compact('majors'));
    }
    public function doctors(Request $request)
    {
        $doctors = Doctor::with('major');

        if ($request->has('major')) {
            $majors = Major::where('slug', $request->major)->firstOrFail();
            $doctors = $doctors->where('major_id', $majors->id);
        }
        $doctors = $doctors->paginate(8)->withQueryString();
        // $doctors = Doctor::with('major')->paginate(8);
        return view('client.pages.doctors', compact('doctors'));
    }
    public function contact()
    {
        return view('client.pages.contact');
    }
    public function book(Doctor $doctor)
    {
        return view('client.pages.book-appointment', compact('doctor'));
    }
}
