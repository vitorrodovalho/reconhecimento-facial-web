@extends('index')

@section('title', "Usuários")

@section('content_header')
    <h1>Movimentações</h1>
@stop

@section('link', route('usuarios.index'))

@section('table')
    <table id="tbl_data" class="table table-bordered table-striped hover">
        <thead>
        <tr>
            <th width="40">Id</th>
            <th>Usuário</th>
            <th>Data</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movimentacoes as $movimentacao)
            <tr>
                <td>{{ $movimentacao->id }}</td>
                <td>{{ $movimentacao->cod_usuario }}</td>
                <td>{{ $movimentacao->data }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

<style>
    .card-header, .btn-adicionar {
        display: none!important;
    }
</style>
