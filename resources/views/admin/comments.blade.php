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
        <div class="row col col-xs-10">
            <span><h3>آخرین نظرات ارسال شده توسط کاربران</h3></span>
            <hr/>
        </div>

        <div class="row col col-xs-10">
            @if(session()->has('comment_management'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span><span class="sr-only"></span>
                    </button>
                    {{session('comment_management')}}
                </div>
            @endif
            <form action="{{url('admin/comments')}}" method="post" role="form" class="form-group form">
                {{csrf_field()}}
            <table class="table table-bordered">
                <tr>
                    <td>ردیف</td>
                    <td>نام کاربر</td>
                    <td>محصول</td>
                    <td>دیدگاه</td>
                    <td>انتخاب</td>
                </tr>
            @if(count($comments))
                <?php
                    $offset = ($comments->currentPage() - 1) * $comments->perPage();
                ?>
                 @foreach($comments->all() as $row => $comment)
                     <tr>
                         <td>{{$offset + $row + 1}}</td>
                         <td>{{$comment->user->name}}</td>
                         <td>{{$comment->product->product_name}}</td>
                         <td>{{$comment->comment_body}}</td>
                         <td>
                                 <input type="checkbox" name="checked[]" id="checked" value="{{$comment->id}}" class="form-control">
                         </td>
                     </tr>

                     @endforeach

            @endif
            </table>
                <div class="btn-layer">
                    <select name="comments_status" id="comments_status" class="form-control">
                        <option value="none">انجام کارهای گروهی</option>
                        <option value="confirm">تایید دیدگاه های انتخابی</option>
                        <option value="ignore">حذف دیدگاهای انتخابی</option>
                    </select>
                <button type="submit" class="btn btn-success form-control btn-small">اعمال</button>
                </div>
            </form>
            <div class="row pagination custom-pagination">
                {{$comments->links()}}
            </div>
            @unless(count($comments))
            {{'دیدگاهی ثبت نشده است'}}
            @endunless

        </div>
    </div>
@endsection