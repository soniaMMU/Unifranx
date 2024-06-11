<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EventoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EventoAnfiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $eventos = Evento::orderBy('created_at', 'desc')
        ->paginate();

        return view('eventoanfi.index', compact('eventos'))
            ->with('i', ($request->input('page', 1) - 1) * $eventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $evento = new Evento();

        return view('eventoanfi.create', compact('evento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventoRequest $request): RedirectResponse
    {
        Evento::create($request->validated());

        return Redirect::route('eventoanfi.index')
            ->with('success', 'Evento registrado.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $evento = Evento::find($id);

        return view('eventoanfi.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $evento = Evento::find($id);

        return view('eventoanfi.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventoRequest $request, Evento $evento): RedirectResponse
    {
        $evento->update($request->validated());

        return Redirect::route('eventoanfi.index')
            ->with('success', 'Evento editado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Evento::find($id)->delete();

        return Redirect::route('eventoanfi.index')
            ->with('success', 'Evento eliminado');
    }
}
