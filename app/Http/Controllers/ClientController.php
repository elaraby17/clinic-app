<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.pages.home');
    }
    public function majors()
    {
        return view('client.pages.majors');
    }
    public function doctors()
    {
        return view('client.pages.doctors');
    }
    public function contact()
    {
        return view('client.pages.contact');
    }
    public function book()
    {
        return view('client.pages.book-appointment');
    }


 
}
