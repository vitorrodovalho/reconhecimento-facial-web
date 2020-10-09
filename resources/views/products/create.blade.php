@extends('create')

@section('title', __('titles.add') . " " . __('titles.product'))

@section('link_cancel', route('products.index'))

@section('content_header')
    <h1>@lang('titles.add') @lang('titles.product')</h1>
@stop

@section('form')
    <form
        @if(!isset($product))
        method="POST" action="{{route('products.index')}}">
        @else
            method="POST" action="{{route('products.index')}}/{{$product->id}}/">
            @method('PUT')
        @endif
        @csrf
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="code" class="">@lang('fields.code')</label>
                <input type="number" class="form-control @error('code') is-invalid  @enderror" name="code" id="code" value="{{old('code', $product->code ?? '') }}"
                       placeholder="0000000" data-max="7">
                @error('code')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="description" class="">@lang('fields.description')</label>
                <input type="text" class="form-control @error('description') is-invalid  @enderror" name="description" id="description"
                       value="{{old('description', $product->description ?? '')}}" maxlength="150">
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="plant" class="">@lang('fields.plant')</label>
                <input type="text" class="form-control @error('plant') is-invalid  @enderror" name="plant" id="plant" value="{{old('plant', $product->plant ?? '')}}"
                       maxlength="20">
                @error('plant')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2 col-6">
                <label for="unity_code" class="">@lang('fields.unity_code')</label>
                <input type="text" class="form-control @error('unity_code') is-invalid  @enderror" name="unity_code" id="unity_code"
                       value="{{old('unity_code', $product->unity_code ?? '')}}" placeholder="UN" maxlength="3">
                @error('unity_code')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2 col-6">
                <label for="volume" class="">@lang('fields.volume')</label>
                <input type="text" class="form-control number @error('volume') is-invalid  @enderror" name="volume" id="volume"
                       value="{{old('volume', $product->volume ?? '')}}" placeholder="0.00">
                @error('volume')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2 col-6">
                <label for="un_volume" class="">@lang('fields.un_volume')</label>
                <input type="text" class="form-control @error('un_volume') is-invalid  @enderror" name="un_volume" id="un_volume"
                       value="{{old('un_volume', $product->un_volume ?? '')}}" maxlength="3">
                @error('un_volume')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2 col-6">
                <label for="weight" class="">@lang('fields.weight')</label>
                <input type="text" class="form-control number @error('weight') is-invalid  @enderror" name="weight" id="weight"
                       value="{{old('weight', $product->weight ?? '')}}" placeholder="0.00">
                @error('weight')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2 col-6">
                <label for="un_weight" class="">@lang('fields.un_weight')</label>
                <input type="text" class="form-control @error('un_weight') is-invalid  @enderror" name="un_weight" id="un_weight"
                       value="{{old('un_weight', $product->un_weight ?? '')}}" maxlength="3">
                @error('un_weight')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="group_id">@lang('fields.group')</label>
                <select class="form-control @error('group_id') is-invalid  @enderror" name="group_id" id="group_id">
                    <option selected value="">@lang('fields.choice') ...</option>
                    @foreach ($productGroups as $id => $name)
                        <option{{ old('group_id') == $id ? "selected" : "" }} value="{{ $id }}">{{$name}}</option>
                    @endforeach
                </select>
                @error('group_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="price" class="">@lang('fields.price')</label>
                <input type="text" class="form-control number @error('price') is-invalid  @enderror" name="price" id="price"
                       value="{{old('price', $product->price ?? '')}}" placeholder="0.00">
                @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="group_id">@lang('fields.group')</label>
                <select class="form-control @error('group_id') is-invalid  @enderror" name="group_id" id="group_id">
                    <option selected value="">@lang('fields.choice') ...</option>
                    @foreach ($productGroups as $id => $name)
                        <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
                @error('group_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="ean_13" class="">@lang('fields.ean_13')</label>
                <input type="text" class="form-control @error('ean_13') is-invalid  @enderror" name="ean_13" id="ean_13" value="{{old('ean_13', $product->ean_13 ?? '' )}}">
                @error('ean_13')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="qty_washes" class="">@lang('fields.qty_washes')</label>
                <input type="text" class="form-control int @error('qty_washes') is-invalid  @enderror" name="qty_washes" id="qty_washes"
                       value="{{old('qty_washes',$product->qty_washes ?? '')}}" placeholder="00">
                @error('qty_washes')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="max_washes" class="">@lang('fields.max_washes')</label>
                <input type="text" class="form-control int @error('max_washes') is-invalid  @enderror" name="max_washes" id="max_washes"
                       value="{{old('max_washes',$product->max_washes ?? '')}}" placeholder="00">
                @error('max_washes')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="date_last_washes" class="">@lang('fields.date_last_washes')</label>
                <input type="date" class="form-control @error('date_last_washes') is-invalid  @enderror" name="date_last_washes" id="date_last_washes"
                       value="{{old('date_last_washes')}}">
                @error('date_last_washes')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="max_days_no_mov" class="">@lang('fields.max_days_no_mov')</label>
                <input type="text" class="form-control int @error('max_days_no_mov') is-invalid  @enderror" name="max_days_no_mov" id="max_days_no_mov"
                       value="{{old('max_days_no_mov', $product->max_days_no_mov ?? '')}}" placeholder="00">
                @error('max_days_no_mov')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        @if(!isset($product))
            <button class="btn btn-sm btn-primary"><i class="fas fa-save"></i> @lang('buttons.add') @lang('titles.product')</button>
        @else
            <button class="btn btn-sm btn-primary"><i class="fas fa-save"></i> @lang('buttons.edit') @lang('titles.product')</button>
        @endif
    </form>
@endsection
