<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules = [
            'name' => ['required', 'string', 'max:255'],
        ];

       if($this->method() == 'POST') {
           $rules['email'] = ['required', 'string', 'email', 'max:255', 'unique:users'];
           $rules['phone'] = ['required', 'string', 'max:255', 'unique:users'];
           $rules['password'] = ['required', 'string', 'min:8'];
       }else{
           $rules['email'] = ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->route('user')->id];
           $rules['phone'] = ['required', 'string', 'max:255', 'unique:users,phone,' .  $this->route('user')->id];
           $rules['password'] = ['nullable', 'string', 'min:8'];
       }

       return $rules;

    }
}
