@extends('layouts.public.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    <style>
        .pagination div.dataTables_paginate {
            color: #198754;
        }
        .pagination .page-item.active .page-link { 
            background-color: #198754;  
            border: 1px solid #198754;
            color: white;
        }
        div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
            background-color: #198754;
            border: 1px solid #198754;
            color: white;
        }
        .pagination .page-item.active .page-link:hover {
            background-color: #198754;
            border: 1px solid #198754;
            color: white;
        }

        .paginate_button.page-item a {
            color: #198754;
        }
    </style>
@endsection
@section('content')
    <main id="main">
        <section id="location" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Statistik Harga TBS</h2>
                    <p>Informasi Daftar Statistik & Informasi Harga Tandan Buah Segar (TBS) Persawitan</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var data = @json($tbs);
        var dataLabel = [];
        var dataContent = [];
        var dataTbs3= [];
        var dataTbs4= [];
        var dataTbs5 = [];
        var dataTbs6 = [];
        var dataTbs7 = [];
        var dataTbs8 = [];
        var dataTbs9 = [];
        var dataTbs10 = [];
        var dataTbs21 = [];
        var dataTbs22 = [];
        var dataTbs23 = [];
        var dataTbs24 = [];
        var dataTbs25 = [];
        for(var i=0; i<data.length; i++){
            var year = new Date(data[i]['created_at']);
            dataLabel.push(data[i]['bulan']+' '+year.getFullYear());
            dataTbs3.push(data[i]['tbs_3']);
            dataTbs4.push(data[i]['tbs_4']);
            dataTbs5.push(data[i]['tbs_5']);
            dataTbs6.push(data[i]['tbs_6']);
            dataTbs7.push(data[i]['tbs_7']);
            dataTbs8.push(data[i]['tbs_8']);
            dataTbs9.push(data[i]['tbs_9']);
            dataTbs10.push(data[i]['tbs_10']);
            dataTbs21.push(data[i]['tbs_21']);
            dataTbs22.push(data[i]['tbs_22']);
            dataTbs23.push(data[i]['tbs_23']);
            dataTbs24.push(data[i]['tbs_24']);
            dataTbs25.push(data[i]['tbs_25']);
        }
        var dataset = [
            {    
                label: 'TBS 3',
                data: dataTbs3,
                borderWidth: 1
            },
            {
                label: 'TBS 4',
                data: dataTbs4,
                borderWidth: 1
            },
            {
                label: 'TBS 5',
                data: dataTbs5,
                borderWidth: 1
            },
            {
                label: 'TBS 6',
                data: dataTbs6,
                borderWidth: 1
            },
            {
                label: 'TBS 7',
                data: dataTbs7,
                borderWidth: 1
            },
            {
                label: 'TBS 8',
                data: dataTbs8,
                borderWidth: 1
            },
            {
                label: 'TBS 9',
                data: dataTbs9,
                borderWidth: 1
            },
            {
                label: 'TBS 10',
                data: dataTbs10,
                borderWidth: 1
            },
            {
                label: 'TBS 21',
                data: dataTbs21,
                borderWidth: 1
            },
            {
                label: 'TBS 22',
                data: dataTbs22,
                borderWidth: 1
            },
            {
                label: 'TBS 23',
                data: dataTbs23,
                borderWidth: 1
            },
            {
                label: 'TBS 24',
                data: dataTbs24,
                borderWidth: 1
            },
            {
                label: 'TBS 25',
                data: dataTbs25,
                borderWidth: 1
            },
        ];
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
        type: 'line',
        data: {
            labels: dataLabel,
            datasets: dataset,
        },
        options: {
            title: {
                display: true,
                text: 'Polveri',
                fontSize: 18
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
        });
    </script>
@endsection