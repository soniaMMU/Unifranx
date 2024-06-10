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

class InscripcionAnfiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $search = $request->input('search');

        $inscripciones = Inscripcione::with('participante', 'evento')
            ->when($search, function($query, $search) {
                return $query->whereHas('participante', function($q) use ($search) {
                    $q->where('nom_p', 'like', "%{$search}%")
                      ->orWhere('app_p', 'like', "%{$search}%")
                      ->orWhere('apm_p', 'like', "%{$search}%");
                })->orWhereHas('evento', function($q) use ($search) {
                    $q->where('nom_ev', 'like', "%{$search}%");
                });
            })
            ->orderBy('created_at', 'desc')
            ->paginate();

        return view('inscripcioneanfi.index', compact('inscripciones', 'search'))
            ->with('i', ($request->input('page', 1) - 1) * $inscripciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $inscripcione = new Inscripcione();
        $participantes = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);
        $evento = Evento::pluck('nom_ev', 'id');

        return view('inscripcioneanfi.create', compact('inscripcione', 'evento', 'participantes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InscripcioneRequest $request): RedirectResponse
    {
        Inscripcione::create($request->validated());

        return Redirect::route('inscripcioneanfi.index')
            ->with('success', 'Inscripcione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $inscripcione = Inscripcione::find($id);

        return view('inscripcioneanfi.show', compact('inscripcione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $inscripcione = Inscripcione::find($id);
        $participantes = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);
        $evento = Evento::pluck('nom_ev', 'id');

        return view('inscripcioneanfi.edit', compact('inscripcione', 'evento', 'participantes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InscripcioneRequest $request, Inscripcione $inscripcione): RedirectResponse
    {
        $inscripcione->update($request->validated());

        return Redirect::route('inscripcioneanfi.index')
            ->with('success', 'Inscripcione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Inscripcione::find($id)->delete();

        return Redirect::route('inscripcioneanfi.index')
            ->with('success', 'Inscripcione deleted successfully');
    }
}
