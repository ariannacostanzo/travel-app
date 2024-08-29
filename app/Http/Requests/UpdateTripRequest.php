<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTripRequest extends FormRequest
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
        $id = $this->route('trip');

        return [
            'title' => ['required', 'string', Rule::unique('trips')->ignore($id)],
            'departure_date' => ['required', 'date', 'after_or_equal:today', Rule::unique('trips')->ignore($id)],
            'return_date' => ['required', 'date', 'after_or_equal:departure_date', Rule::unique('trips')->ignore($id)],
            'image_url' => 'nullable|string'
        ];
    }
}
