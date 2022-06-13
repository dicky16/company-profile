@extends('hrd.master')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid pb-5">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$totalPelamar}}</h3>

                            <p>Total Pelamar</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-user-md"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$totalLowongan}}</h3>

                            <p>Total Lowongan Kerja</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$totalVisitor}}</h3>

                            <p>Jumlah Viewers Career</p>
                        </div>
                        <div class="icon">
                        <i class="far fa-eye"></i>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>0987</h3>

                            <p>Total Lolos Interview</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-copy"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>098</h3>

                            <p>Total Semua</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <canvas id="chart-pelamar-umur"></canvas>
                </div>
                <div class="col-lg-4 col-12">
                    <canvas id="chart-pelamar-pendidikan"></canvas>
                </div>
                <div class="col-lg-4 col-12">
                    <canvas id="chart-pelamar-pengalaman"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
<script>
    // Chart pelamar (umur)
    const dataUmur = {
        labels: [
            '18 - 25',
            '26 - 30',
            '31 - 40',
            '40+'
        ],
        datasets: [{
            label: 'Pelamar Berdasarkan Umur',
            data: {{ json_encode($totalPelamarUmur) }},
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(52, 235, 103)',
            ],
            hoverOffset: 4
        }]
    };
    const optionsUmur = {
        plugins: {
            title: {
                display: true,
                text: 'Pelamar Berdasarkan Umur'
            }
        }
    }
    const configUmur = {
        type: 'doughnut',
        data: dataUmur,
        options: optionsUmur
    }
    const chartUmur = new Chart(
        document.getElementById('chart-pelamar-umur'),
        configUmur
    );
    
    // Chart pelamar (pengalaman)
    const dataPengalaman = {
        labels: [
            '0 Tahun',
            '1 Tahun',
            '2 Tahun',
            '3 Tahun',
            '3+ Tahun',
        ],
        datasets: [{
            label: 'Pelamar Berdasarkan Pengalaman',
            data: {{ json_encode($totalPelamarPengalaman) }},
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(52, 235, 103)',
            'rgb(193, 56, 235)',
            ],
            hoverOffset: 4
        }]
    };
    const optionsPengalaman = {
        plugins: {
            title: {
                display: true,
                text: 'Pelamar Berdasarkan Pengalaman'
            }
        }
    }
    const configPengalaman = {
        type: 'doughnut',
        data: dataPengalaman,
        options: optionsPengalaman
    }
    const chartPengalaman = new Chart(
        document.getElementById('chart-pelamar-pengalaman'),
        configPengalaman
    );
    
    // Chart pelamar (pendidikan)
    const dataPendidikan = {
        labels: [
            'SMP',
            'SMA',
            'D1',
            'D2',
            'D3',
            'S1',
        ],
        datasets: [{
            label: 'Pelamar Berdasarkan Pendidikan',
            data: {{ json_encode($totalPelamarPendidikan) }},
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(52, 235, 103)',
            'rgb(193, 56, 235)',
            'rgb(43, 43, 43)',
            ],
            hoverOffset: 4
        }]
    };
    const optionsPendidikan = {
        plugins: {
            title: {
                display: true,
                text: 'Pelamar Berdasarkan Pendidikan'
            }
        }
    }
    const configPendidikan = {
        type: 'doughnut',
        data: dataPendidikan,
        options: optionsPendidikan
    }
    const chartPendidikan = new Chart(
        document.getElementById('chart-pelamar-pendidikan'),
        configPendidikan
    );
</script>
@endsection
