<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import Hash facade
use App\Models\Administrateur;

class AuthAdminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find the admin by 'nom'
        $admin = Administrateur::where('nom', $request->nom)->first();

        // Verify the password using Hash::check
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Store admin session
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
