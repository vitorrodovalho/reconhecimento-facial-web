@extends('index')

@section('title', "Usuários")

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('link', route('usuarios.index'))

@section('table')
    <table id="tbl_data" class="table table-bordered table-striped hover">
        <thead>
        <tr>
            <th width="40">Id</th>
            <th>Nome</th>
            <th>Código</th>
            <th>Cargo</th>
            <th>Departamento</th>
            <th width="105">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->codigo }}</td>
                <td>{{ $usuario->cargo }}</td>
                <td>{{ $usuario->departamento }}</td>
                <td>
                    <a href="{{route('usuarios.index')}}/{{$usuario->id}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{route('usuarios.index')}}/{{$usuario->id}}/edit/" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" onclick="deleteConfirmation({{$usuario->id}}, '{{$usuario->nome}}')"><i class="fa fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
