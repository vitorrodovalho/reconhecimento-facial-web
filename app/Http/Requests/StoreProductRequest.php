<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'codigo' => 'required|numeric|max:99999999999',
            'nome' => 'required|max:45',
            'foto' => 'nullable|max:200',
            'cargo' => 'nullable|max:100',
            'departamento' => 'nullable|max:100',
        ];
    }
}
