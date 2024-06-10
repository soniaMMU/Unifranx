<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;

class AuthController extends Controller
{
    public function authenticate(Request $request)
{
    $request->validate([
        'corr_p' => 'required',
        'ci_p' => 'required'
    ]);

    $participante = Participante::where('corr_p', $request->corr_p)
        ->where('ci_p', $request->ci_p)
        ->first();

    if ($participante) {
        switch ($participante->roles_id) {
            case 3:
                return redirect()->route('homepart');
                break;
            case 2:
                return redirect()->route('homeanfi');
                break;
            case 1:
                return redirect()->route('home');
                break;
        }
    }

    return back()->withErrors([
        'message' => 'Las credenciales proporcionadas son incorrectas.'
    ]);
}

}
