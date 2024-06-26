<?php

namespace App\Http\Controllers;

use App\Models\Recomendacione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RecomendacioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Participante; 

class RecomendacionAnfiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $recomendaciones = Recomendacione::with('participante')->paginate();

        return view('recomendacioneanfi.index', compact('recomendaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $recomendaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $recomendacione = new Recomendacione();
        $participantes = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);

    return view('recomendacioneanfi.create', compact('recomendacione', 'participantes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecomendacioneRequest $request): RedirectResponse
    {
        Recomendacione::create($request->validated());

        return Redirect::route('recomendacioneanfi.index')
            ->with('success', 'Recomendacione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $recomendacione = Recomendacione::find($id);

        return view('recomendacioneanfi.show', compact('recomendacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $recomendacione = Recomendacione::find($id);
        $participantes = Participante::all(['id', 'nom_p', 'app_p', 'apm_p']);

        return view('recomendacioneanfi.edit', compact('recomendacione', 'participantes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecomendacioneRequest $request, Recomendacione $recomendacione): RedirectResponse
    {
        $recomendacione->update($request->validated());

        return Redirect::route('recomendacioneanfi.index')
            ->with('success', 'Recomendacione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Recomendacione::find($id)->delete();

        return Redirect::route('recomendacioneanfi.index')
            ->with('success', 'Recomendacione deleted successfully');
    }
}
