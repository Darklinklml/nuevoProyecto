<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVideojuegoRequest extends FormRequest
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
            'videojuego_nombre'=>'required',
            'videojuego_consola'=>'required',
            'videojuego_precio_adquisicion'=>'required',
            'imagen'=> [$this->route('videojuego') ? 'nullable' : 'required','image'],
            'videojuego_precio_venta'=> [$this->route('videojuego') ? 'required' : 'nullable']
        ];
    }
}
