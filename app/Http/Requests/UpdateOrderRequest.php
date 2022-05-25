<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'details' => 'required',
            'client' => 'required',
        ];
    }

    public function messages()
    {
//        return parent::messages();

        return [

            'details.required' => 'details is required',
            'client.required' => 'client is required',

        ];
    }
}
