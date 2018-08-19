<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'disc_nome' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return [
            'disc_nome.required' => 'É obrigatório preencher o nome da disciplina no seu respectivo campo.',
            'disc_nome.max' => 'O nome da disciplina só pode ter no máximo 100 caracteres.'

        ];
    }
}
