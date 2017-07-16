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
        {{-- all messages from contact us form--}}
        <div class="row col col-xs-10 messages">
            <div>
                <h4>آخرین پیام های دریافتی</h4>
                <hr/>
            </div>
            @if(session()->has('delete_message'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span><span class="sr-only"></span>
                    </button>
                    {{session('delete_message')}}
                </div>
            @endif
            <div>
                <table class="table table-bordered">
                    @if(count($messages))
                    <tr>
                        <td>ردیف</td>
                        <td>آدرس ایمیل</td>
                        <td>موضوع</td>
                        <td>متن پیام</td>
                        <td>گزینه های مدیریت</td>
                    </tr>
                        <?php $offset = ($messages->currentPage()-1) * $messages->perPage()?>
                    @foreach($messages->all() as $row => $message)
                        <tr>
                            <td>{{$offset + $row + 1}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->subject}}</td>
                            <td>{{$message->message_body}}</td>
                            <td class="message-label">
                        <span>
                            <label class="label control-label label-success">
                                <a href="{{'mailto:' . $message->email . '?subject=' . $message->subject}}">ارسال پاسخ</a>
                                
                            </label>
                        </span>
                        <span>
                            <form action="{{route('admin.messages.destroy' , ['messages'=>$message->id])}}"
                                  method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-small btn-danger form-control">حذف پیام</button>
                             </form>
                        </span>
                            </td>
                        </tr>
                    @endforeach
                        @endif
                    @unless(count($messages))
                        {{'پیامی برای نمایش وجود ندارد'}}
                        @endunless
                </table>
                <div class="row pagination custom-pagination">
                    {{$messages->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection