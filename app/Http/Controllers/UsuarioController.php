<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreUsuario;
use GuzzleHttp\Client;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::orderBY('id', 'desc')->paginate();
        return view('usuarios.index', compact('usuarios'));
    }
    public function create(){
        return view('usuarios.create');
    }

    public function store(StoreUsuario $request){


        $usuario = Usuario::create($request->all());

        return redirect()->route('usuarios.index', $usuario);
    }

    public function show(Usuario $usuario){
        return view('usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario){
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario){

        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'sexo'=> 'required',
        ]);
        
        $usuario->update($request->all());
        return redirect()->route('usuarios.show', $usuario);
    }

    public function destroy(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
