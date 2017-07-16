<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use App\category;
use App\brand;
use App\Http\Requests;

class TestController extends Controller
{
    public function index()
    {
        $categories = category::orderBy('id','asc')->get();
        $brands = brand::orderby('brand_name','asc')->get();
        return view('createProduct',compact(['brands','categories']));
    }
    public function show($id)
    {
        $contents = product::where('id',$id)->with('category')->with('brand')->get();
        return view('product',compact('contents'));
    }

    public function shop()
    {
        $brands = brand::orderBy('brand_name','asc')->get();
        return view('test',compact('brands'));
    }
}
