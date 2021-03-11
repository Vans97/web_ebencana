<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>eBencana</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand" style="background-color:#BFBFBF">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" -->
           <!-- style="opacity: .8"> -->
      <span class="brand-text font-weight-light" >eBencana</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="/profile" class="d-block">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;{{ Auth::user()->namaP }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Urus Sistem
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="./index.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
               &nbsp;&nbsp;&nbsp;<p>Kumpulan Pengguna</p>
                </a>
              </li> -->
              @can('a_magroup_view')
               <li class="nav-item">
                <a href="/role/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                  &nbsp;&nbsp;&nbsp;<p>Kumpulan Pengguna</p>
                </a>
              </li>
              @endcan
              @can('a_mauser_view')
              <li class="nav-item">
                <a href="/register" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                  &nbsp;&nbsp;&nbsp;<p>Akaun Pengguna</p>
                </a>
              </li>
              @endcan
              <li class="nav-item">
                <a href="/akses/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                  &nbsp;&nbsp;&nbsp;<p>Akses Sekuriti</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Maklumat Am
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/jajahan/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Jajahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daerah/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Daerah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/agensi/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Agensi/Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pkob/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus PKOB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/aset/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Aset & Kelengkapan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kelengkapanagensi/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kelengkapan Agensi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/helikopter/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Tapak Helikopter</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/tenagapkob/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Tenaga Kerja PKOB</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Agihan Barangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/agihan/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Jenis Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/barang/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kemasukkan/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Stok Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Pengesahan Data Stok</p>
                </a>
              </li><li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Agihan Barangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Pengesahan Agihan Barangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Agihan Barangan</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Kemalangan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kemalangan/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Jenis Kemalangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kemalangankemasukkan/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Kes Kemalangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kemalanganpengesahan/show" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Pengesahan Kes Kemalangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kemalanganlaporan" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Kemalangan</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Lalu Lintas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Jalan Utama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Lokasi Jalan Tutup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Data Jalan Tutup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Pengesahan Data Stok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Jalan Tutup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemaskini Data Jalan Tutup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Pengesahan Kemaskini</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Kemaskini</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Aras Air
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Stesen Aras Air</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Sungai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Data Aras Air</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Pengesahan Data Aras Air</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Aras Air</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pemindahan Mangsa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kampung/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Kampung</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pusatpemindahan/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Pusat Pemindahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Tarikh Buka Pusat Pemindahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Pengesahan Tarikh Pusat Dibuka</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Data Pemindahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Pemindahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Teliti Pemindahan</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Taburan Hujan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Stesen Sukatan Hujan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Taburan Hujan Kemasukkan Taburan Hujan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Taburan Hujan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Pengesahan Taburan Hujan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Taburan Hujan</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Gerakan Menyelamat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/menyelamat/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Gerakan Menyelamat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/menyelamatpengesahan/show" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Pengesahan Gerakan Menyelamat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/menyelamatlaporan" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Gerakan Menyelamat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Kesihatan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/klinik/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Urus Klinik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/fasiliti/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Fasiliti Terlibat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/bilpasukan/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Bilangan Pasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penyakitdiperiksa/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukan Penyakit Diperiksa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                PBSM
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/peralatanpbsm/create" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Peralatan Dihantar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kemasukkan Bilangan Petugas</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pendaftaran
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Senarai Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Laporan Senarai Pendaftaran Mangsa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Bantuan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Penghantaran Bantuan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Aset Sukarelawan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kelengkapan Sokongan Kesihatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kelengkapan Sokongan Logistik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kelengkapan Sokongan Sumber Tenaga Sukarelawan</p>
                </a>
              </li> <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                &nbsp;&nbsp;<i class="far fa-circle fa-xs"></i>
                &nbsp;&nbsp;&nbsp;<p>Kelengkapan Sokongan Operasi Menyelamat</p>
                </a>
              </li> -->
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <div class="content-wrapper">


      @include('inc.message')
      @yield('content')

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    Portal eBencana Semua Hakcipta Terpelihara. © 2020 oleh PEJABAT PEMBANGUNAN NEGERI KELANTAN
    <div class="float-right d-none d-sm-inline-block">
      <b>Version 2020 </b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}} "></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>
