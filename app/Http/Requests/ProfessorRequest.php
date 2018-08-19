<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
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
            'prof_nome' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return [
            'prof_nome.required' => 'É obrigatório preencher o nome do professor no seu respectivo campo.',
            'prof_nome.max' => 'O nome do professor só pode ter no máximo 100 caracteres.'

        ];
    }

}
