<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriversRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id'=> 'required',
           'route'=> 'required',
           'image'=> 'required',
            'number_seats' => 'required|integer',
            'typ_vehicle' => 'required|string',
            'matricule' => 'required|integer',
            'price' => 'required|integer',
            'method_payment' => 'required|in:cart,espase',
            'description' => 'required|string',
        ];
    }
}
