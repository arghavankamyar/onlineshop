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
            @if(session()->has('edit_user'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span><span class="sr-only"></span>
                    </button>
                    {{session('edit_user')}}
                </div>
            @endif
            <h3>ویرایش مشخصات کاربر</h3>
            <hr/>
            <form action="{{route('admin.users.update',['users'=>$users->id])}}" method="post" class="form form-group form-horizontal"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                @include('admin.user-form')
            </form>
        </div>
    </div>
@endsection