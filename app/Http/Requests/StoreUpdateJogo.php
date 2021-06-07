<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateJogo extends FormRequest
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
        $identificador_jogo=$this->segment(3);
        return [
            'identificador_jogo' => "required|min:1|max:20|unique:jogos,identificador_jogo,{$identificador_jogo},identificador_jogo",
            'concurso_id' => "required|min:1|max:20",
        ];
    }
}
