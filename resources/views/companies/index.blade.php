@extends('index')

@section('title', __('titles.companies'))

@section('content_header')
    <h1>@lang('titles.companies')</h1>
@stop

@section('link', route('companies.index'))

@section('table')
    <table id="tbl_data" class="table table-bordered table-striped hover">
        <thead>
        <tr>
            <th width="40">Id</th>
            <th>@lang('fields.name_company')</th>
            <th>@lang('fields.nickname_company')</th>
            <th>CNPJ</th>
            <th>@lang('fields.currency')</th>
            <th>@lang('fields.language')</th>
            <th width="34"></th>
            <th width="30"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
        <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->nickname }}</td>
            <td>{{ $company->cnpj }}</td>
            <td>{{ $company->currency }}</td>
            <td>{{ $company->language }}</td>
            <td><button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button></td>
            <td><button class="btn btn-sm btn-danger" onclick="deleteConfirmation({{$company->id}}, '{{$company->name}}')"><i class="fa fa-trash-alt"></i></button></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop
