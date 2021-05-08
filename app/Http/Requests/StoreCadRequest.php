<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreCadRequest extends FormRequest
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
            'identificador' => 'required|min:1|max:10',
            'nj1' => 'required|min:1|max:2',
            'nj2' => 'required|min:1|max:2',
            'nj3' => 'required|min:1|max:2',
            'nj4' => 'required|min:1|max:2',
            'nj5' => 'required|min:1|max:2',
            'nj6' => 'required|min:1|max:2',
            'nj7' => 'required|min:1|max:2',
            'nj8' => 'required|min:1|max:2',
            'nj9' => 'required|min:1|max:2',
            'nj10' => 'required|min:1|max:2',
            'nj11' => 'required|min:1|max:2',
            'nj12' => 'required|min:1|max:2',
            'nj13' => 'required|min:1|max:2',
            'nj14' => 'required|min:1|max:2',
            'nj15' => 'required|min:1|max:2',
            'nj16' => 'nullable|min:1|max:2',
            'nj17' => 'nullable|min:1|max:2',
            'nj18' => 'nullable|min:1|max:2',
            'nj19' => 'nullable|min:1|max:2',
            'nj20' => 'nullable|min:1|max:2',
        ];
    }

    public function messages()
    {
        return[
            'identificador.required' => 'Insira o Identificador',
            'nj1.required' => 'Insira o numero 01',
            'nj2.required' => 'Insira o numero 02',
            'nj3.required' => 'Insira o numero 03',
            'nj4.required' => 'Insira o numero 04',
            'nj5.required' => 'Insira o numero 05',
            'nj6.required' => 'Insira o numero 06',
            'nj7.required' => 'Insira o numero 07',
            'nj8.required' => 'Insira o numero 08',
            'nj9.required' => 'Insira o numero 09',
            'nj10.required' => 'Insira o numero 10',
            'nj11.required' => 'Insira o numero 11',
            'nj12.required' => 'Insira o numero 12',
            'nj13.required' => 'Insira o numero 13',
            'nj14.required' => 'Insira o numero 14',
            'nj15.required' => 'Insira o numero 15',
            'nj16.required' => 'Insira o numero 16',
            'nj17.required' => 'Insira o numero 17',
            'nj18.required' => 'Insira o numero 18',
            'nj19.required' => 'Insira o numero 19',
            'nj20.required' => 'Insira o numero 20',

            'nj1.max' => 'Só pode adicionar no máximo 2 números na caixa 01',
            'nj2.max' => 'Só pode adicionar no máximo 2 números na caixa 02',
            'nj3.max' => 'Só pode adicionar no máximo 2 números na caixa 03',
            'nj4.max' => 'Só pode adicionar no máximo 2 números na caixa 04',
            'nj5.max' => 'Só pode adicionar no máximo 2 números na caixa 05',
            'nj6.max' => 'Só pode adicionar no máximo 2 números na caixa 06',
            'nj7.max' => 'Só pode adicionar no máximo 2 números na caixa 07',
            'nj8.max' => 'Só pode adicionar no máximo 2 números na caixa 08',
            'nj9.max' => 'Só pode adicionar no máximo 2 números na caixa 09',
            'nj10.max' => 'Só pode adicionar no máximo 2 números na caixa 10',
            'nj11.max' => 'Só pode adicionar no máximo 2 números na caixa 11',
            'nj12.max' => 'Só pode adicionar no máximo 2 números na caixa 12',
            'nj13.max' => 'Só pode adicionar no máximo 2 números na caixa 13',
            'nj14.max' => 'Só pode adicionar no máximo 2 números na caixa 14',
            'nj15.max' => 'Só pode adicionar no máximo 2 números na caixa 15',
            'nj16.max' => 'Só pode adicionar no máximo 2 números na caixa 16',
            'nj17.max' => 'Só pode adicionar no máximo 2 números na caixa 17',
            'nj18.max' => 'Só pode adicionar no máximo 2 números na caixa 18',
            'nj19.max' => 'Só pode adicionar no máximo 2 números na caixa 19',
            'nj20.max' => 'Só pode adicionar no máximo 2 números na caixa 20',
        ];
    }
}
