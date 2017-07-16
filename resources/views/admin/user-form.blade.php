<label for="name" class="control-label">نام کاربر:</label>
<input type="text" name="name" class="form-control" value="{{old('name',isset($users) ? $users->name : '')}}">
<label for="email" class="control-label">آدرس ایمیل کاربر:</label>
<input type="email" name="email" class="form-control" value="{{old('email',isset($users) ? $users->email : '')}}">
<label for="role_id" class="control-label">نقش کاربر:</label>
<select name="role_id" id="role_id" class="form-control">
    @foreach($roles->all() as $role)
        <option
                @if(isset($users) && $users->role_id == $role)
                selected
                @endif
                value="{{$role->id}}">{{$role->role}}</option>
    @endforeach
</select>
<label for="password" class="control-label">رمز عبور:</label>
<input type="password" name="password" class="form-control">
<br/>
<button type="submit" class="btn btn-small form-control btn-success">ثبت</button>