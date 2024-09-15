<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleReq extends FormRequest
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
            //
            'name' => 'required',
            'guard_name' => 'required',
        ];

    }
    public function messages()
    {
            return [
                'name' => 'name is required',
                'guard_name' => 'guard_name is required',
             
             ];
    }
}
