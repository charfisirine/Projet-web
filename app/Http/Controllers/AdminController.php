<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.register');
    }
        // Logique d'inscription administrateur
        public function register(Request $request)
        {
            // Validation des données du formulaire
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:admins',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Création d'un nouvel administrateur
            $admin = Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            // Autres actions si nécessaires (envoi de courriel, etc.)
            // ...

            return redirect('/admin/dashboard');
        }



    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentification réussie
            return redirect('/admin/dashboard');
        } else {
            // Authentification échouée
            return back()->withErrors(['email' => 'Identifiants incorrects']);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function dashboard()
    {
        // Logique du tableau de bord administrateur
        return view('admin.acceuil');
    }
}

