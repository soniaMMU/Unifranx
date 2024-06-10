<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LugareRequest extends FormRequest
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
			'eventos_id' => 'required',
			'nom_lu' => 'required|string',
			'bl_lu' => 'required|string',
			'cap_lu' => 'required',
			'est_lu' => 'required|string',
        ];
    }
}
