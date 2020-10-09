<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'name' => 'required|max:45',
            'nickname' => 'required|max:45',
            'cnpj' => 'required|max:45|cnpj|unique:companies,cnpj',
            'municipal_registration' => 'max:50',
            'state_registration' => 'max:50',
            'logo' => 'max:200',
            'currency' => 'max:20',
            'language' => 'max:20',
            'address' => 'max:100',
            'address_country' => 'max:100',
            'address_neighborhood' => 'max:100',
            'address_complement' => 'max:200',
            'address_city' => 'max:200',
            'address_state' => 'max:100',
            'address_postal_code' => 'max:9',
            'show_login' => 'max:1|numeric',
        ];
    }
}
