<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ asset ('images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ asset ('images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="active">
                        <a href="{{ route('home') }}"> <i class="menu-icon fa fa-home"></i><b>DASHBOARD</b></a>
                    </li>
                    @role('admin')
                    <h3 class="menu-title">Struktur Organisasi</h3><!-- /.menu-title -->
                    
                    <li class="active">
                        <a href="{{ route('jabatan.index') }}"> <i class="menu-icon fa fa-users"></i><b>JABATAN</b></a>
                    </li>

                    <li class="active">
                        <a href="{{ route('divisi.index') }}"> <i class="menu-icon fa fa-sitemap"></i><b>DIVISI</b></a>
                    </li>

                    <li class="active">
                        <a href="{{ route('departemen.index') }}"> <i class="menu-icon fa fa-building-o"></i><b>DEPARTEMEN</b></a>
                    </li>

                    @endrole

                    <h3 class="menu-title">Karyawan</h3><!-- /.menu-title -->

                    <li class="active">
                        <a href="{{ route('karyawan.index') }}"> <i class="menu-icon fa fa-user"></i><b>KARYAWAN</b></a>
                    </li>

                    <h3 class="menu-title">Administrasi</h3><!-- /.menu-title -->

                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-calendar-o"></i>Cuti</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-book"></i><a href="{{ route('cuti.index') }}">Lihat Data Cuti</a></li>
                            <li><i class="menu-icon fa fa-edit"></i><a href="charts-flot.html">Kelola Data Cuti</a></li>
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-peity.html">Grafik Cuti Karyawan</a></li>
                        </ul>
                    </li> -->

                    <li class="active">
                        <a href="{{ route('gaji.index') }}"> <i class="menu-icon fa fa-money"></i><b>GAJI</b></a>
                    </li>

                    <h3 class="menu-title">Akun</h3>

                    <li class="active">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> <i class="menu-icon fa fa-cog"></i><b>{{ __('LOGOUT') }}</b></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->