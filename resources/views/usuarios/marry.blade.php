@extends('layouts.plantilla')

@section('title', 'usuarios marry')

@section('content')

<style>

    select{
        display: block;
        width: 200px;
        align-content: center;
    }
</style>
<center>
<br>
<h1>Casar usuarios</h1><br><br>
<div class="container">
    <div class="container">
        <form action="{{route('usuarios.marry.create')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <select class="form-select" name="id_userM" aria-label="Default select example">
                        <option value="" selected>Selecciona un hombre</option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                        @endforeach
                    </select>
                    @error('id_userM')
                        <small>* Seleccione un usuario</small>
                    @enderror
                </div>
                <div class="col">
                    <select class="form-select" name="id_userF" aria-label="Default select example">
                        <option value="" selected>Selecciona una mujer</option>
                        @foreach ($usuariosF as $usuarioF)
                            <option value="{{$usuarioF->id}}">{{$usuarioF->nombre}}</option>
                        @endforeach
                    </select>
                    @error('id_userF')
                        <small>* Seleccione un usuario</small>
                    @enderror
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Casar</button>
                </div>
            </div>
        </form>
    </div>
    
</div>

    

    

</center>
{{$usuarios->links()}}
@endsection

