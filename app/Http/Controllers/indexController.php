<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function index() {
        return view('index');
        // return view('index', ["pageTitle" => 'Index']);
    }
    function about (){
        return view('about', ["pageTitle" => 'About']);
    }
    function contact () {
        return view('contact', ["pageTitle" => 'Contact']);
    }
}
