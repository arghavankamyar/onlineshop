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
        {{-- users list --}}
        <div class="row col col-xs-10 users-list">
            <div>
                <a href="{{route('admin.users.create')}}">{{'+ایجاد کاربر جدید'}}</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td>ردیف</td>
                    <td>نام کاربری</td>
                    <td>آدرس ایمیل</td>
                    <td>نوع کاربری</td>
                    <td>گزینه های مدیریت</td>
                </tr>
                <?php $offset = ($users->currentPage()-1) * $users->perPage()?>
                @foreach($users->all() as $row => $user)
                    <tr>
                        <td>{{$offset + $row + 1}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                        <td>
                           @if($user->role_id == 1)
                               {{'مدیر کل'}}
                            @else
                                {{'کاربر عادی'}}
                               @endif
                        </td>
                      <td>
                          <div>
                              <form action="{{route('admin.users.edit',['users'=>$user->id])}}" method="get"
                                    class="form-group">
                                  {{csrf_field()}}
                                  <button class="btn btn-primary btn-small glyphicon glyphicon-remove form-control"
                                          id="brand-remove"> ویرایش </button>
                              </form>
                              </span>
                              <span class="remove-form">
                            <form action="{{route('admin.users.destroy',['users'=>$user->id])}}" method="post"
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
            <div class="row pagination custom-pagination">
                {{$users->links()}}
            </div>
        </div>
    </div>
        @endsection