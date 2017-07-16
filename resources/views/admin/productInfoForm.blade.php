<div class="row col col-xs-12">
    <label for="product_name" class="control-label">نام محصول:</label>
    @if($errors->has('product_name'))
        {{$errors->first('product_name')}}
    @endif
    <input type="text" class="form-control" id="product_name" name="product_name"
           value="{{old('product_name', isset($products) ? $products->product_name : '')}}">
    <label for="scent" class="control-label">رایحه:</label>
    @if($errors->has('scent'))
        {{$errors->first('scent')}}
    @endif
    <input type="text" class="form-control" id="scent" name="scent"
           value="{{old('scent',isset($products) ? $products->scent : '')}}">
    <label for="description" class="control-label">توضیحات:</label>
    @if($errors->has('description'))
        {{$errors->first('description')}}
    @endif
    <textarea class="form-control" id="description" name="description"
              height="500">
        @if(isset($products))
            {{$products->description}}
            @endif
    </textarea>
</div>
 <div class="row col col-xs-12">
    <div class="col col-xs-4">
        <label for="price">قیمت:</label>
        @if($errors->has('price'))
            {{$errors->first('price')}}
        @endif
        <input type="text" class="form-control" name="price" id="price"
               value="{{old('price',isset($products) ? $products->price : '')}}">
    </div>
    <div class="col col-xs-4">
        <label for="category_id">دسته بندی:</label>
        @if($errors->has('category_id'))
            {{$errors->first('category_id')}}
        @endif
        <select name="category_id" id="category_id" class="form-control">
            @foreach($categories->all() as $category)
                <option
                        @if(isset($products) && $products->category == $category)
                        selected
                        @endif
                        value="{{$category->id}}">{{$category->for}}</option>
            @endforeach
        </select>
    </div>
    <div class="col col-xs-4">
        <label for="brand_id" class="control-label">برند:</label>
        @if($errors->has('brand_id'))
            {{$errors->first('brand_id')}}
        @endif
        <select name="brand_id" id="brand_id" class="form-control">
            @foreach($brands->all() as $brand)
                <option
                        @if(isset($products) && $products->brand->brand_name == $brand->brand_name)
                                selected
                        @endif
                        value="{{$brand->id}}">{{$brand->brand_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col col-xs-4">
        <label for="stock" class="control-label"> تعداد موجودی:</label>
        @if($errors->has('stock'))
            {{$errors->first('stock')}}
        @endif
        <input type="text" id="stock" name="stock" class="form-control"
               value="{{old('stock',isset($products) ? $products->stock : '')}}">
    </div>
    <div class="col col-xs-4">
        <label for="is_active" class="control-label"> مناسب برای فصل:</label>
        @if($errors->has('season'))
            {{$errors->first('season')}}
        @endif
        <select name="season" id="season" class="form-control">
            <option value="{{'بهار'}}">{{'بهار'}}</option>
            <option value="{{'تابستان'}}">{{'تابستان'}}</option>
            <option value="{{'پاییز'}}">{{'پاییز'}}</option>
            <option value="{{'زمستان'}}">{{'زمستان'}}</option>
        </select>
    </div>
</div>
<div class="row col col-xs-12">
    <label for="product_img" class='control-label'>تصویر محصول:</label>
    @if($errors->has('product_img'))
        {{$errors->first('product_img')}}
    @endif
    <input type="file" class="form-control" name="product_img">
</div>
@if(isset($products))
    <div class="image-thumb row col col-xs-12">
        <h5>تصویر کنونی محصول:</h5>
        <img src="{{asset('images/products/' . $products->product_img)}}" alt="">
    </div>

    @endif
<div class="row col col-xs-3 button">
    <button type="submit" class="form-control btn btn-danger">ثبت</button>
</div>