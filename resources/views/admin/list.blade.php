@extends('layouts.app')
@section('head')
    <link href="{{asset('rtl.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        {{-- admin menu --}}
        <div class="row col col-xs-2 admin-sidebar">
            @include('admin.sidebar')
        </div>
        <div class="row col col-xs-10 add-new">
            <span><h3>مشاهده محصولات</h3></span>
            <span><a href="{{route('admin.product.create')}}">+ ایجاد محصول جدید</a></span>
            <hr/>
        </div>
        <div class="row col col-xs-10 products-list">
            @if(count($products) == 0)
                <span>محصولی برای نمایش وجود ندارد</span>
            @endif
            @if(count($products)>0)
                <table class="table table-hover table-bordered table-customize">
                    <tr>
                        <td>ردیف</td>
                        <td colspan="4">نام محصول</td>
                        <td colspan="3">برند</td>
                        <td>گزینه های مدیریت</td>
                    </tr>
                    @foreach($products->all() as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td colspan="4">{{$product->product_name}}</td>
                            <td colspan="3">{{$product->brand->brand_name}}</td>
                            <td>
                                <div>
                            <form action="{{route('admin.product.edit',['product'=>$product->id])}}" method="get"
                                  class="form-group">
                            {{csrf_field()}}
                                <button class="btn btn-primary btn-small glyphicon glyphicon-remove form-control"
                                        id="brand-remove"> ویرایش </button>
                             </form>
                        </span>
                                    <span class="remove-form">
                            <form action="{{route('admin.product.destroy',['product'=>$product->id])}}" method="post"
                                  class="form-group">
                            {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-primary btn-small glyphicon glyphicon-remove form-control"
                                        id="brand-remove"> حذف </button>
                             </form>
                        </span>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>

@endsection