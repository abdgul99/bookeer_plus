@extends('layouts.dashboard_layout')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="grid grid-cols-2 gap-4 items-center h-full">
    <div style="width: 80%; margin: auto;">
        <h3 class="text-left w-full">Booker User:
            <span class="me-3">23423</span>
            <span class="float-right">Daily</span>
        </h3>
        <canvas id="areaChart"></canvas>
    </div>
    <div style="width: 80%; margin: auto;">
        <h3 class="text-left w-full">Publisher User:
            <span class="me-3">6456</span>
            <span class="float-right">Daily</span>
        </h3>
        <canvas id="areaChart2"></canvas>
    </div>
    <div style="width: 80%; margin: auto;">
        <h3 class="text-left w-full">MUA
        </h3>
        <canvas id="areaChart3"></canvas>
    </div>
    <div style="width: 80%; margin: auto;">
        <h3 class="text-left w-full">DAU
        </h3>
        <canvas id="areaChart4"></canvas>
    </div>

</div>
<script>
    var ctx = document.getElementById('areaChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['chart1']),
                backgroundColor: 'rgba(75, 192, 192, 0)',
                borderColor: 'rgba(241, 90, 34, 1)',
                borderWidth: 1,
                fill: true,
                //show label value on point
                pointLabelFontSize: 20
                
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctx = document.getElementById('areaChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['chart2']),
                // backgroundColor: transparent,
                backgroundColor: 'rgba(75, 192, 192, 0)',
                borderColor: 'rgba(241, 90, 34, 1)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctx = document.getElementById('areaChart3').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['chart3']),
                // backgroundColor: transparent,
                backgroundColor: 'rgba(75, 192, 192, 0)',
                borderColor: 'rgba(241, 90, 34, 1)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctx = document.getElementById('areaChart4').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['chart4']),
                // backgroundColor: transparent,
                backgroundColor: 'rgba(75, 192, 192, 0)',
                borderColor: 'rgba(241, 90, 34, 1)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
