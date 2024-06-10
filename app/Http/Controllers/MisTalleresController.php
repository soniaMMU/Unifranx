<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcione;

class MisTalleresController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcione::where('participantes_id', auth()->id())->get();
        return view('talleres.mis_talleres', compact('inscripciones'));
    }
}
