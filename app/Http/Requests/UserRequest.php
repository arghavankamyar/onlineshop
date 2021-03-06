<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>'required|max:30',
            'email' => 'required|email',
            'role_id' => 'required|integer|in:1,2',
            'password' => 'required|min:6',
        ];
    }
}
