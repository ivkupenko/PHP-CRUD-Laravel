<?php

namespace App\Http\Requests;

use App\Models\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateUserDataRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        if (isset($this->gender_id)) {
            $genderId = Gender::where('gender', $this->gender_id)->value('id');

            $this->merge(['gender_id' => $genderId]);
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
