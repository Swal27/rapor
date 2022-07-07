<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Rapor</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/logo-mini.png" />
    <style>
        .coloumn {
    display: flex !important;
    justify-content: space-between !important;
    }
    </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="{{url('admin/dashboard')}}"><img src="../../images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{url('admin/dashboard')}}"><img src="../../images/logo-mini.png" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">

        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-4">
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">{{$siswa->nama}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{url('logout')}}">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">User Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('user/profil')}}">User Profil</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/raporview')}}/{{$siswa->nis_siswa}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Report</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                            <h2>Welcome back, {{$siswa->nama}}</h2>
                            <p class="mb-md-0">Your System Report</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary">Data Rapor Siswa</h5>
            </div>
            <div class="card-body">
                <div class="coloumn">
                    <div class="row_1">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Nama Sekolah</h5>
                            </div>
                            <div class="col-md-5">
                                <h5>:SMAN 24 Kabupaten Tangerang</h5>
                            </div>
                            <div class="col-md-4">
                                <h5>Alamat</h5>
                            </div>
                            <div class="col-md-5">
                                <h5>:Perumahan Pondok Permai JL.Arwana</h5>
                            </div>
                            <div class="col-md-4">
                                <h5>Nama Peserta Didik</h5>
                            </div>
                            <div class="col-md-5">
                                <h5>:{{$siswa->nama}}</h5>
                            </div>
                            <div class="col-md-4">
                                <h5>NIS</h5>
                            </div>
                            <div class="col-md-5">
                                <h5>:{{$siswa->nis_siswa}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row_2">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Kelas</h5>
                            </div>
                            <div class="col-md-5">
                                <h5>:10 MIPA 3</h5>
                            </div>
                            <div class="col-md-4">
                                <h5>Semester</h5>
                            </div>
                            <div class="col-md-5">
                                <h5>:1(Satu)</h5>
                            </div>
                            <div class="col-md-4">
                                <h5>Tahun</h5>
                            </div>
                            <div class="col-md-5">
                                <h5>2017/2018</h5>
                            </div>
                            <div class="col-md-4">
                                <h5></h5>
                            </div>
                            <div class="col-md-5">
                                <h5></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="table-responsive">
                <table id="recent-purchases-listing" class="table">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                        <th>Predikat</th>
                        <th>Deskripsi</th>
                        <th>Keterangan</th>
                    </tr>
                  </thead>
                  <h5>Kelompok A (Umum)</h5>
                  <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($datar as $data)
                    @if ($data->mapel->kelompok != 'Kelompok A ( Umum )' )
                            @continue
                        @endif
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$data->mapel->nama}}</td>
                            <td>{{$data->nilai}}</td>
                            <td>{{$data->predikat}}</td>
                            <td>{{$data->ket}}</td>
                            <td>@if ($data->nilai>=$data->kkm)
                                {{'Terpenuhi'}}
                            @else
                                {{'Tidak Terpenuhi'}}
                            @endif
                            </td>
                        </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                  <tr><td><h5>Kelompok B (Umum)</h5></td></tr>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($datar as $data)
                    @if ($data->mapel->kelompok != 'Kelompok B ( Umum )' )
                            @continue
                        @endif
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$data->mapel->nama}}</td>
                            <td>{{$data->nilai}}</td>
                            <td>{{$data->predikat}}</td>
                            <td>{{$data->ket}}</td>
                            <td>@if ($data->nilai>=$data->kkm)
                                {{'Terpenuhi'}}
                            @else
                                {{'Tidak Terpenuhi'}}
                            @endif
                            </td>
                        </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                  <tr><td><h5>Kelompok C (Khusus)</h5></td></tr>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($datar as $data)
                    @if ($data->mapel->kelompok != 'Kelompok C ( Peminatan )' )
                            @continue
                        @endif
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$data->mapel->nama}}</td>
                            <td>{{$data->nilai}}</td>
                            <td>{{$data->predikat}}</td>
                            <td>{{$data->ket}}</td>
                            <td>@if ($data->nilai>=$data->kkm)
                                {{'Terpenuhi'}}
                            @else
                                {{'Tidak Terpenuhi'}}
                            @endif
                            </td>
                        </tr>
                        @php
                        $i++;
                    @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard  </a> templates</span>
        </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
    <script src="../../js/dashboard.js"></script>
    <script src="../../js/data-table.js"></script>
    <script src="../../js/jquery.dataTables.js"></script>
    <script src="../../js/dataTables.bootstrap4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <!-- End custom js for this page-->

  <script src="../../js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>

