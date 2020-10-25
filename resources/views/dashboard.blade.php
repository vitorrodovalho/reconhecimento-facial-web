@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.Chartjs', false)

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xl-4 col-md-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $qtd_acessos_autorizados }}</h3>
                    <p>Acessos Autorizados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Movimentações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-xl-4 col-md-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $qtd_acessos_nao_autorizados }}</h3>
                    <p>Acessos Não Autorizados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Movimentações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <!--
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Movimentações Mensal
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="chartjs-mes" class="chartjs" width="770" height="385"
                                style="display: block; width: 770px; height: 385px;"></canvas>
                    </div>
                </div>
            </div>
        </div> !-->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Movimentações
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                </div>
                <!-- /.card-header -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

<style>
    .table td, .table th {
        padding: .48rem !important;
    }

    table.dataTable thead .sorting:before, table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:before, table.dataTable thead .sorting_desc_disabled:after {
        bottom: 0.55em !important;
    }

    .dt-buttons {
        display: none!important;
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
        "searching": false,
        "order": [ 0, "desc" ],
        //"ordering": true,
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
</script>
@stop
