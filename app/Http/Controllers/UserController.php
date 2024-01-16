<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Méthode pour afficher le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('user.register');
    }

    // Méthode pour gérer l'inscription
    public function register(Request $request)
    {
        // Logique d'inscription ici
    }

    // Méthode pour afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('user.login');
    }

    // Méthode pour gérer la connexion
    public function login(Request $request)
    {
        // Logique de connexion ici
    }

    // Méthode pour gérer la déconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); // Redirige où vous le souhaitez après la déconnexion
    }
}
