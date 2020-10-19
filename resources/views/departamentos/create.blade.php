@extends('create')

@section('title', "Adicionar Departamento")

@section('link_cancel', route('departamentos.index'))

@section('content_header')
    <h1>Adicionar Departamento</h1>
@stop

@section('form')
    <form
        @if(!isset($departamento))
        method="POST" action="{{route('departamentos.index')}}">
        @else
            method="POST" action="{{route('departamentos.index')}}/{{$departamento->id}}/">
            @method('PUT')
        @endif
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="nome" class="">Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{old('nome', $departamento->nome ?? '') }}"  maxlength="45">
                @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        @if(!isset($departamento))
            <button class="btn btn-primary">Adicionar Departamento</button>
        @else
            <button class="btn btn-primary">Editar Departamento</button>
        @endif
    </form>
@endsection
