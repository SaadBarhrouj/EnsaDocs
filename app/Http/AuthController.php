<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administrateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Gérer la connexion de l'administrateur
    public function login(Request $request)
    {
        $credentials = $request->only('nom', 'password');

        // Validation des données
        $validator = Validator::make($credentials, [
            'nom' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // Vérification des identifiants (mots de passe en clair)
       // Vérification des identifiants
        $admin = administrateur::where('nom', $credentials['nom'])->first();

        if ($admin && $admin->password === $credentials['password']) {
            // Authentification réussie
            Auth::login($admin); // Connecte l'administrateur
            return redirect()->route('dashboard'); // Redirection vers le dashboard
        } else {
            // Authentification échouée
            return back()->withErrors(['nom' => 'Les identifiants sont incorrects']);
        }
    }
    public function logout()
    {
        // Déconnecter l'utilisateur
        Auth::logout();

        // Rediriger vers la page de connexion
        return redirect()->route('home');
    }


}