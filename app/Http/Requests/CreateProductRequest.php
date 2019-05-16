<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'pname' => 'required|max:100',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:1',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'pname.required' => 'Product name is required',
            'price.required' => 'You must enter a price',
            'description.required' => 'You must specify Product information',
        ];
    }
}
