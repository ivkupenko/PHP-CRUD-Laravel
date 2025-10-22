<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|unique:products',
            'description' => 'required|max:255',
            'count' => 'required|numeric|min:0',
        ];
    }
}
