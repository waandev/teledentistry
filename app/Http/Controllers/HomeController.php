<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    // public function layanan()
    // {
    //     return view('home.layanan');
    // }
    // public function artikel()
    // {
    //     return view('home.artikel');
    // }
}
