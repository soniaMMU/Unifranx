<?php

namespace App\Http\Controllers;

use App\Models\Inscripcione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\InscripcioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Evento;
use App\Models\Participante;

class InscripcioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $search = $request->input('search');

        $inscripciones = Inscripcione::with('participante', 'evento')
            ->when($search, function ($query, $search) {
                return $query->whereHas('participante', function ($q) use ($search) {
                    $q->where('nom_p', 'like', "%{$search}%")
                      ->orWhere('app_p', 'like', "%{$search}%")
                      ->orWhere('apm_p', 'like', "%{$search}%");
                })
                ->orWhereHas('evento', function ($q) use ($search) {
                    $q->where('nom_ev', 'like', "%{$search}%");
                })
                ->orWhere('st_ev', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate();

        return view('inscripcione.index', compact('inscripciones', 'search'))
            ->with('i', ($request->input('page', 1) - 1) * $inscripciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $inscripcione = new Inscripcione();
        $participante = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);
        $evento = Evento::pluck('nom_ev', 'id');

        return view('inscripcione.create', compact('inscripcione', 'evento', 'participante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InscripcioneRequest $request): RedirectResponse
    {
        Inscripcione::create($request->validated());

        return Redirect::route('inscripciones.index')
            ->with('success', 'Inscripcione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $inscripcione = Inscripcione::find($id);

        return view('inscripcione.show', compact('inscripcione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $inscripcione = Inscripcione::find($id);
        $participante = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);
        $evento = Evento::pluck('nom_ev', 'id');

        return view('inscripcione.edit', compact('inscripcione', 'evento', 'participante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InscripcioneRequest $request, Inscripcione $inscripcione): RedirectResponse
    {
        $inscripcione->update($request->validated());

        return Redirect::route('inscripciones.index')
            ->with('success', 'Inscripcione updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Inscripcione::find($id)->delete();

        return Redirect::route('inscripciones.index')
            ->with('success', 'Inscripcione deleted successfully');
    }

    public function inscribirse(Request $request): RedirectResponse
    {
        // Obtén el ID del evento desde el formulario
        $eventoId = $request->input('evento_id');

        // Usa el ID fijo del participante
        $participanteId = 1; // Cambia esto si necesitas usar otro ID fijo

        // Crea el registro de inscripción
        Inscripcione::create([
            'participantes_id' => $participanteId,
            'eventos_id' => $eventoId,
            'st_ev' => 'Inscrito',
        ]);

        // Redirige a la vista mis talleres con un mensaje de éxito
        return redirect()->route('eventosparti.index')->with('success', 'Te has inscrito correctamente al taller.');
    }
}
