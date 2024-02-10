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
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'plate_number' => 'required|string',
            'status' => 'required|string',
            'vehicle_type' => 'required|string',
            'payment_method' => 'required|string',
            'Route' => 'required',
            
        ];
    }
}
