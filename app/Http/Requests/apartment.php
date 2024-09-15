<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class apartment extends FormRequest
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
            'apartment_name' => 'required',
            'apartment_address' => 'required',
            'apartment_city' => 'required',
            'apartment_district' => 'required',
            'apartment_state' => 'required',
            'apartment_pin_code' => 'required',
        ];
    }
   public function messages()
   {
           return [
            'apartment_name' => 'apartment_name is required',
            'apartment_address' => 'apartment_address is required',
            'apartment_city' => 'apartment_city is required',
            'apartment_district' => 'apartment_district is required',
            'apartment_state' => 'apartment_state is required',
            'apartment_pin_code' => 'apartment_pin_code is required',
            ];
   }
}
