<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    public function search()
    {
        $array[] =$_GET['brand-filter'];
        dd($array);
    }
}
