<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateUserDataRequest extends FormRequest
{
    public function rules(): array
    {
        $user = $this->route('user');

        return [
            'name' => 'required|max:255',
            'sex' => 'required',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'location' => 'required|max:255',
            'phone' => 'required|max:255',
        ];
    }
}
