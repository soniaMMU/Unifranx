<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ParticipanteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Role;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $participantes = Participante::with('role')->paginate();
        //$participantes = Participante::paginate();
        $participantes = Participante::with('role')
                                     ->orderBy('created_at', 'desc')
                                     ->paginate();

        return view('participante.index', compact('participantes'))
            ->with('i', ($request->input('page', 1) - 1) * $participantes->perPage());
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $participante = new Participante();
        $roles = Role::pluck('rol', 'id');
        return view('participante.create', compact('participante', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParticipanteRequest $request): RedirectResponse
    {
        Participante::create($request->validated());

        return Redirect::route('participantes.index')
            ->with('success', 'Participante registrado.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $roles = Role::pluck('rol', 'id');
        $participante = Participante::find($id);

        return view('participante.show', compact('participante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $participante = Participante::find($id);
        $roles = Role::pluck('rol', 'id');
        return view('participante.edit', compact('participante', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParticipanteRequest $request, Participante $participante): RedirectResponse
    {
        $participante->update($request->validated());

        return Redirect::route('participantes.index')
            ->with('success', 'Participante editado');
    }

    public function destroy($id): RedirectResponse
    {
        Participante::find($id)->delete();

        return Redirect::route('participantes.index')
            ->with('success', 'Participante eliminado');
    }
}
