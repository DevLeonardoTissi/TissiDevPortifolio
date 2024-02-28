<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:10'],
            'url' => ['required', 'url']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nome do projeto obrigatório',
            'name.min' => 'O nome precisa ter pelo menos 10 caracteres',
            'url.required' => 'Campo URL obrigatório',
            'url.url' => 'Campo URL precisa ser uma URL válida'
            ];
    }
}
