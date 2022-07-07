<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Rapor</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/logo-mini.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="{{url('admin/dashboard')}}"><img src="../images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{url('admin/dashboard')}}"><img src="../images/logo-mini.png" alt="logo"/></a>
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
              <img src="../images/faces/face5.jpg" alt="profile"/>
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
            <a class="nav-link" href="{{url('admin/dashboard')}}">
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
                <li class="nav-item"> <a class="nav-link" href="{{url('adduser')}}">User Manager</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('mapel')}}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Add Subject</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('rapor')}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Add Report</span>
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
            <button type="button" class="btn btn-success mb-md-0" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-plus"></i>Tambah Data</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('siswa.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="number" id="nis" name="nis" placeholder="Masukkan nomor NIS" class="form-control" maxlength="10" required autocomplete="off" pattern="[0-9]+">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="username" name="username" placeholder="Masukkan username" class="form-control" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" class="form-control" required autocomplete="off" pattern="[a-zA-Z' ]+">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="number" id="telp" name="telp" placeholder="Masukkan nomor telepon" class="form-control" required autocomplete="off" pattern="[a-zA-Z' ]+">
                                </div>
                                <div class="form-group">
                                    <input type="date" id="tgllhr" name="tgllhr" placeholder="Masukkan tanggal lahir" class="form-control" required autocomplete="off" pattern="[a-zA-Z' ]+">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" placeholder="Masukkan password" class="form-control" required autocomplete="off">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
            <div class="table-responsive">
                <table id="recent-purchases-listing" class="table">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Taggal Lahir</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datas as $data)
                    @if ($data->username == 'admin' )
                                @continue
                            @endif
                        <tr>
                            <td>{{(($datas->currentPage() - 1) * $datas->perPage() + $loop->iteration)-1}}</td>
                            <td>{{$data->siswa->nis_siswa}}</td>
                            <td>{{$data->siswa->nama}}</td>
                            <td>{{$data->siswa->alamat}}</td>
                            <td>{{$data->siswa->telp}}</td>
                            <td>{{$data->siswa->tgllhr}}</td>
                            <td class="d-flex justify-content-left"><a href="" class="btn btn-warning btn-sm mr-1" data-toggle="modal" data-target="#ubah_siswa{{$data->siswa->nis_siswa}}"><i class="fa-solid fa-pen to-square mr-1"></i>Ubah</a>
                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_siswa{{$data->siswa->nis_siswa}}"><i class="fa-solid fa-trash to-square mr-1"></i>Hapus</a>
                            </td>
                        </tr>
                    @endforeach

                    @foreach ($datas as $data)
                        <div class="modal fade" id="hapus_siswa{{$data->siswa->nis_siswa}}" tabindex="-1" role="dialog" aria-labelledby="hapus-siswa" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus data?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus data?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        <form action="{{url('siswa', $data->siswa->nis_siswa)}}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" type="submit">hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="ubah_siswa{{$data->siswa->nis_siswa}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Siswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{url('siswa')}}/{{$data->siswa->nis_siswa}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="number" id="nis" name="nis" placeholder="Masukkan nomor NIS" class="form-control" maxlength="10" required autocomplete="off" pattern="[0-9]+" value="{{$data->siswa->nis_siswa}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="username" name="username" placeholder="Masukkan username" class="form-control" required autocomplete="off" value="{{$data->username}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="nama" name="nama" placeholder="Masukkan nama" class="form-control" required autocomplete="off" pattern="[a-zA-Z' ]+" value="{{$data->siswa->nama}}">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">{{$data->siswa->alamat}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" id="telp" name="telp" placeholder="Masukkan nomor telepon" class="form-control" required autocomplete="off" pattern="[a-zA-Z' ]+" value="{{$data->siswa->telp}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="date" id="tgllhr" name="tgllhr" placeholder="Masukkan tanggal lahir" class="form-control" required autocomplete="off" pattern="[a-zA-Z' ]+" value="{{$data->siswa->tgllhr}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" placeholder="Masukkan password" class="form-control" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                            <input type="hidden" name="_method" value="PUT">
                                        <button class="btn btn-warning" type="submit">Ubah</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
    <script src="../js/dashboard.js"></script>
    <script src="../js/data-table.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <script src="../js/dataTables.bootstrap4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <!-- End custom js for this page-->

  <script src="../js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>

