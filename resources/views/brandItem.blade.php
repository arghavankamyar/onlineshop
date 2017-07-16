@extends('master-item')
@section('content')
    <div class="container box">
        <div class="row">
            <div class="sidebar">
                <form action="{{route('search')}}" method="get" class="form-group">
                    <div class="price-filter">
                        <label for="range" class="control-label">محدوده قیمت:</label>
                        <select name="range" id="range" class="form-control">
                            <option value="">-- انتخاب کنید --</option>
                            <option value="100">کمتر از 100 هزار تومان</option>
                            <option value="100-200">بین 100 تا 200 هزار تومان</option>
                            <option value="200-300">بین 200 تا 300 هزار تومان</option>
                            <option value="300">بیشتر از 300 هزار تومان</option>
                        </select>
                        <hr />
                    </div>
                   <div class="brand-filter">
                       <label for="brand-filter" class="control-label">بر اساس سازنده:</label>
                       @foreach($brands->all() as $brand)
                           <input type="checkbox" name="brand-filter" id="brand-filter" class="form-control" value="{{$brand->id}}" @if($product_brand == $brand->brand_name) checked @endif>  {{ucfirst($brand->brand_name)}}
                           <br />
                           @endforeach
                   </div>
                    <div>
                        <button type="submit" value="filter-product" class="btn btn-block btn-success form-control btn-customize">اعمال فیلتر</button>
                    </div>

                </form>
            </div>
            <div class="orderby">
                <form action="" method="get" class="form-group">
                    <label for="" class="control-label">بر اساس قیمت:</label>
                    <select name="orderby" id="orderby" class="form-control">
                        <option value="asc">صعودی</option>
                        <option value="desc">نزولی</option>
                    </select>
                    {{--<label for="orderby">مرتب سازی بر اساس قیمت:</label>--}}
                    {{--<Select class="" name="" id="">--}}
                        {{--<option value="asc">صعودی</option>--}}
                        {{--<option value="desc">نزولی</option>--}}
                    {{--</Select>--}}
                </form>
            </div>
            <div class="products-of-brand">
                <div>
                    <h4>
                        <span>برند</span>
                        <span>
                        {{$product_brand}}
                         </span>
                    </h4>
                    <hr />
                </div>
                @if(count($products) == 0)
                    <div>
                        {{'محصولی برای نمایش وجود ندارد'}}
                    </div>
                @endif
                @foreach($products->all() as $product)
                <div class="single-product">
                    <div class="single-product-image">
                        <img src="{{asset('images/products/' . ($product->product_img ? $product->product_img : 'default.jpg'))}}">
                    </div>
                    <a href="{{url('product/' . $product->product_name . '/' . $product->id)}}">
                    <div class="product-info">
                        {{strtoupper($product->brand->brand_name)}}

                    </div>
                    <div class="product-info">
                        {{$product->product_name}}
                    </div>
                    </a>
                    <div>
                        <span class="product-price">{{$product->price . 'تومان'}} </span>
                        <span class="cart-icon">سبد خرید</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row pagination custom-pagination">
            {{$products->links()}}
        </div>
    </div>
    @endsection