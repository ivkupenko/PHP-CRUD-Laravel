<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserDataRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'sex' => 'required',
            'email' => 'required|email|unique:users',
            'location' => 'required',
            'phone' => 'required',
        ];
    }
}
