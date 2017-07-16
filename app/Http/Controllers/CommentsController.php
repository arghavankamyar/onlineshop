<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentsController extends Controller
{
    public function index()
    {
        $row = 0;
        $comments = comment::orderBy('id','desc')->with(['user','product'])->paginate(10);
        return view('admin.comments',compact('comments','row'));
    }

    public function manage(request $request)
    {
        if ($request->comments_status == 'confirm'){
            foreach ($request->checked as $key=>$value){
                comment::where('id',$value)->update([
                   'is_confirmed' => 1,
                ]);
            }
            session()->flash('comment_management','دیدگاه ها با موفقیت تایید شد');
            return back();
        }
        if ($request->comments_status == 'ignore'){
            foreach ($request->checked as $key=>$value){
                comment::where('id',$value)->delete();
            }
            session()->flash('comment_management','دیدگاه ها با موفقیت حذف شد');
            return back();
        }
        if ($request->comments_status == 'none'){
            session()->flash('comment_management','هیچ عملیاتی برای انجام انتخاب نشده است');
            return back();
        }
    }
}
