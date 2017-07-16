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
            @if(session()->has('create_user'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span><span class="sr-only"></span>
                    </button>
                    {{session('create_user')}}
                </div>
            @endif
            <h3>افزودن کاربر جدید</h3>
            <hr/>
            <form action="{{url('/register')}}" method="post" class="form form-group"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                @include('admin.user-form')
            </form>
        </div>
    </div>
@endsection