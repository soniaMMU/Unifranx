<?php

namespace App\Http\Controllers;

use App\Models\Sesione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SesioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Evento;

class SesionAnfiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $sesiones = Sesione::with('evento')->paginate();

        return view('sesioneanfi.index', compact('sesiones'))
            ->with('i', ($request->input('page', 1) - 1) * $sesiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sesione = new Sesione();
        $eventos = Evento::pluck('nom_ev','id'); // Aquí se muestra el nombre del evento
    
        return view('sesioneanfi.create', compact('sesione', 'eventos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SesioneRequest $request): RedirectResponse
    {
        Sesione::create($request->validated());

        return Redirect::route('sesioneanfi.index')
            ->with('success', 'Sesione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $sesione = Sesione::find($id);

        return view('sesioneanfi.show', compact('sesione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $sesione = Sesione::find($id);
        $eventos = Evento::pluck('nom_ev','id'); // Aquí se muestra el nombre del evento
        return view('sesioneanfi.edit', compact('sesione', 'eventos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SesioneRequest $request, Sesione $sesione): RedirectResponse
    {
        $sesione->update($request->validated());

        return Redirect::route('sesioneanfi.index')
            ->with('success', 'Sesione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Sesione::find($id)->delete();

        return Redirect::route('sesioneanfi.index')
            ->with('success', 'Sesione deleted successfully');
    }
}
