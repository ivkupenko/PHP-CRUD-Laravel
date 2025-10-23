<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserDataRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $map = [
            'male' => 0,
            'female' => 1,
        ];

        if (isset($this->sex_id) && array_key_exists($this->sex_id, $map)) {
            $this->merge([
                'sex_id' => $map[$this->sex_id],
            ]);
        }
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'sex_id' => 'required|in:0,1',
            'email' => 'required|max:255|email|unique:users',
            'location' => 'required|max:255',
            'phone' => 'required|max:255',
        ];
    }
}
