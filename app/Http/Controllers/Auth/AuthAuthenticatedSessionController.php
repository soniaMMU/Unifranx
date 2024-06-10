<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'corr_p' => 'required|string|email',
            'ci_p' => 'required|string',
        ]);

        if (Auth::attempt($request->only('corr_p', 'ci_p'))) {
            $user = Auth::user();
            $role = $user->role->rol ?? '';

            switch ($role) {
                case 'administrador':
                    return redirect()->intended('/dashboard/admin');
                case 'anfitrion':
                    return redirect()->intended('/dashboard/host');
                case 'participante':
                    return redirect()->intended('/dashboard/participant');
                default:
                    return redirect()->intended('/dashboard/default');
            }
        }

        return back()->withErrors(['message' => 'Credenciales incorrectas']);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
