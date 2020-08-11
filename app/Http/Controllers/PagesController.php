<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

        // homepage
        return view('pages.index');
    }
  
    public function about() {
        return view('pages.about');
    }
    
    public function contact() {
        return view('pages.contact');
    }

    public function jobs() {

        // homepage
        return view('jobs.index');
    }
   
}
 