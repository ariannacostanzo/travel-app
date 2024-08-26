<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStopRequest extends FormRequest
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
            'day_id' => 'required',
            'title' => 'required|string|unique:stops',
            'image' => 'nullable|string',
            'foods' => 'nullable|string',
            'is_completed' => 'boolean',
            'address' => 'required|string',
            'latitude' => 'required',
            'longitude' => 'required',
        ];
    }
}
