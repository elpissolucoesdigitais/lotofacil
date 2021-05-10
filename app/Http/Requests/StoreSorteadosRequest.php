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
        return [
            'identificador' => 'required|min:1|max:10',
            'ns1' => 'required|min:1|max:2',
            'ns2' => 'required|min:1|max:2',
            'ns3' => 'required|min:1|max:2',
            'ns4' => 'required|min:1|max:2',
            'ns5' => 'required|min:1|max:2',
            'ns6' => 'required|min:1|max:2',
            'ns7' => 'required|min:1|max:2',
            'ns8' => 'required|min:1|max:2',
            'ns9' => 'required|min:1|max:2',
            'ns10' => 'required|min:1|max:2',
            'ns11' => 'required|min:1|max:2',
            'ns12' => 'required|min:1|max:2',
            'ns13' => 'required|min:1|max:2',
            'ns14' => 'required|min:1|max:2',
            'ns15' => 'required|min:1|max:2',
            'ns16' => 'nullable|min:1|max:2',
            'ns17' => 'nullable|min:1|max:2',
            'ns18' => 'nullable|min:1|max:2',
            'ns19' => 'nullable|min:1|max:2',
            'ns20' => 'nullable|min:1|max:2',
        ];
    }

    public function messages()
    {
        return[
            'identificador.required' => 'Insira o Identificador',
            'ns1.required' => 'Insira o numero 01',
            'ns2.required' => 'Insira o numero 02',
            'ns3.required' => 'Insira o numero 03',
            'ns4.required' => 'Insira o numero 04',
            'ns5.required' => 'Insira o numero 05',
            'ns6.required' => 'Insira o numero 06',
            'ns7.required' => 'Insira o numero 07',
            'ns8.required' => 'Insira o numero 08',
            'ns9.required' => 'Insira o numero 09',
            'ns10.required' => 'Insira o numero 10',
            'ns11.required' => 'Insira o numero 11',
            'ns12.required' => 'Insira o numero 12',
            'ns13.required' => 'Insira o numero 13',
            'ns14.required' => 'Insira o numero 14',
            'ns15.required' => 'Insira o numero 15',
            'ns16.required' => 'Insira o numero 16',
            'ns17.required' => 'Insira o numero 17',
            'ns18.required' => 'Insira o numero 18',
            'ns19.required' => 'Insira o numero 19',
            'ns20.required' => 'Insira o numero 20',

            'ns1.max' => 'Só pode adicionar no máximo 2 números na caixa 01',
            'ns2.max' => 'Só pode adicionar no máximo 2 números na caixa 02',
            'ns3.max' => 'Só pode adicionar no máximo 2 números na caixa 03',
            'ns4.max' => 'Só pode adicionar no máximo 2 números na caixa 04',
            'ns5.max' => 'Só pode adicionar no máximo 2 números na caixa 05',
            'ns6.max' => 'Só pode adicionar no máximo 2 números na caixa 06',
            'ns7.max' => 'Só pode adicionar no máximo 2 números na caixa 07',
            'ns8.max' => 'Só pode adicionar no máximo 2 números na caixa 08',
            'ns9.max' => 'Só pode adicionar no máximo 2 números na caixa 09',
            'ns10.max' => 'Só pode adicionar no máximo 2 números na caixa 10',
            'ns11.max' => 'Só pode adicionar no máximo 2 números na caixa 11',
            'ns12.max' => 'Só pode adicionar no máximo 2 números na caixa 12',
            'ns13.max' => 'Só pode adicionar no máximo 2 números na caixa 13',
            'ns14.max' => 'Só pode adicionar no máximo 2 números na caixa 14',
            'ns15.max' => 'Só pode adicionar no máximo 2 números na caixa 15',
            'ns16.max' => 'Só pode adicionar no máximo 2 números na caixa 16',
            'ns17.max' => 'Só pode adicionar no máximo 2 números na caixa 17',
            'ns18.max' => 'Só pode adicionar no máximo 2 números na caixa 18',
            'ns19.max' => 'Só pode adicionar no máximo 2 números na caixa 19',
            'ns20.max' => 'Só pode adicionar no máximo 2 números na caixa 20',
        ];
    }
}
