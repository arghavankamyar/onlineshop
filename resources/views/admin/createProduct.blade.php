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
        {{-- add new product --}}
        <div class="row col col-xs-10 product-content">
            @if(session()->has('create_product'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span><span class="sr-only"></span>
                    </button>
                    {{session('create_product')}}
                </div>
            @endif
            <h3>ایجاد محصول جدید</h3>
            <hr/>
            <form action="{{route('admin.product.store')}}" method="post" class="form form-group"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                @include('admin.productInfoForm')
            </form>
        </div>
    </div>
@endsection