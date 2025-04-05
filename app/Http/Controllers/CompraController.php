<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    
    public function index()
    {
        
    }

   
    public function create()
    {
       
    }

   
    public function store(Request $request)
    {
      
    }

   
    public function show()
    {
        
        if (Auth::check()) {
            
            $id_usuario = Auth::id();
            $compras = Compra::where('id_usuario', $id_usuario)->get();
           
            $cursos = array();
            foreach ($compras as $compra) {
                $cursos[] = Curso::where('id', $compra->id_curso)->get();
            }
            return view('dashboard') -> with('cursos', $cursos);
            
        } else {
            return redirect()->route('login');
        }
    }

   
    public function edit(string $id)
    {
       
    }

   
    public function update(Request $request, string $id)
    {
        
    }

   
    public function destroy(string $id)
    {
       
    }
}
