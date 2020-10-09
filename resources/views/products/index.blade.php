@extends('index')

@section('title', __('titles.products'))

@section('content_header')
    <h1>@lang('titles.products')</h1>
@stop

@section('link', route('products.index'))

@section('table')
    <table id="tbl_data" class="table table-bordered table-striped hover">
        <thead>
        <tr>
            <th width="40">Id</th>
            <th>@lang('fields.code')</th>
            <th>@lang('fields.description')</th>
            <th>@lang('fields.ean_13')</th>
            <th>@lang('fields.price')</th>
            <th>@lang('fields.currency')</th>
            <th width="105">@lang('actions.actions')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->ean_13 }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->currency }}</td>
                <td>
                    <a href="{{route('products.index')}}/{{$product->id}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{route('products.index')}}/{{$product->id}}/edit/" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" onclick="deleteConfirmation({{$product->id}}, '{{$product->description}}')"><i class="fa fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
