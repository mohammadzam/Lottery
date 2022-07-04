<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAdminRequest extends FormRequest
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
            'name' => 'required|min:3|unique:admins,name,'.$this->id,
            'email' => 'required|email|unique:admins,email,'.$this->id,
            'password' => 'nullable|confirmed|min:8|max:256',
            'password_confirmation'=>'nullable|min:8|max:256|same:password',
        ];
    }
    public function messages()
    {
        return[
            'password_confirmation.same:password' => 'The password confirmation does not match. ',


        ];
    }
}
