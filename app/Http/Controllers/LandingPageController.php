<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Header;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        $headers = Header::all();
        $products = Product::all();
        $profiles = Profile::all();
        $teams = Team::all();
        return view('landingpage.index', compact('headers', 'products', 'profiles', 'teams'));
    }

    public function profile()
    {
        $products = Product::all();
        $profiles = Profile::all();
        $teams = Team::all();
        return view('landingpage.profile', compact('products', 'profiles', 'teams'));
    }

    public function layout()
    {
        $profiles = Profile::all();
        return view('layouts.landing-page', compact('profiles'));
    }
}
