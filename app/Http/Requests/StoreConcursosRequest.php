<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreConcursosRequest extends FormRequest
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
        $identificador_concurso=$this->segment(3);
        return [
            'identificador_concurso' => "required|min:1|max:10|unique:concursos,identificador_concurso,{$identificador_concurso},identificador_concurso"
        ];
    }

}
