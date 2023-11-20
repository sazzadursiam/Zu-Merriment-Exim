<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function home()
    {
        return view('frontend.pages.index');
    }
    public function about_us()
    {
        return view('frontend.pages.about_us');
    }
}
