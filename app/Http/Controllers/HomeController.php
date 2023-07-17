<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('site.master.layouthome');
    }

    public function login()
    {
        return view('site.home.login');
    }
}
