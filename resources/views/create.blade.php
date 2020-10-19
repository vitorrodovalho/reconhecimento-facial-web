@include('sweetalert::alert')
@extends('adminlte::page')
@section('plugins.JQueryMask', true)

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="@yield('link_cancel')" style="color:white">Cancelar</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @yield('form')
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

@push('js')
    <script>
        $(document).ready(function ($) {
            $('.date').mask('11/11/1111');
            $('.time').mask('00:00:00');
            $('.cep').mask('99999-999');
            $('.phone').mask('9999-9999');
            $('.phone_with_ddd').mask('(99) 9999-9999');
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.ip_address').mask('099.099.099.099');
            $('.number').mask("0000000.00", {reverse: true});
            $('.int').mask("9999999");
        });
    </script>
@endpush
