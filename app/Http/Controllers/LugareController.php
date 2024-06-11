<?php

namespace App\Http\Controllers;

use App\Models\Lugare;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LugareRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Evento;

class LugareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $lugares = Lugare::with('evento')->paginate();//======
        //$anfitriones = Anfitrione::orderBy('created_at', 'desc')->paginate();

        
        //$lugares = Lugare::paginate();
        $lugares = Lugare::with('evento')->orderBy('created_at', 'desc')->paginate();


        return view('lugare.index', compact('lugares'))
            ->with('i', ($request->input('page', 1) - 1) * $lugares->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $lugare = new Lugare();

        $evento = Evento::pluck('nom_ev','id');

        return view('lugare.create', compact('lugare', 'evento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LugareRequest $request): RedirectResponse
    {
        Lugare::create($request->validated());

        return Redirect::route('lugares.index')
            ->with('success', 'Lugar registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $lugare = Lugare::find($id);

        return view('lugare.show', compact('lugare'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $lugare = Lugare::find($id);

        $evento = Evento::pluck('nom_ev','id');

        return view('lugare.edit', compact('lugare', 'evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LugareRequest $request, Lugare $lugare): RedirectResponse
    {
        $lugare->update($request->validated());

        return Redirect::route('lugares.index')
            ->with('success', 'Lugar editado');
    }

    public function destroy($id): RedirectResponse
    {
        Lugare::find($id)->delete();

        return Redirect::route('lugares.index')
            ->with('success', 'Lugar eliminado');
    }
}
