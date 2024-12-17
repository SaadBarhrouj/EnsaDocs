<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Administrateur;

class AuthAdminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = Administrateur::where('nom', $request->nom)->first();

        if ($admin && $admin->password === $request->password) {
            session(['admin_logged_in' => true, 'admin_name' => $admin->nom]);

            return redirect()->route('dashboard')->with('success', 'Bienvenue Administrateur !');
        }

        return back()->withErrors(['error' => 'Nom ou mot de passe incorrect']);
    }

    public function logout()
{
    session()->forget('admin_logged_in');  

    return redirect('/')->with('success', 'Déconnecté avec succès.');  
}

}