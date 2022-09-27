<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuario extends FormRequest
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
            'nombre' => 'required|max:6',
            'edad' => 'required|numeric|min:18',
            'sexo'=> 'required',
            'estado'=> 'required',
            'user'=> 'required|max:4',
            'pass'=> 'required|max:4',
        ];
    }
}
