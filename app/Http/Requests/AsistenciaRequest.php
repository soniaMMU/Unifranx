<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Asistencia;

class AsistenciaRequest extends FormRequest
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
			'sesiones_id' => 'required',
			'participantes_id' => 'required',
			'fh_asis' => 'required',
			'st_asis' => 'required|string',
			'asistencia_confirmada' => 'required',
        ];
    }

    public function index()
    {
        $asistencias = Asistencia::all();
        return view('asistenciapart.index', compact('asistencias'));
    }
    public function show($id)
    {
        $asistencia = Asistencia::findOrFail($id);
        return view('asistenciapart.show', compact('asistencia'));
    }
}
