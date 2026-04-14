<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class carRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        //asegurar que esté en true 
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "car_make"=> ["required","string","max:255"],
            "car_model"=> ["required","string","max:255"],
            "car_year"=> ["required","integer","min:1970","max:2026"],
            "car_price"=> ["required","integer","min:0","max:1000000"],
            "car_status"=> ["required","boolean"],
            "fk_categoria_id"=> ["required","exists:categories,id"], //el exist asegura que la categoría exista en la tabla categories
            "barcode"=> ["required","string","max:255"]
        ];
    }
}
