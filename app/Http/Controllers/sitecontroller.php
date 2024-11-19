<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Sitecontroller extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getService(){
        return view('service');
    }
}
