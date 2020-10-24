@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.Chartjs', true)

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53</h3>
                    <p>Acessos Autorizados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Movimentações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
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
        </div>
        <div class="col-6">
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
</style>

@section('js')
<script>
    new Chart(document.getElementById("chartjs-mes"), {
        "type": "bar",
        "data": {
            "labels": ["January", "February", "March", "April", "May", "June", "July"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [65, 59, 80, 81, 56, 55, 40],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                "borderWidth": 1
            }]
        },
        "options": {"scales": {"yAxes": [{"ticks": {"beginAtZero": true}}]}}
    });
</script>
@stop
