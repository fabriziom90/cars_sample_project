<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'model_name' => 'required|max:50',
            'price' => 'required|max_digits:10',
            'used'  => 'boolean',
            'km'    => 'required',
            'ports_number'  => 'integer|max:5',
            'cubic_capacity'    => 'required',
            'transmission'  => 'required',
            'power_supply'  => 'required|max:20',
        ];
    }

    public function messages(){
        return [
            'model_name.required' => 'Il nome del modello è obbligatorio',
            'model_name.max'    => 'Il nome del modello deve essere al massimo di 50 caratteri',
            'price.required' => 'Il prezzo dell\'auto è obbligatorio',
            'price.max_digits' => 'Il prezzo può essere al massimo di 10 cifre',
            'used.boolean'  => 'L\'auto deve essere usata o no',
            'km.required'   => 'I km sono obbligatori',
            'ports_number.integer'  => 'Il numero di porte deve essere un valore intero',
            'ports_number.max'  => 'Il numero di porte deve essere al massimo 5',
            'cubic_capacity.required' => 'La cilindrata è obbligatoria',
            'transmission.required' => 'La tipologia di marcia è obbligatoria',
            'power_supply.required' => 'La tipologia di alimentazione è obbligatoria',
            'power_supply.max'  => 'La tipologia di alimentazione deve essere lunga al massimo 20 caratteri'
        ];   
    }
}
