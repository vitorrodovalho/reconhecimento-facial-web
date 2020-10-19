@extends('index')

@section('title', "Departamentos")

@section('content_header')
    <h1>Departamentos</h1>
@stop

@section('link', route('departamentos.index'))

@section('table')
    <table id="tbl_data" class="table table-bordered table-striped hover">
        <thead>
        <tr>
            <th width="40">Id</th>
            <th>Nome</th>
            <th width="105">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($departamentos as $departamento)
            <tr>
                <td>{{ $departamento->id }}</td>
                <td>{{ $departamento->nome }}</td>
                <td>
                    <a href="{{route('departamentos.index')}}/{{$departamento->id}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{route('departamentos.index')}}/{{$departamento->id}}/edit/" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" onclick="deleteConfirmation({{$departamento->id}}, '{{$departamento->nome}}')"><i class="fa fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
