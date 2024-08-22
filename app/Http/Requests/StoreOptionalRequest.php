<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOptionalRequest extends FormRequest
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
            'name' => 'required|max:50',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome dell\'optional è obbligatorio',
            'name.max'  => 'Il nome dell\'optional deve essere lungo al massimo 50 caratteri',
            'price.required' => 'Il prezzo è obbligatorio'
        ];
    }
}
