<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Penggajian WEB</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset ('vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors/jqvmap/dist/jqvmap.min.css') }}">


    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>

<body onload="setInterval('displayServerTime()', 1000);">


    <!-- Left Panel -->

    @include('partials.left-panel')

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        
    @include('partials.header')

        <!-- Header-->
            <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 mb-4">
                        <div class="card-group">
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-4">
                                    <div class="h1 text-light text-right mb-4">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">
                                    <span id="clock">
                                    <?php echo "" . date("H:i:s");?>
                                    </span>
                                    </div>
                                    <small class="text-light text-uppercase font-weight-bold">Waktu</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-3">
                                    <div class="h1 text-light text-right mb-4">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">
                                        <span class="date"><?php echo "" . date("d/m/Y");?></span>
                                    </div>
                                    <small class="text-light text-uppercase font-weight-bold">Tanggal</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-user text-light"></i>
                                    </div>

                                    <div class="h4 mb-0 text-light">
                                        <span class="count">{{$jumlah_karyawan}}</span>
                                    </div>
                                    <small class="text-uppercase font-weight-bold text-light">Karyawan</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-2">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-building-o text-light"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">
                                        <span class="count">{{ $jumlah_departemen }}</span>
                                    </div>
                                    <small class="text-uppercase font-weight-bold text-light">Departemen</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-5">
                                    <div class="h1 text-right mb-4">
                                        <i class="fa fa-sitemap text-light"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">
                                        <span class="count">{{ $jumlah_divisi }}</span>
                                    </div>
                                    <small class="text-light text-uppercase font-weight-bold">Divisi</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-1">
                                    <div class="h1 text-right text-light mb-4">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">
                                        <span class="count">{{ $jumlah_jabatan }}</span>
                                    </div>
                                    <small class="text-uppercase font-weight-bold text-light">Jabatan</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                        </div>

                    </div>
 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Karyawan</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Induk</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <!-- <th>Jenis Kelamin</th> -->
                                            <th>Nomor Telepon</th>
                                            <th>Jabatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor = 1; ?>
                                        @php $no = 1; @endphp
                                        @foreach($karyawans as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td><p>{{ $data->nomor_induk }}</p></td>
                                            <td>{{ $data->nama}}</td>
                                            <td>{{ $data->tempat_lahir}}</td>
                                            <td>{{ $data->tanggal_lahir}}</td>
                                            <!-- <td>{{ $data->jenis_kelamin}}</td> -->
                                            <td>{{ $data->nomor_telepon}}</td>
                                            <td>{{ $data->Jabatan->nama_jabatan}}</td>
                                            
                                      </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        
        </div>
        <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ asset ('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset ('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset ('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('assets/js/main.js') }}"></script>


    <script src="{{ asset ('vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset ('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset ('assets/js/widgets.js') }}"></script>
    <script src="{{ asset ('vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset ('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset ('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
