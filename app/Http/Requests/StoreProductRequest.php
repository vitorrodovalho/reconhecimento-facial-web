<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'code' => 'required|numeric|max:9999999',
            'description' => 'required|max:150',
            'plant' => 'nullable|max:20',
            'unity_code' => 'nullable|max:3',
            'volume' => 'nullable|numeric',
            'cod_un_volume' => 'nullable|max:3',
            'weight' => 'nullable|numeric',
            'cod_un_weight' => 'nullable|max:3',
            //'packing' => 'integer',
            'price' => 'min:0|nullable',
            'currency' => 'nullable|max:3',
            'ean_13' => 'nullable|max:20',
            'qty_washes' => 'min:0|nullable|integer',
            'max_washes' => 'min:0|nullable|integer',
            'date_last_washes' => 'nullable|date',
            'max_days_no_mov' => 'min:0|nullable|numeric',
        ];
    }
}
