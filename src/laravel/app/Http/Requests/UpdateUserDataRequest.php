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
            'name' => 'required',
            'sex' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'location' => 'required',
            'phone' => 'required',
        ];
    }
}
