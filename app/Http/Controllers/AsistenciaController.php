<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AsistenciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Participante;
use App\Models\Sesione;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $asistencias = Asistencia::with('participante')->paginate();//======
        $asistencias = Asistencia::with('sesione')->paginate();//======
        $asistencias = Asistencia::orderBy('created_at', 'desc')
        ->paginate();
        

        return view('asistencia.index', compact('asistencias'))
            ->with('i', ($request->input('page', 1) - 1) * $asistencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $asistencia = new Asistencia();
        $participante = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);

        $sesione = Sesione::pluck('t_s','id');

        return view('asistencia.create', compact('asistencia', 'participante', 'sesione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsistenciaRequest $request): RedirectResponse
    {
        Asistencia::create($request->validated());

        return Redirect::route('asistencias.index')
            ->with('success', 'Asistencia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $asistencia = Asistencia::findOrFail($id);

        // Cambiar el estado de la asistencia si aún no está marcada
        if ($asistencia->st_asis !== 'Asistencia Marcada') {
            $asistencia->st_asis = 'Asistencia Marcada';
            $asistencia->save();
        }

        return view('asistencia.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $asistencia = Asistencia::find($id);
        $participante = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);

        $sesione = Sesione::pluck('t_s','id');
        return view('asistencia.edit', compact('asistencia', 'participante', 'sesione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsistenciaRequest $request, Asistencia $asistencia): RedirectResponse
    {
        $asistencia->update($request->validated());

        return Redirect::route('asistencias.index')
            ->with('success', 'Asistencia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Asistencia::find($id)->delete();

        return Redirect::route('asistencias.index')
            ->with('success', 'Asistencia deleted successfully');
    }


    public function volver($id): RedirectResponse
{
    $asistencia = Asistencia::findOrFail($id);
    $asistencia->asistencia_confirmada = 1; // Cambiar el estado a 1
    $asistencia->save();

    return Redirect::route('asistenciapart.index')
        ->with('success', 'Estado de asistencia actualizado correctamente.');
}

    
    
}
