<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreSorteadosRequest extends FormRequest
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
        $id=$this->segment(3);
        return [
            'identificador' => "required|min:1|max:10 |unique:cartoes,id,{$id},id",
        ];
    }

}
