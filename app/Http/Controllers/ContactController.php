<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact_us_content;
use Validator;
use App\Http\Requests;
use  App\message;
use Session;
class ContactController extends Controller
{
    public function index()
    {
        $contents = contact_us_content::all();
        return view('contact',compact('contents'));
    }

    public function validator(request $request)
    {
        $validate = Validator::make($request->all(),[
           'subject' => 'required|alpha|max:20',
            'email' => 'required|email',
            'message_body' => 'required|max:255'
        ]);
        if ($validate->fails()){
            return back()->withInput()->withErrors($validate);
        }
        if ($validate->passes()){
         $data = array_only($request->all(),['subject','email','message_body']);
            message::create($data);
            session()->flash('delivery_message','پیام شما ثبت شد.');
            return back();
        }
    }
}
