<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FumettoFormRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:255',
            'publishing_house' => 'required|string|min:3|max:255',
            'price' => 'required|numeric'
        ];
    }
    public function messages() {
        return [
            'title.min' => "Il titolo deve avere almeno 3 caratteri",
            'publishing_house.min' => "La Casa Editrice deve contenere almeno 3 caratteri",
            'price.numeric' => "Il prezzo può contenere solo numeri"
        ];
    }
}
