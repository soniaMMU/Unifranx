<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
			'tip_ev' => 'required|string',
			'f_in_ev' => 'required',
			'nom_ev' => 'required|string',
			'sed_ev' => 'required|string',
			'f_fi_ev' => 'required',
			'st_ev' => 'required|string',
			'image' => 'required|string',
        ];
    }
}
