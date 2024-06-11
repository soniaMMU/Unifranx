<?php

namespace App\Http\Controllers;

use App\Models\Recomendacione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RecomendacioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Participante;

class RecomendacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $recomendaciones = Recomendacione::with('participante')->paginate();//======
        $recomendaciones = Recomendacione::orderBy('created_at', 'desc')
        ->paginate();


        return view('recomendacione.index', compact('recomendaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $recomendaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $recomendacione = new Recomendacione();

        $participante = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);

        return view('recomendacione.create', compact('recomendacione', 'participante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecomendacioneRequest $request): RedirectResponse
    {
        Recomendacione::create($request->validated());

        return Redirect::route('recomendaciones.index')
            ->with('success', 'Recomendacion registrada.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $recomendacione = Recomendacione::find($id);

        return view('recomendacione.show', compact('recomendacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $recomendacione = Recomendacione::find($id);
        $participante = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);

        return view('recomendacione.edit', compact('recomendacione','participante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecomendacioneRequest $request, Recomendacione $recomendacione): RedirectResponse
    {
        $recomendacione->update($request->validated());

        return Redirect::route('recomendaciones.index')
            ->with('success', 'Recomendacion editada');
    }

    public function destroy($id): RedirectResponse
    {
        Recomendacione::find($id)->delete();

        return Redirect::route('recomendaciones.index')
            ->with('success', 'Recomendacion eliminada');
    }
}
