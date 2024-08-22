<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTripRequest extends FormRequest
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
            'title' => 'required|string|unique:trips',
            'departure_date' => 'required|date|after_or_equal:today|unique:trips',
            'return_date' => 'required|date|after_or_equal:departure_date|unique:trips',
        ];
    }

    public function messages()
    {
        return [

            'title.required' => 'Inserire il titolo',
            'title.unique' => 'Questo titolo è gia in uso',
            'departure_date.required' => 'Inserire la data di partenza'
        ];
    }
}
