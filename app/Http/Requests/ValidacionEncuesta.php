<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionEncuesta extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'pregunta1'   => 'required',
            'pregunta2'   => 'required_if:pregunta1,1',
            'pregunta3'   => 'required_if:pregunta1,1',
            'pregunta4'   => 'required_if:pregunta1,1',
            'pregunta5'   => 'required_if:pregunta4,1',
            'pregunta51' => 'required_if:pregunta5,1',
            'pregunta52' => 'required_if:pregunta5,3',
            'pregunta6'   => 'required_if:pregunta5,2|decimal:2',
            'pregunta7'   => 'required_if:pregunta4,0',
            'pregunta8'   => 'required_if:pregunta4,0',
        ];
    }

    public function attributes()
    {
        return[
            'pregunta1' => 'Pregunta 1',
            'pregunta2' => 'Pregunta 2',
            'pregunta3' => 'Pregunta 3',
            'pregunta4' => 'Pregunta 4',
            'pregunta5' => 'Pregunta 5',
            'pregunta51' => 'Pregunta 5.1',
            'pregunta52' => 'Pregunta 5.2',
            'pregunta6' => 'Pregunta 6',
            'pregunta7' => 'Pregunta 7',
            'pregunta8' => 'Pregunta 8',
        ];
    }

    public function messages()
    {
        return [
            'pregunta1.required' => 'La Pregunta 1 es un campo obligatorio',
            'pregunta2.required' => 'La Pregunta 2 es un campo obligatorio',
            'pregunta3.required' => 'La Pregunta 3 es un campo obligatorio',
            'pregunta4.required' => 'La Pregunta 4 es un campo obligatorio',
            'pregunta5.required' => 'La Pregunta 5 es un campo obligatorio',
            'pregunta51.required' => 'La Pregunta 5.1 es un campo obligatorio',
            'pregunta52.required' => 'La Pregunta 5.2 es un campo obligatorio',
            'pregunta6.required' => 'La Pregunta 6 es un campo obligatorio',
            'pregunta7.required' => 'La Pregunta 7 es un campo obligatorio',
            'pregunta8.required' => 'La Pregunta 8 es un campo obligatorio',
        ];
    }
}
