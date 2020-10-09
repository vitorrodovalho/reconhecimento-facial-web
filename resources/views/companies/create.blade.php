@extends('create')

@section('title', __('titles.add') . " " . __('titles.company'))

@section('link_cancel', route('companies.index'))

@section('content_header')
    <h1>@lang('titles.add') @lang('titles.company')</h1>
@stop

@section('form')
    <form method="POST" action="{{route('companies.index')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="name" class="">@lang('fields.name_company')</label>
                <input type="text" class="form-control text-uppercase @error('name') is-invalid  @enderror" name="name"
                       id="name" value="{{old('name')}}" maxlength="45">
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="nickname" class="">@lang('fields.nickname_company')</label>
                <input type="text" class="form-control @error('nickname') is-invalid  @enderror" name="nickname"
                       id="nickname" value="{{old('nickname')}}" maxlength="45">
                @error('nickname')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="cnpj" class="">CNPJ</label>
                <input type="text" class="form-control cnpj @error('cnpj') is-invalid  @enderror" name="cnpj" id="cnpj"
                       value="{{old('cnpj')}}" max="20">
                @error('cnpj')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="municipal_registration" class="">@lang('fields.municipal_registration')</label>
                <input type="text" class="form-control @error('municipal_registration') is-invalid  @enderror"
                       name="municipal_registration" id="municipal_registration"
                       value="{{old('municipal_registration')}}" max="50">
                @error('municipal_registration')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="state_registration" class="">@lang('fields.state_registration')</label>
                <input type="text" class="form-control @error('state_registration') is-invalid  @enderror"
                       name="state_registration" id="state_registration" value="{{old('state_registration')}}"
                       maxlength="50">
                @error('state_registration')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="address_postal_code" class="">@lang('fields.postal_code')</label>
                <input type="text" class="form-control cep @error('address_cep') is-invalid  @enderror"
                       name="address_postal_code" id="address_postal_code" value="{{old('address_postal_code')}}"
                       max="9">
                @error('address_postal_code')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="address" class="">@lang('fields.address')</label>
                <input type="text" class="form-control @error('address') is-invalid  @enderror" name="address"
                       id="address" value="{{old('address')}}" maxlength="100">
                @error('address')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-1">
                <label for="address_number" class="">@lang('fields.number')</label>
                <input type="text" class="form-control @error('address_number') is-invalid  @enderror"
                       name="address_number" id="address_number" value="{{old('address_number')}}" maxlength="11">
                @error('address_number')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="address_neighborhood" class="">@lang('fields.neighborhood')</label>
                <input type="text" class="form-control @error('address_neighborhood') is-invalid  @enderror"
                       name="address_neighborhood" id="address_neighborhood" value="{{old('address_neighborhood')}}"
                       maxlength="100">
                @error('address_neighborhood')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="address_complement" class="">@lang('fields.complement')</label>
                <input type="text" class="form-control @error('address_complement') is-invalid  @enderror"
                       name="address_complement" id="address_complement" value="{{old('address_complement')}}"
                       maxlength="200">
                @error('address_complement')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="address_city" class="">@lang('fields.city')</label>
                <input type="text" class="form-control @error('address_city') is-invalid  @enderror" name="address_city"
                       id="address_city" value="{{old('address_city')}}" maxlength="200">
                @error('address_city')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="address_country" class="">@lang('fields.country')</label>
                <input type="text" class="form-control @error('address_country') is-invalid  @enderror"
                       name="address_country" id="address_country" value="{{old('address_country')}}" maxlength="100">
                @error('address_country')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="language" class="">@lang('fields.language')</label>
                <select id="language" class="form-control @error('language') is-invalid  @enderror" name="language">
                    <option selected value="">@lang('fields.choice') ...</option>
                    <option value="PT-BR">PT-BR</option>
                    <option value="EN">EN-US</option>
                </select>
                @error('language')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="currency" class="">@lang('fields.currency')</label>
                <select id="currency" class="form-control @error('currency') is-invalid  @enderror" name="currency">
                    <option selected value="">@lang('fields.choice') ...</option>
                    <option value="BRL">BRL (R$)</option>
                    <option value="USD">USD (U$)</option>
                    <option value="EUR">EUR (€)</option>
                </select>
                @error('currency')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <button class="btn btn-sm btn-primary"><i class="fas fa-save"></i> @lang('buttons.save')</button>
    </form>
@endsection
