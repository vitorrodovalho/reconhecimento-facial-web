@extends('index')

@section('title', "Turnos")

@section('content_header')
    <h1>Turnos</h1>
@stop

@section('link', route('turnos.index'))

@section('table')
    <table id="tbl_data" class="table table-bordered table-striped hover">
        <thead>
        <tr>
            <th width="40">Id</th>
            <th>Nome</th>
            <th>Entrada</th>
            <th>Saída</th>
            <th width="105">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($turnos as $turno)
            <tr>
                <td>{{ $turno->id }}</td>
                <td>{{ $turno->nome }}</td>
                <td>{{ $turno->horario_entrada }}</td>
                <td>{{ $turno->horario_saida }}</td>
                <td>
                    <a href="{{route('turnos.index')}}/{{$turno->id}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{route('turnos.index')}}/{{$turno->id}}/edit/" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" onclick="deleteConfirmation({{$turno->id}}, '{{$turno->nome}}')"><i class="fa fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
