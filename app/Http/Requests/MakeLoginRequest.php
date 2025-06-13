<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;           // <- IMPORT CORRETO AQUI
use Illuminate\Support\Facades\Hash;

class MakeLoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'=>['required','email'],
            'password'=>['required', 'min:6']
        ];
    }

    public function tryToLogin(): bool
    {
        if ($user = User::query()->where('email', $this->email)->first()) {
            if (Hash::check($this->password, $user->password)) {
                auth()->login($user);
                return true;
            }
        }
        return false;
    }
}
