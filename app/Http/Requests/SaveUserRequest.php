<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveUserRequest extends Request
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
            'name'      => 'required|unique:users|max:100',
            'last_name' => 'required|max:100',
            'email'     => 'required|email|unique:users',
            'user'      => 'required|unique:users|min:4|max:20',
            'password'  => 'required|confirmed',
            'state'     => 'required|max:40',
            'city'      => 'required|max:40',
            'cp'        => 'required|max:5',
            'address'   => 'required|max:80',
            'type'      => 'required|in:user,admin',
        ];
    }
}
