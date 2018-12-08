<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function ami()
    {
        return view('about.ami');
    }

    public function jami()
    {
        return view('about.jami');
    }

    public function ash()
    {
        return view('about.ash');
    }

    public function tas()
    {
        return view('about.tas');
    }
}
