<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TouristController extends Controller
{
    public function location()
    {
        return view('tourist.location');
    }

    public function howToReach()
    {
        return view('tourist.how-to-reach');
    }

    public function weather()
    {
        return view('tourist.weather');
    }

    public function safariZone()
    {
        return view('tourist.safari-zone');
    }

    public function excursion()
    {
        return view('tourist.excursion');
    }

    public function interest()
    {
        return view('tourist.interest');
    }

    public function stay()
    {
        return view('tourist.stay');
    }

    public function dos()
    {
        return view('tourist.do-donts');
    }
}
