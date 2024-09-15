<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class VisitorreqReq extends FormRequest
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
            'name' => 'required',
            'mobile_no' => 'required|digits:10',
            'dob' => 'required|date',
            'photo' => 'required',
            'Address' => 'required|string',
            'tag' => 'required',
            'apartment_id' => 'required|digits',
        ];
    }
   public function messages()
   {
           return [
            'name' => 'name is required',
            'mobile_no' => 'mobile_no is required',
            'dob' => 'date of birth is required',
            'photo' => 'photo is required',
            'Address' => 'Address is required',
            'tag' => ' tag is required',
            'apartment_id' => 'apartment_id is required',
            ];
   }
}

