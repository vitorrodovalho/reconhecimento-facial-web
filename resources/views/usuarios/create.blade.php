@extends('create')

@section('title', "Adicionar Usuário")

@section('link_cancel', route('usuarios.index'))

@section('content_header')
    <h1>Adicionar Usuário</h1>
@stop

@section('form')
    <form
        @if(!isset($usuario))
        method="POST" action="{{route('usuarios.index')}}">
        @else
            method="POST" action="{{route('usuarios.index')}}/{{$usuario->id}}/">
            @method('PUT')
        @endif
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="nome" class="">Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{old('nome', $usuario->codigo ?? '') }}"
                       placeholder="0000000000" maxlength="40">
                @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="codigo" class="">Código</label>
                <input type="number" class="form-control @error('codigo') is-invalid  @enderror" name="codigo" id="codigo" value="{{old('codigo', $usuario->nome ?? '') }}" maxlength="11">
                @error('codigo')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="cargo" class="">Cargo</label>
                <input type="text" class="form-control @error('codigo') is-invalid  @enderror" name="cargo" id="cargo" value="{{old('cargo', $usuario->cargo ?? '') }}"  maxlength="100">
                @error('cargo')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="departamento" class="">Departamento</label>
                <input type="text" class="form-control @error('codigo') is-invalid  @enderror" name="departamento" id="departamento" value="{{old('codigo', $usuario->departamento ?? '') }}" maxlength="100">
                @error('departamento')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

        </div>
        @if(!isset($usuario))
            <button class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Adicionar Usuário</button>
        @else
            <button class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Editar Usuário</button>
        @endif
    </form>
@endsection
