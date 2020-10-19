@extends('create')

@section('title', "Adicionar Turno")

@section('link_cancel', route('turnos.index'))

@section('content_header')
    <h1>Adicionar Turno</h1>
@stop

@section('form')
    <form
        @if(!isset($turno))
        method="POST" action="{{route('turnos.index')}}">
        @else
            method="POST" action="{{route('turnos.index')}}/{{$turno->id}}/">
            @method('PUT')
        @endif
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="nome" class="">Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{old('nome', $turno->nome ?? '') }}"  maxlength="45">
                @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="nome" class="">Horário Entrada</label>
                <input type="time" class="form-control @error('horario_entrada') is-invalid  @enderror" name="horario_entrada" id="horario_entrada" value="{{old('nome', $turno->horario_entrada ?? '') }}">
                @error('horario_entrada')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group col-md-3">
                <label for="nome" class="">Horário Saída</label>
                <input type="time" class="form-control @error('horario_saida') is-invalid  @enderror" name="horario_saida" id="horario_saida" value="{{old('nome', $turno->horario_saida ?? '') }}">
                @error('horario_saida')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        @if(!isset($turno))
            <button class="btn btn-primary">Adicionar Turno</button>
        @else
            <button class="btn btn-primary">Editar Turno</button>
        @endif
    </form>
@endsection
