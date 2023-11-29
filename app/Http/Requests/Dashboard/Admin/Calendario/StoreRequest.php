<?php

namespace App\Http\Requests\Dashboard\Admin\Calendario;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'agent_id'=>['required'],
            'actividad_id'=>['required'],
        ];
    }

    public function messages(){
        return [
            'agent_id.required' => __('el campo :attribute es requerido', ['attribute' => __('Agente')]),
            'actividad_id.required' => __('el campo :attribute es requerido', ['attribute' => __('Actividad')]),
        ];

        }
}
