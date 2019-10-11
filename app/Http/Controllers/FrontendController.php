<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        return view('Welcome');
    }

    function contact(){
        return view('contact');
    }

    function about(){
        return view('about');
    }
}
