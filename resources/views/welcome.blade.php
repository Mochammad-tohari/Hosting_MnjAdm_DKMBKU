@extends('layout.admin')

@section('content')

    <head>
        {{-- memanggil file css box image info --}}
        <link rel="stylesheet" href="Design/box_info_data.css">
        <title>Dashboard Manajemen DKMBKU</title>
    </head>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Menu Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li> --}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <!-- Small boxes (Bidang Nawa) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-bidang_nawa">
                            <div class="inner">
                                <h4><strong>Indeks Data Bidang Nawa</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-bidang_nawa">Jumlah Data Bidang Nawa:
                                        {{ $data_bidang_nawa_kondisi['data_bidang_nawa_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Bidang Nawa Aktif:
                                        {{ $data_bidang_nawa_kondisi['bidang_nawa_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Bidang Nawa Tidak Aktif:
                                        {{ $data_bidang_nawa_kondisi['bidang_nawa_tidak_aktif_count'] }}</p>
                                    <p class="info-box-text-lainya">Bidang Nawa Lainya:
                                        {{ $data_bidang_nawa_kondisi['bidang_nawa_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/bidang_nawa_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- Small boxes (Pengurus Nawa) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-pengurus_nawa">
                            <div class="inner">
                                <h4><strong>Indeks Data Pengurus Nawa</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-pengurus_nawa">Jumlah Data Pengurus Nawa:
                                        {{ $data_pengurus_nawa_kondisi['data_pengurus_nawa_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Pengurus Nawa Aktif:
                                        {{ $data_pengurus_nawa_kondisi['pengurus_nawa_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Pengurus Nawa Tidak Aktif:
                                        {{ $data_pengurus_nawa_kondisi['pengurus_nawa_tidak_aktif_count'] }}</p>
                                    <p class="info-box-text-lainya">Pengurus Nawa Lainya:
                                        {{ $data_pengurus_nawa_kondisi['pengurus_nawa_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/pengurus_nawa_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>



                    {{-- //////////////////////////////////////////////////////////////////// --}}


                    <!-- Small boxes (bidang_pengurus_dkm) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-bidang_pengurus_dkm">
                            <div class="inner">
                                <h4><strong>Indeks Data Bidang Pengurus DKM</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-bidang_pengurus_dkm">Jumlah Data Bid.Pengurus DKM:
                                        {{ $data_bidang_pengurus_dkm_kondisi['data_bidang_pengurus_dkm_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Bid.Pengurus Aktif:
                                        {{ $data_bidang_pengurus_dkm_kondisi['bidang_pengurus_dkm_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Bid.Pengurus Tidak Aktif:
                                        {{ $data_bidang_pengurus_dkm_kondisi['bidang_pengurus_dkm_tidak_aktif_count'] }}
                                    </p>
                                    <p class="info-box-text-lainya">Bid.Pengurus Lainya:
                                        {{ $data_bidang_pengurus_dkm_kondisi['bidang_pengurus_dkm_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/bidang_pengurus_dkm_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- Small boxes (pengurus_dkm) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-pengurus_dkm">
                            <div class="inner">
                                <h4><strong>Indeks Data Pengurus DKM</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-pengurus_dkm">Jumlah Data Pengurus DKM:
                                        {{ $data_pengurus_dkm_kondisi['data_pengurus_dkm_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Pengurus Aktif:
                                        {{ $data_pengurus_dkm_kondisi['pengurus_dkm_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Pengurus Tidak Aktif:
                                        {{ $data_pengurus_dkm_kondisi['pengurus_dkm_tidak_aktif_count'] }}
                                    </p>
                                    <p class="info-box-text-lainya">Pengurus Lainya:
                                        {{ $data_pengurus_dkm_kondisi['pengurus_dkm_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/pengurus_dkm_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    {{-- //////////////////////////////////////////////////////////////////// --}}

                    <!-- Small boxes (Murid Madrasah) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-murid-madrasah">
                            <div class="inner">
                                <h4><strong>Indeks Data Murid Madrasah</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-murid-madrasah">Jumlah Data murid:
                                        {{ $data_murid_kondisi['data_murid_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Murid Aktif:
                                        {{ $data_murid_kondisi['murid_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Murid Tidak Aktif:
                                        {{ $data_murid_kondisi['murid_tidak_aktif_count'] }}</p>
                                    <p class="info-box-text-lainya">Murid Lainya:
                                        {{ $data_murid_kondisi['murid_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/murid_madrasah_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    <!-- Small boxes (Pengajar Madrasah) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-pengajar-madrasah">
                            <div class="inner">
                                <h4><strong>Indeks Data Pengajar Madrasah</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-pengajar-madrasah">Jumlah Data Pengajar:
                                        {{ $data_pengajar_kondisi['data_pengajar_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Pengajar Aktif:
                                        {{ $data_pengajar_kondisi['pengajar_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Pengajar Tidak Aktif:
                                        {{ $data_pengajar_kondisi['pengajar_tidak_aktif_count'] }}</p>
                                    <p class="info-box-text-lainya">Pengajar Lainya:
                                        {{ $data_pengajar_kondisi['pengajar_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/pengajar_madrasah_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    {{-- //////////////////////////////////////////////////////////////////// --}}

                    <!-- Small boxes (Majlistalim) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 3 -->
                        <div class="small-box bg-info info-box-majlistalim">
                            <div class="inner">
                                <h4><strong>Indeks Data Majlistalim</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-majlistalim">Jumlah Data Majlistalim:
                                        {{ $data_majlistalim_kondisi['data_majlistalim_jumlah'] }}</p>
                                    <p class="info-box-text-uji">majlistalim Aktif:
                                        {{ $data_majlistalim_kondisi['majlistalim_aktif_count'] }}</p>
                                    <p class="info-box-text-uji">majlistalim Tidak Aktif:
                                        {{ $data_majlistalim_kondisi['majlistalim_tidak_aktif_count'] }}
                                    </p>
                                    <p class="info-box-text-uji">Majlistalim Lainya:
                                        {{ $data_majlistalim_kondisi['majlistalim_lainya_count'] }}
                                    </p>
                                    {{-- <small>Data</small> --}}
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/majlistalim_data" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    {{-- //////////////////////////////////////////////////////////////////// --}}

                    <!-- Small boxes (Gedung) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-gedung">
                            <div class="inner">
                                <h4><strong>Indeks Data Gedung</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-gedung">Jumlah Data Gedung:
                                        {{ $data_gedung_kondisi['data_gedung_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Gedung Aktif:
                                        {{ $data_gedung_kondisi['gedung_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Gedung Tidak Aktif:
                                        {{ $data_gedung_kondisi['gedung_tidak_aktif_count'] }}</p>
                                    <p class="info-box-text-lainya">Gedung Lainya:
                                        {{ $data_gedung_kondisi['gedung_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/gedung_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    <!-- Small boxes (Ruangan) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-ruangan">
                            <div class="inner">
                                <h4><strong>Indeks Data ruangan</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-ruangan">Jumlah Data Ruangan:
                                        {{ $data_ruangan_kondisi['data_ruangan_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Ruangan Aktif:
                                        {{ $data_ruangan_kondisi['ruangan_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Ruangan Tidak Aktif:
                                        {{ $data_ruangan_kondisi['ruangan_tidak_aktif_count'] }}</p>
                                    <p class="info-box-text-lainya">Ruangan Lainya:
                                        {{ $data_ruangan_kondisi['ruangan_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/ruangan_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>



                    {{-- //////////////////////////////////////////////////////////////////// --}}


                    <!-- Small boxes (bidang_khodim) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-bidang_khodim">
                            <div class="inner">
                                <h4><strong>Indeks Data Bidang Khodim</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-bidang_khodim">Jumlah Data Bid.Khodim:
                                        {{ $data_bidang_khodim_kondisi['data_bidang_khodim_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Bid.Khodim Aktif:
                                        {{ $data_bidang_khodim_kondisi['bidang_khodim_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Bid.Khodim Tidak Aktif:
                                        {{ $data_bidang_khodim_kondisi['bidang_khodim_tidak_aktif_count'] }}</p>
                                    <p class="info-box-text-lainya">Bid.Khodim Lainya:
                                        {{ $data_bidang_khodim_kondisi['bidang_khodim_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/bidang_khodim_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    <!-- Small boxes (khodim_dkm) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 1 -->
                        <div class="small-box bg-info info-box-khodim_dkm">
                            <div class="inner">
                                <h4><strong>Indeks Data Khodim DKM</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-khodim_dkm">Jumlah Data Khodim:
                                        {{ $data_khodim_dkm_kondisi['data_khodim_dkm_jumlah'] }}</p>
                                    <p class="info-box-text-aktif">Khodim Aktif:
                                        {{ $data_khodim_dkm_kondisi['khodim_dkm_aktif_count'] }}</p>
                                    <p class="info-box-text-tidak-aktif">Khodim Tidak Aktif:
                                        {{ $data_khodim_dkm_kondisi['khodim_dkm_tidak_aktif_count'] }}</p>
                                    <p class="info-box-text-lainya">Khodim Lainya:
                                        {{ $data_khodim_dkm_kondisi['khodim_dkm_lainya_count'] }}</p>
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/khodim_dkm_data" class="small-box-footer">Lebih Lanjut <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>



                    {{-- //////////////////////////////////////////////////////////////////// --}}

                    <!-- Small boxes (Inventaris) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 3 -->
                        <div class="small-box bg-info info-box-inventaris">
                            <div class="inner">
                                <h4><strong>Indeks Data Inventaris</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-inventaris">Jumlah Data Inventaris:
                                        {{ $data_inventaris_kondisi['data_inventaris_jumlah'] }}</p>
                                    <p class="info-box-text-uji">Inventaris Aktif:
                                        {{ $data_inventaris_kondisi['inventaris_aktif_count'] }}</p>
                                    <p class="info-box-text-uji">Inventaris Tidak Aktif:
                                        {{ $data_inventaris_kondisi['inventaris_tidak_aktif_count'] }}
                                    </p>
                                    <p class="info-box-text-uji">Inventaris Lainya:
                                        {{ $data_inventaris_kondisi['inventaris_lainya_count'] }}
                                    </p>
                                    {{-- <small>Data</small> --}}
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/inventaris_data" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    {{-- //////////////////////////////////////////////////////////////////// --}}


                    <!-- Small boxes (Uji User) -->
                    <div class="col-lg-6 col-12">
                        <!-- small box 3 -->
                        <div class="small-box bg-info info-box-uji-user">
                            <div class="inner">
                                <h4><strong>Indeks Data Uji User</strong></h4>
                                <span class="info-box-number-1 mb-3">
                                    <p class="info-box-text-uji-user">Jumlah Data Uji User:
                                        {{ $uji_user_kondisi['uji_user_jumlah'] }}</p>
                                    <p class="info-box-text-uji">Aktif:
                                        {{ $uji_user_kondisi['uji_user_aktif_count'] }}</p>
                                    <p class="info-box-text-uji">Tidak Aktif:
                                        {{ $uji_user_kondisi['uji_user_tidak_aktif_count'] }}
                                    </p>
                                    <p class="info-box-text-uji">Lainya:
                                        {{ $uji_user_kondisi['uji_user_lainya_count'] }}
                                    </p>
                                    {{-- <small>Data</small> --}}
                                </span>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/uji_user_data_new" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>






                </div>

                {{-- <div class="row">
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
        <!-- /.col -->
      </div> --}}
                <!-- /.row -->


                {{-- <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Monthly Recap Report</h5>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-wrench"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Separated link</a>
                  </div>
                </div>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Goal Completion</strong>
                  </p>

                  <div class="progress-group">
                    Add Products to Cart
                    <span class="float-right"><b>160</b>/200</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->

                  <div class="progress-group">
                    Complete Purchase
                    <span class="float-right"><b>310</b>/400</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-danger" style="width: 75%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Visit Premium Page</span>
                    <span class="float-right"><b>480</b>/800</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    Send Inquiries
                    <span class="float-right"><b>250</b>/500</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-warning" style="width: 50%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL REVENUE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block">
                    <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div> --}}
                <!-- /.row -->

                <!-- Main row -->
                {{-- <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">US-Visitors Report</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="d-md-flex">
                <div class="p-1 flex-fill" style="overflow: hidden">
                  <!-- Map will be created here -->
                  <div id="world-map-markers" style="height: 325px; overflow: hidden">
                    <div class="map"></div>
                  </div>
                </div>
                <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                  <div class="description-block mb-4">
                    <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                    <h5 class="description-header">8390</h5>
                    <span class="description-text">Visits</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block mb-4">
                    <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                    <h5 class="description-header">30%</h5>
                    <span class="description-text">Referrals</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block">
                    <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                    <h5 class="description-header">70%</h5>
                    <span class="description-text">Organic</span>
                  </div>
                  <!-- /.description-block -->
                </div><!-- /.card-pane-right -->
              </div><!-- /.d-md-flex -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="row">
            <div class="col-md-6">
              <!-- DIRECT CHAT -->
              <div class="card direct-chat direct-chat-warning">
                <div class="card-header">
                  <h3 class="card-title">Direct Chat</h3>

                  <div class="card-tools">
                    <span title="3 New Messages" class="badge badge-warning">3</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                      <i class="fas fa-comments"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="{{ asset('Tema_LTE/dist/img/user1-128x128.jpg') }}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="{{ asset('Tema_LTE/dist/img/user3-128x128.jpg') }}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        You better believe it!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="{{ asset('Tema_LTE/dist/img/user1-128x128.jpg') }}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Working with AdminLTE on a great new app! Wanna join?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="{{ asset('Tema_LTE/dist/img/user3-128x128.jpg') }}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        I would love to.
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                  </div>
                  <!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{ asset('Tema_LTE/dist/img/user1-128x128.jpg') }}" alt="User Avatar">

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date float-right">2/28/2015</small>
                            </span>
                            <span class="contacts-list-msg">How have you been? I was...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{ asset('Tema_LTE/dist/img/user7-128x128.jpg') }}" alt="User Avatar">

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Sarah Doe
                              <small class="contacts-list-date float-right">2/23/2015</small>
                            </span>
                            <span class="contacts-list-msg">I will be waiting for...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{ asset('Tema_LTE/dist/img/user3-128x128.jpg') }}" alt="User Avatar">

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Nadia Jolie
                              <small class="contacts-list-date float-right">2/20/2015</small>
                            </span>
                            <span class="contacts-list-msg">I'll call you back at...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{ asset('Tema_LTE/dist/img/user5-128x128.jpg') }}" alt="User Avatar">

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Nora S. Vans
                              <small class="contacts-list-date float-right">2/10/2015</small>
                            </span>
                            <span class="contacts-list-msg">Where is your new...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{ asset('Tema_LTE/dist/img/user6-128x128.jpg') }}" alt="User Avatar">

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              John K.
                              <small class="contacts-list-date float-right">1/27/2015</small>
                            </span>
                            <span class="contacts-list-msg">Can I take a look at...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{ asset('Tema_LTE/dist/img/user8-128x128.jpg') }}" alt="User Avatar">

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Kenneth M.
                              <small class="contacts-list-date float-right">1/4/2015</small>
                            </span>
                            <span class="contacts-list-msg">Never mind I found...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contacts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-append">
                        <button type="button" class="btn btn-warning">Send</button>
                      </span>
                    </div>
                  </form>
                </div>
                <!-- /.card-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Latest Members</h3>

                  <div class="card-tools">
                    <span class="badge badge-danger">8 New Members</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="{{ asset('Tema_LTE/dist/img/user1-128x128.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date">Today</span>
                    </li>
                    <li>
                      <img src="{{ asset('Tema_LTE/dist/img/user8-128x128.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="{{ asset('Tema_LTE/dist/img/user7-128x128.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="{{ asset('Tema_LTE/dist/img/user6-128x128.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="{{ asset('Tema_LTE/dist/img/user2-160x160.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                      <img src="{{ asset('Tema_LTE/dist/img/user5-128x128.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                      <img src="{{ asset('Tema_LTE/dist/img/user4-128x128.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="{{ asset('Tema_LTE/dist/img/user3-128x128.jpg') }}" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="javascript:">View All Users</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!--/.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Latest Orders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Popularity</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Call of Duty IV</td>
                    <td><span class="badge badge-success">Shipped</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="badge badge-danger">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="badge badge-info">Processing</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="badge badge-danger">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Call of Duty IV</td>
                    <td><span class="badge badge-success">Shipped</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box mb-3 bg-warning">
            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Inventory</span>
              <span class="info-box-number">5,200</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="far fa-heart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Mentions</span>
              <span class="info-box-number">92,050</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-danger">
            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Downloads</span>
              <span class="info-box-number">114,381</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-info">
            <span class="info-box-icon"><i class="far fa-comment"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Direct Messages</span>
              <span class="info-box-number">163,921</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Browser Usage</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="150"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="far fa-circle text-danger"></i> Chrome</li>
                    <li><i class="far fa-circle text-success"></i> IE</li>
                    <li><i class="far fa-circle text-warning"></i> FireFox</li>
                    <li><i class="far fa-circle text-info"></i> Safari</li>
                    <li><i class="far fa-circle text-primary"></i> Opera</li>
                    <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                  </ul>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    United States of America
                    <span class="float-right text-danger">
                      <i class="fas fa-arrow-down text-sm"></i>
                      12%</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    India
                    <span class="float-right text-success">
                      <i class="fas fa-arrow-up text-sm"></i> 4%
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    China
                    <span class="float-right text-warning">
                      <i class="fas fa-arrow-left text-sm"></i> 0%
                    </span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.footer -->
          </div>
          <!-- /.card -->

          <!-- PRODUCT LIST -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Recently Added Products</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('Tema_LTE/dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Samsung TV
                      <span class="badge badge-warning float-right">$1800</span></a>
                    <span class="product-description">
                      Samsung 32" 1080p 60Hz LED Smart HDTV.
                    </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('Tema_LTE/dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Bicycle
                      <span class="badge badge-info float-right">$700</span></a>
                    <span class="product-description">
                      26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                    </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('Tema_LTE/dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">
                      Xbox One <span class="badge badge-danger float-right">
                      $350
                    </span>
                    </a>
                    <span class="product-description">
                      Xbox One Console Bundle with Halo Master Chief Collection.
                    </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('Tema_LTE/dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">PlayStation 4
                      <span class="badge badge-success float-right">$399</span></a>
                    <span class="product-description">
                      PlayStation 4 500GB Console (PS4)
                    </span>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div> --}}
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
