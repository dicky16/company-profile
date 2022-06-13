@extends('hrd.master')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan Pelamar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/hrd') }}">Home</a></li>
                        <li class="breadcrumb-item">Laporan</li>
                        <li class="breadcrumb-item active">Lamaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <form action="{{ url('hrd/laporan/lamaran') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <label for="date-start">Dari tanggal</label>
                        <input type="text" class="form-control" name="date_start" id="date-start" value="<?php echo $date_start ?? ''; ?>" autocomplete="off">
                    </div>
                    <div class="col-lg-3 col-6">
                        <label for="date-end">Sampai tanggal</label>
                        <input type="text" class="form-control" name="date_end" id="date-end" value="<?php echo $date_end ?? ''; ?>" autocomplete="off">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6 col-12 d-grid">
                        <button type="submit" class="btn btn-sm btn-secondary"><b>Submit</b></button>
                    </div>
                </div>
            </form>
            @if (isset($laporanPelamar))
                <div class="card mt-3" id="report-page">
                    <div class="card-body">
                        @if ($laporanPelamar)
                        <div class="text-right">
                            <button type="button" class="btn btn-sm btn-secondary" id="download-pdf">Download PDF</button>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <canvas id="laporan-pelamar"></canvas>
                            </div>
                            <div class="col-lg-8 col-12">
                                <canvas id="laporan-detail"></canvas>
                            </div>
                        </div>
                        @else
                            <h5 class="text-center text-muted">Tidak ada data pelamar pada tanggal tersebut.</h5>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    // date range picker
    const picker = new Litepicker({
        element: document.getElementById('date-start'),
        elementEnd: document.getElementById('date-end'),
        singleMode: false,
        numberOfColumns: 2,
        numberOfMonths: 2,
    });
</script>

@if (isset($laporanPelamar) && $laporanPelamar)
<script>
    // Chart laporan pelamar
    var dataLaporan = [];
    var labelLaporan = [];
    var colorLaporan = [];
    var datasetsDetailLaporan = [];
    var laporanPelamar = {!! json_encode($laporanPelamar) !!};

    for (const key in laporanPelamar) {
        if (Object.hasOwnProperty.call(laporanPelamar, key)) {
            var dynamicColors = function() {
                var r = Math.floor(Math.random() * 255);
                var g = Math.floor(Math.random() * 255);
                var b = Math.floor(Math.random() * 255);
                return "rgb(" + r + "," + g + "," + b + ")";
            };
            let color = dynamicColors();
            const element = laporanPelamar[key];
            labelLaporan.push(key);
            dataLaporan.push(element.semua);
            colorLaporan.push(color);
            datasetsDetailLaporan.push({
                label: key,
                data: [element.pendaftaran, element.diterima, element.ditolak],
                backgroundColor: [color, color, color]
            });
        }
    }

    newChart({
        type: 'doughnut',
        element: 'laporan-pelamar',
        title: 'Laporan Pelamar Berdasarkan Lowongan',
        label: labelLaporan,
        color: colorLaporan,
        datasets: [{
            label: 'Laporan Pelamar Berdasarkan Lowongan',
            data: dataLaporan,
            backgroundColor: colorLaporan,
            hoverOffset: 4
        }],
    });
    
    newChart({
        type: 'bar',
        element: 'laporan-detail',
        title: 'Detail Laporan Pelamar',
        label: ['Pendaftar', 'Tahap Selanjutnya', 'Ditolak'],
        // color: ['rgb(212, 212, 212)', 'rgb(77, 240, 126)', 'rgb(240, 77, 80)'],
        datasets: datasetsDetailLaporan,
    });

    function newChart(params = {}) {
        const data = {
            labels: params.label,
            datasets: params.datasets
        };
        const options = {
            plugins: {
                title: {
                    display: true,
                    text: params.title
                }
            }
        }
        const config = {
            type: params.type,
            data: data,
            options: options
        }
        const chart = new Chart(
            document.getElementById(params.element),
            config
        );
    }

    // Export to PDF
    window.jsPDF = window.jspdf.jsPDF;
    $('#download-pdf').click(function(event) {
        var reportPageHeight = $('#report-page').innerHeight();
        var reportPageWidth = $('#report-page').innerWidth();

        var pdfCanvas = $('<canvas />').attr({
            id: "canvaspdf",
            width: reportPageWidth,
            height: reportPageHeight
        });

        var pdfctx = $(pdfCanvas)[0].getContext('2d');
        var pdfctxX = 0;
        var pdfctxY = 0;
        var buffer = 100;

        $("canvas").each(function(index) {
            var canvasHeight = $(this).innerHeight();
            var canvasWidth = $(this).innerWidth();

            pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
            pdfctxX += canvasWidth + buffer;

            if (index % 2 === 1) {
            pdfctxX = 0;
            pdfctxY += canvasHeight + buffer;
            }
        });

        var pdf = new jsPDF('l', 'pt', [reportPageWidth, reportPageHeight]);
        pdf.addImage($(pdfCanvas)[0], 'PNG', 0, 0);
        pdf.save('laporan-pelamar.pdf');
    });
</script>
@endif
@endpush