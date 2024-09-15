<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserinfoReq extends FormRequest
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
            //
            'user_id'=>'required',
            'user_name'=>'required',
            'flat_No'=>'required|digits:3',
            'wing'=>'required|string',
            'type'=>'required|string',
            'email'=>'required|string',
            'mobile_No'=>'required|digits:10',
            'occupation'=>'required|string',
            'dob'=>'required|date',
            'apartment_id'=>'required|string'

        ];
    }
    public function messages()
    {
        return [
            //
            'user_id'=>'user_id is required',
            'user_name'=>'user_name is required',
            'flat_No'=>'flat_No is required',
            'wing'=>'wing is required and must be string',
            'type'=>'type is required and must be string',
            'email'=>'email is required and must be string',
            'mobile_No'=>'mobile_No is required',
            'occupation'=>'occupation is required and must be string',
            'dob'=>'Date is required',
            'apartment_id'=>'apartment_id is required and must be string',

        ];
    }
}
