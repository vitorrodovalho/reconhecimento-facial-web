@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="btn-group">
                <a href="@yield('link')/create" class="btn btn-primary">Adicionar</a></div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (!empty($message))
                @push('js')
                    <script>
                        Swal.fire({
                            title: "Sucesso!",
                            @if($message == 'success')
                                text: "Registro incluído com sucesso.",
                            @elseif($message == 'success_edit')
                                text: "Registro editado com sucesso.",
                            @endif
                            type: "success",
                            showConfirmButton: false,
                            timer: 2000
                        });
                    </script>
                @endpush
            @endif
            @foreach ($errors->all() as $error)
                @push('js')
                    <script>
                        Swal.fire({
                            title: "Erro!",
                            text: "Erro ao inserir registro. ({{$error}})",
                            type: "error",
                            showConfirmButton: false,
                            timer: 2000
                        });
                    </script>
                @endpush
            @endforeach
            @yield('table')
        </div>
        <!-- /.card-header -->
    </div>
    <!-- /.card -->
@stop

<style>
    .table td, .table th {
        padding: .48rem !important;
    }

    table.dataTable thead .sorting:before, table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:before, table.dataTable thead .sorting_desc_disabled:after {
        bottom: 0.55em !important;
    }

    .swal2-container .swal2-styled {
        padding: .25rem .5rem;
    }

    .swal2-container .swal2-icon {
        margin: 0em auto 0.8em;
    }

    .swal2-styled.swal2-confirm {
        background-color: #007bff !important;
        border-color: #007bff !important;
    }

    .dt-buttons {
        display: none!important;
    }

    form {
        margin-block-end: 0px !important;
    }
</style>

@section('js')
    <script>
        $('#tbl_data').DataTable({
            dom: 'Bfrtip',
            buttons: false,
            "paging": true,
            "pageLength": 20,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "deferRender": false,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar: ",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                }
            },
            "drawCallback": function () {
                $('.dataTables_paginate > .pagination').addClass('pagination-sm');
            },
        });

        function deleteConfirmation(id, name) {
            Swal.fire({
                title: "Excluir",
                text: "Tem certeza que deseja excluir '" + name + "' ?",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Excluir",
                cancelButtonText: "Cancelar",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: 'DELETE',
                        url: "@yield('link')" + '/' + id,
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function (results) {
                            if (results.success === true) {
                                Swal.fire({
                                    title: "Sucesso",
                                    text: "Registro excluído com sucesso!",
                                    type: "success",
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                                setTimeout(function () {
                                    location.reload();
                                }, 2000);
                            } else {
                                Swal.fire({
                                    title: "Erro",
                                    text: "Erro ao excluir registro",
                                    type: "error",
                                });
                            }
                        }
                    });
                } else {
                    e.dismiss;
                }
            }, function (dismiss) {
                return false;
            })
        }
    </script>
@stop

