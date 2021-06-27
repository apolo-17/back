<?php

namespace App\Http\Requests;

use App\Rules\ValidIdentifierCharacters;
use Illuminate\Foundation\Http\FormRequest;

class EntityRequest extends FormRequest
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
            'name' => ['required'],
            'identifier' => ['required', 'max:11', 'min:11', new ValidIdentifierCharacters]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'identifier.required' => 'El identificador es obligatorio',
            'identifier.max' => 'El identificador no puede ser mayor de 11 caracteres',
            'identifier.min' => 'El identificador debe de ser minimo de 11 caracteres'
        ];
    }
}
