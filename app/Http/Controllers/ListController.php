<?php

namespace App\Http\Controllers;

use App\brand;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\product;
class ListController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function productList()
    {
        $products = product::where('is_active',1)->orderBy('id','desc')->with('brand')->get();
        return view('admin.list',compact('products'));
    }

    public function brandList()
    {
        $brands =brand::where('is_active',1)->orderBy('id','desc')->get();
        return view('admin.brand-list',compact('brands'));
    }
}
