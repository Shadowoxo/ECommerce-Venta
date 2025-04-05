<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

  
    public function destroy(string $id)
    {
        //
    }


   
    public function quitarAdmin(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->is_admin = false;
        $user->save();
        return redirect('/profile');
    }
    public function añadirAdmin(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->is_admin = true;
        $user->save();
        return redirect('/profile');
    }
    
    public function switchAdmin(Request $request)
    {
      
        $authenticatedUser = Auth::user();

        
        $user = User::where('email', $request->email)->first();

        if ($user) {
           
            if ($user->id !== $authenticatedUser->id) {
              
                $user->is_admin = !$user->is_admin;

                
                $user->save();

                return redirect('/profile')->with('success', 'Cambios guardados exitosamente');
            } else {
                return redirect('/profile')->with('error', 'No puedes quitarte a ti mismo el rol de administrador');
            }
        } else {
           
            return redirect('/profile')->with('error', 'Usuario no encontrado');
        }
    }

}
