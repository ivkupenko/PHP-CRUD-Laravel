<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateUserDataRequest extends FormRequest
{
protected function prepareForValidation(): void
    {
        $map = [
            'male' => 0,
            'female' => 1,
        ];

        if (isset($this->gender_id) && array_key_exists($this->gender_id, $map)) {
            $this->merge([
                'gender_id' => $map[$this->gender_id],
            ]);
        }
    }

    public function rules(): array
    {
        $user = $this->route('user');

        return [
            'name' => 'required|max:255',
            'gender_id' => 'required|integer|exists:genders,id',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'location' => 'required|max:255',
            'phone' => 'required|max:255',
        ];
    }
}
