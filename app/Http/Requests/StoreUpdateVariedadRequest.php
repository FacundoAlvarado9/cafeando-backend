<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreUpdateVariedadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nombre' => ['required', Rule::unique('variedades', 'nombre')->ignore($this->route('variedade'))],
          'descripcion' => 'required',
          'tipo_id' => ['required', Rule::exists('tipos', 'id')],
          'tostaduria_id' => ['required', Rule::exists('tostadurias', 'id')],
          'url' => ['required', Rule::unique('variedades', 'url')->ignore($this->route('variedade'))],
          'origenes'=>'array|required|min:1', //Tiene al menos uno seleccionado
          'origenes.*' => 'exists:origenes,id' //Existe
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
            'origenes.*.exists' => 'El origen debe existir'
        ];
    }
}
