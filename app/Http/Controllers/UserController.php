<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    $users = User::where('name', '<>', "admin")->get();
    return view('users', ['users' => $users]);
}

public function create()
{
    return view('create');
}

public function destroy(User $user)
{
    // Vérifier si une base de données existe avec le nom de l'utilisateur
    $databaseName = $user->name;
    DB::statement("DROP DATABASE IF EXISTS $databaseName");
    // Supprimer l'utilisateur s'il existe
    if ($user) {
        $user->delete();
    }
     
        
    // Rediriger vers la vue users.index avec un message de confirmation
    return redirect()->route('users')->with('success', 'Utilisateur supprimé avec succès !');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|unique:users|max:255',
        'email' => 'required|email|unique:users|max:255',
        'password' => 'required|string|min:8|max:255',
    ]);

    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->save();

    return redirect()->route('users')->with('success', 'Utilisateur ajouté avec succès !');
}

public function edit($id)
{
    $user = User::findOrFail($id);
    return view('edit', compact('user'));
}

public function update(Request $request, $id)
{
    $this->validate($request, [
        'email' => 'required|email|unique:users,email,'.$id,
        'password' => 'nullable|min:6|confirmed',
    ]);

    $user = User::where('id', $id)->first();

    if(!$user){
        return back()->withInput()->with('error', 'Utilisateur non trouvé');
    }

    
    $user->email = $request->email;

    if (!empty($request->password)) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('users')
        ->with('success', 'Utilisateur mis à jour avec succès');
}
}
