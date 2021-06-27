<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeRequest extends FormRequest
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
            'last_name' => ['required'],
            'dni' => ['required', Rule::unique('employees')->ignore($this->dni, 'dni')],
            'born_date' => ['required', 'date'],
            'address' => ['required'],
            'photo_url' => ['required', 'image', 'max:2048', 'mimes:jpeg,png,jpg'],
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
            'last_name.required' => 'Los apellidos son obligatorios',
            'dni.required' => 'El DNI es obligatorio',
            'dni.unique' => 'El DNI es repetido',
            'born_date.required' => 'La fecha de nacimiento es obligatoria',
            'born_date.date' => 'La fecha no es el formato correspondiente',
            'address.required' => 'La dirección es obligatoria',
            'photo_url.image' => 'La foto de perfil es obligatoria',
            'photo_url.max' => 'El peso de la imagen rebasa los 2MB',
            'photo_url.mimes' => 'El formato de la foto no es el permitido'
        ];
    }
}
