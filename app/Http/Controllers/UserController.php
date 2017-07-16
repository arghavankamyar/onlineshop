<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','asc')->paginate(10);
        return view('admin.users' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::orderBy('id','desc')->get();
        return view('admin.create-user',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\UserRequest $request)
    {
        $hashPassword = bcrypt($request->input('password'));
        $newUser = array_only($request->all(),'name','email','role_id');
        $newUser['password'] = $hashPassword;
        $createUser = new User($newUser);
        if ($createUser->save()){
            session()->flash('create_user','کاربر جدید با موفقیت افزوده شد');
            return redirect(route('admin.users.index'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::orderBy('id','desc')->get();
       $users = User::find($id);
        return view('admin.edit-user',compact('users','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UserRequest $request, $id)
    {
        $hashPassword = bcrypt($request->input('password'));
        User::where('id',$id)->update(
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'role_id' => $request->input('role_id'),
                'password' => $hashPassword,
            ]
        );
        session()->flash('edit_user','کاربر با موفقیت ویرایش شد');
        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::where('id',$id)
            ->update(['is_active' => 0]);
        return redirect(route('admin.users.index'));
    }
}
