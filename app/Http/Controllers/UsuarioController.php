<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }

    public function login(Request $request)
    {
                // Validar los campos
                $credentials = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);
        
                // Intentar autenticar
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
        
                    // Obtener usuario autenticado
                    $user = Auth::user();
        
                    // Redireccionar según el rol
                    if ($user->rol === 'admin') {
                        return view('index');
                    } elseif ($user->rol === 'empleado') {
                        return view('indexUsuario');
                    } else {
                        return view('login.login');
                    }
                }
        
                // Si falla el login
                return back()->withErrors([
                    'email' => 'Las credenciales no coinciden con nuestros registros.',
                ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
