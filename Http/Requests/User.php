<?php

namespace Modules\InvoiceAndUser\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class User extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|string',
            'email'             => 'required|email:rfc,dns|unique:users',
            'password'          => 'required|confirmed'
        ];
    }


    public function messages()
    {

    }
}
