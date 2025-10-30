<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateUserDataRequest extends FormRequest
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
