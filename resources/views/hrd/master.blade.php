<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT ARMAS LOGISTICS SERVICE | Dashboard Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/admin/dist/css/adminlte.min.css') }}">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/fullcalendar/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url('assets/admin/images/armas_globe.svg') }}"
                            class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline">{{session('nama')}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-header bg-primary">
                            <img src="{{ url('assets/admin/images/armas_globe.svg') }}"
                                class="img-circle elevation-2" alt="User Image">
                            <p>
                                {{session('nama')}}
                            </p>
                        </li>
                        <li class="user-footer">
                            <a href="{{url('hrd/logout')}}" class="btn btn-default btn-flat btn-block">Sign out</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{url('hrd')}}" class="brand-link">
                <img src="{{ url('assets/admin/images/armas_globe.svg') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PT ARMAS</span>
            </a>

            <div class="sidebar">
                <!-- <div class="form-inline mt-3">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        @if(session('role') == 'hrd' || session('role') == 'direktur')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sun"></i>
                                <span class="dropdown-toggle" data-bs-toggle="collapse" href="#master"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Master
                                </span>
                            </a>
                            <ul class="collapse list-group" style="margin-left: 20px;" id="master">
                                <a href="{{route('departemen.index')}}" class="list-group-item list-group-item-action">Departemen</a>
                                <a href="{{route('sub-departemen.index')}}" class="list-group-item list-group-item-action">Sub Departemen</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('lowongan.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Lowongan
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-calendar"></i>
                                <span class="dropdown-toggle" data-bs-toggle="collapse" href="#hrd"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Rekrutmen
                                </span>
                            </a>
                            <ul class="collapse list-group" style="margin-left: 20px;" id="hrd">
                                <a href="{{route('lowongan.index')}}" class="list-group-item list-group-item-action">Lowongan Kerja</a>
                                <a href="{{route('skill.index')}}" class="list-group-item list-group-item-action">Skill</a>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{url('hrd/soal')}}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Soal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('hrd/lamaran')}}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Lamaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('hrd/logout')}}" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Sign Out
                                </p>
                            </a>
                        </li>
                        @elseif(session('role') == 'admin')
                        <li class="nav-item">
                            <a href="{{url('admin')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/profil')}}" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <span class="dropdown-toggle" data-bs-toggle="collapse" href="#beranda"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Beranda
                                </span>
                            </a>
                            <ul class="collapse list-group" style="margin-left: 20px;" id="beranda">
                                <a href="{{route('slider.index')}}" class="list-group-item list-group-item-action">Slider</a>
                                <a href="{{route('pelanggan.index')}}" class="list-group-item list-group-item-action">Pelanggan Kami</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <span class="dropdown-toggle" data-bs-toggle="collapse" href="#about"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    About
                                </span>
                            </a>
                            <ul class="collapse list-group" style="margin-left: 20px;" id="about">
                                <a href="{{route('jumlah-truck.index')}}" class="list-group-item list-group-item-action">Jumlah Truk</a>
                                <a href="{{route('jenis-truck.index')}}" class="list-group-item list-group-item-action">Jenis Truk</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('penghargaan.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-gift"></i>
                                <p>
                                    Penghargaan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="nav-icon fas fa-drafting-compass"></i>
                                <span class="dropdown-toggle" data-bs-toggle="collapse" href="#service"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Service
                                </span>
                            </a>
                            <ul class="collapse list-group" style="margin-left: 20px;" id="service">
                                <a href="{{route('ritase.index')}}" class="list-group-item list-group-item-action">Ritase</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('berita.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Berita
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('gallery.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/pesan')}}" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    Pesan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('admin/user')}}" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Pengaturan User
                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    Menu HRD
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="nav-icon fas fa-sun"></i>
                                <span class="dropdown-toggle" data-bs-toggle="collapse" href="#master"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Master
                                </span>
                            </a>
                            <ul class="collapse list-group" style="margin-left: 20px;" id="master">
                                <a href="{{route('departemen.index')}}" class="list-group-item list-group-item-action">Departemen</a>
                                <a href="{{route('sub-departemen.index')}}" class="list-group-item list-group-item-action">Sub Departemen</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('lowongan.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Lowongan
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-calendar"></i>
                                <span class="dropdown-toggle" data-bs-toggle="collapse" href="#hrd"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Rekrutmen
                                </span>
                            </a>
                            <ul class="collapse list-group" style="margin-left: 20px;" id="hrd">
                                <a href="{{route('lowongan.index')}}" class="list-group-item list-group-item-action">Lowongan Kerja</a>
                                <a href="{{route('skill.index')}}" class="list-group-item list-group-item-action">Skill</a>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{url('hrd/soal')}}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Soal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('hrd/lamaran')}}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Lamaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('hrd/logout')}}" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Sign Out
                                </p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>

        @yield('content')

        <footer class="main-footer">
            <strong>Developed with 💙 by <a href="#">PT ARMAS LOGISTICS SERVICE</a></strong>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ url('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('assets/admin/dist/js/adminlte.min.js') }}"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="{{ url('assets/admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('assets/admin/plugins/fullcalendar/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
    <script>
        $(function () {
            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;

            var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            var calendar = new Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                themeSystem: 'bootstrap',
                //Random default events
                events: [{
                        title: 'Oprec Panitia PKKMB',
                        start: new Date(2021, 5, 6),
                        end: new Date(2021, 5, 17),
                        backgroundColor: '#0000ff',
                        borderColor: '#0000ff'
                    },
                    {
                        title: 'Rapat SC, CO, WACO',
                        start: new Date(2021, 5, 20),
                        backgroundColor: '#00b050',
                        borderColor: '#00b050',
                        allDay: true
                    },
                    {
                        title: 'Panitia ke Malang',
                        start: new Date(2021, 6, 5),
                        backgroundColor: '#aeaaaa',
                        borderColor: '#aeaaaa',
                        allDay: true
                    },
                    {
                        title: 'Rapat Besar',
                        start: new Date(2021, 6, 10),
                        backgroundColor: '#ffff00',
                        borderColor: '#ffff00',
                        allDay: true
                    },
                    {
                        title: 'Pembagian Cluster',
                        start: new Date(2021, 6, 18),
                        end: new Date(2021, 6, 20),
                        backgroundColor: '#7030a0',
                        borderColor: '#7030a0'
                    },
                    {
                        title: 'Pra Yuwaraja',
                        start: new Date(2021, 6, 21),
                        backgroundColor: '#2bddc8',
                        borderColor: '#2bddc8',
                        allDay: true
                    },
                    {
                        title: 'Rapat Besar',
                        start: new Date(2021, 6, 24),
                        backgroundColor: '#ffff00',
                        borderColor: '#ffff00',
                        allDay: true
                    },
                    {
                        title: 'Simulasi',
                        start: new Date(2021, 6, 25),
                        end: new Date(2021, 6, 27),
                        backgroundColor: '#ffcc99',
                        borderColor: '#ffcc99'
                    },
                    {
                        title: 'Pra Yuwaraja',
                        start: new Date(2021, 6, 28),
                        backgroundColor: '#2bddc8',
                        borderColor: '#2bddc8',
                        allDay: true
                    },
                    {
                        title: 'Simulasi',
                        start: new Date(2021, 6, 29),
                        backgroundColor: '#ffcc99',
                        borderColor: '#ffcc99',
                        allDay: true
                    },
                    {
                        title: 'Raja Brawijaya',
                        start: new Date(2021, 6, 31),
                        backgroundColor: '#ff0000',
                        borderColor: '#ff0000',
                        allDay: true
                    },
                    {
                        title: 'PKKMB',
                        start: new Date(2021, 7, 2),
                        end: new Date(2021, 7, 4),
                        backgroundColor: '#5b9bd5',
                        borderColor: '#5b9bd5'
                    },
                    {
                        title: 'Pendaftaran Krimala',
                        start: new Date(2021, 7, 8),
                        end: new Date(2021, 7, 12),
                        backgroundColor: '#ffc000',
                        borderColor: '#ffc000'
                    },
                    {
                        title: 'Krima',
                        start: new Date(2021, 7, 21),
                        backgroundColor: '#00b0f0',
                        borderColor: '#00b0f0',
                        allDay: true
                    },
                    {
                        title: 'Krima',
                        start: new Date(2021, 7, 28),
                        backgroundColor: '#00b0f0',
                        borderColor: '#00b0f0',
                        allDay: true
                    },
                    {
                        title: 'Krima',
                        start: new Date(2021, 8, 4),
                        backgroundColor: '#00b0f0',
                        borderColor: '#00b0f0',
                        allDay: true
                    },
                    {
                        title: 'Krima',
                        start: new Date(2021, 8, 11),
                        backgroundColor: '#00b0f0',
                        borderColor: '#00b0f0',
                        allDay: true
                    },
                    {
                        title: 'Rapat Besar',
                        start: new Date(2021, 8, 18),
                        backgroundColor: '#ffff00',
                        borderColor: '#ffff00',
                        allDay: true
                    },
                    {
                        title: 'OH dan Kejuaraan',
                        start: new Date(2021, 8, 25),
                        backgroundColor: '#c65911',
                        borderColor: '#c65911',
                        allDay: true
                    }
                ]
            });

            calendar.render();
        })
    </script>
</body>

</html>