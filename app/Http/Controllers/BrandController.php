<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\brand;
use App\product;
class BrandController extends Controller
{
    public function index($id , $brand)
    {
        $product_brand = $brand ;
        $brands = brand::orderBy('brand_name','asc')->get();
        $products = product::where('brand_id',$id)->where('is_active',1)->with('brand')->orderby('price','asc')->paginate(12);
        return view('brandItem',compact(['products','brands','product_brand']));

    }
}
