<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\Auth; // Importez la classe Auth

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validation des données de formulaire
        $credentials = $request->validate([
            'email' => "required|string|email",
            'password' => "required|string|min:8"
        ]);

        // Tentative d'authentification en utilisant les données fournies
        if (Auth::attempt($credentials)) {
            // L'authentification a réussi
            $user = Auth::user(); // Récupérez l'utilisateur authentifié
            $username = $user->name;
            return view('home', compact('username'));
        } else {
            // L'authentification a échoué
            session()->flash('message', 'Les identifiants entré sont incorrects réesayer svp');
            return redirect()->back();
        }
    }
}


// class LoginController extends Controller
// {
//     public function index()
//     {
//         return view('login');
//     }

//     public function login(Request $request)
//     {
//         //verification des erreurs
//         $message = $request->validate([
//             'email' => "required | string ",
//             'password' => "required | min:8"
//         ]);

//         //recuperation des informations de la base de donnée
//         //$user concerne les valeurs deja en bdd
//         $users = User::all();
//         $email = $request->email;
//         $password = $request->password;

//         //verification si les informations en bdd existe dans les champs saisis
//         //Parcourt la liste pour récupérer et verifier les informations saisis concorde avec celles de la liste

//         //Verification si les deux ne sont pas vides
//         if (!empty($email) && !empty($password)) {
//             if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//                 //email valide && le mot de passe deja gere plus haut

//                 foreach ($users as $user) {
//                     if ($user->email == $email && $user->password == $password) {
//                         $username = $user->name;
//                         return view('home', compact('username'));
//                     }
//                 }
//             }
 
//         } else {
//             session()->flash('message', 'Veuillez renseigner tout les champs, merci !');
//             return redirect()->back();
//         }


//     }
// }
?>