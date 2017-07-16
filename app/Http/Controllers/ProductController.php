<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;
use App\brand;
use App\Http\Requests;
use App\user;
use Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::orderBy('id', 'asc')->get();
        $brands = brand::orderby('brand_name', 'asc')->get();
        $url = route('admin.product.store');
        return view('admin.createProduct', compact(['brands', 'categories', 'url']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProductRequest $request)
    {
        $picture_name = null;
        if ($request->file('product_img') && $request->file('product_img')->isValid()) {
            $picture_name = $request->file('product_img')->hashName();
            $request->file('product_img')->move(public_path('images/products'), $picture_name);
        }
        $data = array_only($request->all(), ['product_name', 'description', 'price', 'category_id', 'brand_id', 'is_active', 'stock', 'scent']);

        if ($picture_name) {
            $data['product_img'] = $picture_name;
        }
        $product = new product($data);
        if ($product->save()) {
            session()->flash('create_product', 'محصول جدید با موفقیت ایجاد شد');
            return redirect(route('admin.product.create'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contents = product::where('id', $id)->with('category', 'brand')->get();
        return view('product', compact('contents'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = category::orderBy('id', 'asc')->get();
        $brands = brand::orderBy('id', 'asc')->get();
        $products = product::find($id);
        return view('admin.edit-product', compact('products', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ProductRequest $request, $id)
    {
//        $this->authorize('update','product');
        $productUpdate = product::where('id',$id)->update([
            'product_name'=>$request->input('product_name'),
            'price'=>$request->input('price'),
            'stock'=>$request->input('stock'),
            'description'=>$request->input('description'),
            'scent'=>$request->input('scent'),
            'description'=>$request->input('description'),
            'category_id'=>$request->input('category_id'),
            'brand_id'=>$request->input('brand_id'),
        ]);
        session()->flash('edit_product', 'محصول با موفقیت ویرایش شد');
        return back();
//        $picture_name = null;
//        if ($request->file('product_img') && $request->file('product_img')->isValid()) {
//            $picture_name = $request->file('product_img')->hashName();
//            $request->file('product_img')->move(public_path('images/products'), $picture_name);
//        }
//        $data = array_only($request->all(), ['product_name', 'description', 'price', 'category_id', 'brand_id', 'is_active', 'stock', 'scent']);
//
//        if ($picture_name) {
//            $data['product_img'] = $picture_name;
//        }
//        $product = new product($data);
//        if ($product->save()) {
//            session()->flash('edit_product', 'محصول با موفقیت ویرایش شد');
//            return redirect(url('admin/productslist'));
//        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $this->authorize('destroy','product');
        product::where('id', $id)->update(['is_active' => 0]);
        return redirect(url('admin/productslist'));
    }
}
