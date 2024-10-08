<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
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
            "name" => 'required|max:75'
        ];
    }

    public function messages(){
        return [
            "name.required" => "Il nome del brand è obbligatorio",
            "name.max"  => "Il nome del brand deve essere lungo al massimo 75 caratteri"
        ];
    }
}
