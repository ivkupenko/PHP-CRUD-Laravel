<?php

namespace App\Http\Requests;

use App\Models\Gender;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserDataRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $map = Gender::query()->orderBy('id')->pluck('id', 'gender')->toArray();

        if (isset($this->gender_id) && array_key_exists($this->gender_id, $map)) {
            $this->merge([
                'gender_id' => $map[$this->gender_id],
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
