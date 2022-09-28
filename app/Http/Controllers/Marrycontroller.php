<?php

namespace App\Http\Controllers;
use App\Models\Marry;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreUsuario;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class MarryController extends Controller
{
    public function index(){
        $marrys = Marry::with('user','user2')->paginate();
        
        return view('marry.index', compact('marrys'));
    }

    public function create(){
        return view('usuarios.create');
    }
    
    public function marry(){
        $usuarios = Usuario::orderBY('id', 'desc')
            ->where('sexo', 'Masculino')
            ->where('estado', 'Soltero')
            ->paginate();
        $usuariosF = Usuario::orderBY('id', 'desc')
            ->where('sexo', 'Femenino')
            ->where('estado', 'Soltero')
            ->paginate();
        return view('usuarios.marry', compact('usuarios'), compact('usuariosF'));
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
