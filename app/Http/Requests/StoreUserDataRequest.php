<?php

namespace App\Http\Requests;

use App\Models\Gender;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserDataRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        if (isset($this->gender_id)) {
            $this->merge([
                'gender_id' => [$this->gender_id],
            ]);
        }
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'gender_id' => 'required|integer|exists:genders,id',
            'email' => 'required|max:255|email|unique:users',
            'location' => 'required|max:255',
            'phone' => 'required|max:255',
        ];
    }
}
