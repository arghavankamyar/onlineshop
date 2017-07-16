<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\brand;
use App\product;
class SingleProductController extends Controller
{
    public function index($product,$id)
    {
        $brands = brand::orderBy('brand_name','asc')->get();
        $contents = product::where('id',$id)->get();
        $comments = comment::where('product_id',$id)->where('is_confirmed',1)->with('user')->get();
        product::where('id',$id)->increment('views');
        return view('product',compact('brands','contents','comments'));
    }
}
