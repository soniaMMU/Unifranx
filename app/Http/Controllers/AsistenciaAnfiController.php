<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AsistenciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Sesione;
use App\Models\Participante;
use Carbon\Carbon;

class AsistenciaAnfiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $asistencias = Asistencia::with('participante')->orderBy('created_at', 'desc')->paginate();

        return view('asistencianfi.index', compact('asistencias'))
            ->with('i', ($request->input('page', 1) - 1) * $asistencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asistencia = new Asistencia();
        $sesiones = Sesione::pluck('t_s','id'); // Aquí se muestra solo el ID de la sesión
        $participantes = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);
    
        return view('asistencianfi.create', compact('asistencia', 'sesiones', 'participantes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsistenciaRequest $request): RedirectResponse
    {
        $fechaHora = Carbon::parse($request->fh_asis)->format('Y-m-d H:i:s');

        Asistencia::create([
            'sesiones_id' => $request->sesiones_id,
            'participantes_id' => $request->participantes_id,
            'fh_asis' => $fechaHora,
            'st_asis' => $request->st_asis,
            'asistencia_confirmada' => $request->asistencia_confirmada
        ]);

        return Redirect::route('asistencianfi.index')
            ->with('success', 'Asistencia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $asistencia = Asistencia::find($id);

        return view('asistencianfi.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $asistencia = Asistencia::find($id);
        $sesiones = Sesione::pluck('t_s','id'); // Aquí se muestra solo el ID de la sesión
        $participantes = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);
    
        return view('asistencianfi.edit', compact('asistencia', 'sesiones', 'participantes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsistenciaRequest $request, Asistencia $asistencia): RedirectResponse
    {
        $fechaHora = Carbon::parse($request->fh_asis)->format('Y-m-d H:i:s');

        $asistencia->update([
            'sesiones_id' => $request->sesiones_id,
            'participantes_id' => $request->participantes_id,
            'fh_asis' => $fechaHora,
            'st_asis' => $request->st_asis,
            'asistencia_confirmada' => $request->asistencia_confirmada
        ]);

        return Redirect::route('asistencianfi.index')
            ->with('success', 'Asistencia updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        Asistencia::find($id)->delete();

        return Redirect::route('asistencianfi.index')
            ->with('success', 'Asistencia deleted successfully.');
    }
}
