<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nome obrigatório',
            'email.email' => 'Digite um email válido',
            'email.required' => 'Email obrigatório',
            'password.required' => 'Digite uma senha'
        ];
    }
}
