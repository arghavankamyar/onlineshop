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
            <span><h3>مشاهده برندها</h3></span>
            <span><a id="add-brand-title">+ایجاد برند جدید</a></span>
            <hr/>
        </div>
        <div class="row col col-xs-10 add-brand" id="add-brand">
            <form action="{{route('admin.brand.store')}}" method="post" class="form form-group form-inline">
                {{csrf_field()}}
                <label for="brand_name">نام برند:</label>
                <input type="text" id="brand_name" name="brand_name" value="{{old('brand_name')}}" class="form-control">
                <button type="submit" class="btn btn-success btn-small form-control">ایجاد</button>
            </form>
        </div>
        <div class="row col col-xs-10 products-list">
            <table class="table table-hover table-bordered table-customize">
                <tr>
                    <td>ردیف</td>
                    <td colspan="4">نام برند</td>
                    <td>گزینه های مدیریت</td>
                </tr>
                @foreach($brands->all() as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td colspan="4">{{$brand->brand_name}}</td>
                        <td>
                            <div>
                                <span><a href="#" class="glyphicon glyphicon-edit"
                                              id="edit-brand-title" data-toggle="modal" data-target="#editForm"> ویرایش </a></span>
                                <!-- Modal -->
                                <div id="editForm" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">ویرایش برند</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('admin/brand') . $brand->id}}" method="post" class="form-inline">
                                                    {{csrf_field()}}
                                                    {{method_field('PUT')}}
                                                    <label for="brand_name">نام برند:</label>
                                                    <input type="text" id="brand_name" name="brand_name" class="form-control"
                                                            placeholder="نام فعلی :{{$brand->brand_name}} ">
                                                    <button type="submit" class="btn btn-small form-control btn-success">ثبت تغییرات
                                                    </button>
                                                </form>
                                            </div>
                                            {{--<div class="modal-footer">--}}
                                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                            {{--</div>--}}
                                        </div>

                                    </div>
                                </div>

                                <span class="remove-form">
                            <form action="{{url('admin/brand') . $brand->id}}" method="post" class="form-group">
                            {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-primary btn-small glyphicon glyphicon-remove form-control" id="brand-remove"> حذف </button>
                             </form>
                        </span>
                            </div>
                        </td>
                    </tr>
                    <tr id="edit-brand">
                        <td colspan="6">

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection