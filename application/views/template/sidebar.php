<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <a class="satu" href="<?php echo base_url('laporan_polisi/lihat') ?>">
                    <button class="btn btn-success">
                        <i class="ace-icon fa fa-briefcase white"></i>
                    </button>
                </a>

                <a href="<?php echo base_url('piket/lihat') ?>">
                    <button class="btn btn-info">
                        <i class="ace-icon fa fa-coffee white"></i>
                    </button>
                </a>

                <a href="<?php echo base_url('ruang/lihat') ?>">
                    <button class="btn btn-warning">
                        <i class="ace-icon fa fa-laptop"></i>
                    </button>
                </a>

                <a href="<?php echo base_url('laporan_polisi/lihat') ?>">
                    <button class="btn btn-danger">
                        <i class="ace-icon fa fa-pencil-square-o"></i>
                    </button>
                </a>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="">
                <a href="<?php echo base_url('dashboard') ?>">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-briefcase"></i>
                    <span class="menu-text"> Laporan Polisi </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?php echo base_url('laporan_polisi/tambah') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Tambah Data
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?php echo base_url('laporan_polisi/lihat') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Lihat Data
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-coffee"></i>
                    <span class="menu-text"> Piket Sat Reskrim </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?php echo base_url('piket/tambah') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Tambah Data
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?php echo base_url('piket/lihat') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Lihat Data
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-laptop"></i>
                    <span class="menu-text"> Ruang Sium </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="<?php echo base_url('ruang/tambah') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Tambah Data
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?php echo base_url('ruang/lihat') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Lihat Data
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#">
                    <i class="menu-icon fa 	fa-pencil-square-o"></i>
                    <span class="menu-text"> Prediksi </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="widgets.html">
                    <i class="menu-icon fa fa-power-off"></i>
                    <span class="menu-text"> Log-Out </span>
                </a>

                <b class="arrow"></b>
            </li>

        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="active"><?php echo $title; ?></li>
                </ul><!-- /.breadcrumb -->
            </div>

            <div class="page-content">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="widget-box">
                            <div class="widget-header">

                            </div>

                            <div class="widget-body">
                                <div class="widget-main bg-primary">
                                    <h2 class="text-center">
                                        PREDIKSI TINGKAT KERAWANAN PENCURIAN KENDARAAN BERMOTOR DI <br>
                                        DI KEPOLISIAN (POLRES) KABUPATEN JAYAPURA <br>
                                        MENGGUNAKAN METODE ANALISIS REGRESI BERBASIS WEB. <br>
                                        <h5 class="text-center">
                                            STUDI KASUS : KANTOR POLRES JAYAPURA, KABUPATEN JAYAPURA
                                        </h5>
                                    </h2>
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div><!-- /.span -->
                </div>