<?php

namespace App\Http\Controllers;

use App\Models\TourPackage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home.index');
    }

    public function tours()
    {
        return view('pages.tour.index');
    }

    public function gallery()
    {
        return view('pages.gallery.index');
    }
    public function contact()
    {
        return view('pages.about.index');
    }

    public function show_tours(string $slug)
    {
        $tour = TourPackage::where("slug", $slug)->first();

        if (empty($tour)) {
            return abort(404);
        }

        return view("pages.tour.show", ["tour" => $tour]);
    }
}
