<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipanteRequest extends FormRequest
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
			'roles_id' => 'required',
			'nom_p' => 'required|string',
			'app_p' => 'required|string',
			'apm_p' => 'required|string',
			'ci_p' => 'required',
			'c1_p' => 'required',
			'c2_p' => 'required',
			'corr_p' => 'required|string',
			'carr_p' => 'string',
			'org_p' => 'string',
			'est_p' => 'required|string',
        ];
    }
}
