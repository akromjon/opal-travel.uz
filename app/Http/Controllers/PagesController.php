<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home.index');
    }

    public function tours(){
        return view('pages.tour.index');
    }

    public function gallery(){
        return view('pages.gallery.index');
    }
    public function contact(){
        return view('pages.about.index');
    }
}
