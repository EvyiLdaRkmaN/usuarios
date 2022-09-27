@extends('layouts.plantilla')

@section('title', 'usuarios')

@section('content')
    <style>

        table{
            border: 10px;
           /* height: 300px;
            width: 300px;*/
            align-content: center;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }
        h1{
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-top: 2%
        }
    </style>
    <center>
    <h1>Lista de los Clientes</h1>
    <br>
    <a href="{{route('usuarios.create')}}" class="btn btn-primary">Agregar</a>
    <br><br>
        
        <div class="container">
            <div class="col-md-5" >
                <div class="table-responsive"></div>
            <table class="table table-bordered">
                <tr class="table-success">
                    <td>
                        Nombre
                    </td>
                    <td>
                        Edad
                    </td>
                    <td>
                        Sexo
                    </td>
                    <td>EstadoCivil</td>
                    <td>Ususario</td>
                    <td>Contraseña</td>
                </tr>
                
                @foreach ($usuarios as $usuario)
                <tr class="table-success">
                    <td class="table table-success"><a href="{{route('usuarios.show', $usuario->id)}}">{{$usuario->nombre}}</a></td>
                    <td class="table table-success">{{$usuario->edad}}</td>
                    <td class="table table-success">{{$usuario->sexo}}</td>
                    <td class="table table-success">{{$usuario->estado}}</td>
                    <td class="table table-success">{{$usuario->user}}</td>
                    <td class="table table-success">{{$usuario->pass}}</td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
        
    </center>
    {{$usuarios->links()}}
@endsection

