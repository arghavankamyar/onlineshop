<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about_us_content;
use App\Http\Requests;

class AboutController extends Controller
{
    public function index()
    {
        $contents = about_us_content::all();
        return view('about-us', compact('contents'));
    }
}
