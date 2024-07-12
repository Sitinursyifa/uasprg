<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Dosen</title>
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Dark Mode Theme -->
  <style>
    body {
      background-color: #343a40;
      color: #e9ecef;
    }
    .navbar {
      background-color: #343a40 !important;
    }
    .sidebar-dark-primary .brand-link {
      background-color: #343a40;
      color: #ffffff !important;
    }
    .nav-sidebar .nav-link.active {
      background-color: #6c757d !important;
    }
    .main-header .nav-link {
      color: #ffffff !important;
    }
    .main-header .nav-link:hover {
      color: #ced4da !important;
    }
    .content-wrapper {
      background-color: #343a40;
      color: #e9ecef;
    }
    .table {
      background-color: #454d55;
      color: #e9ecef;
    }
    .thead-dark th {
      background-color: #343a40;
      color: #e9ecef;
    }
    .btn-dark {
      background-color: #343a40;
      color: #ffffff;
      border-color: #343a40;
    }
    .btn-dark:hover {
      background-color: #6c757d;
      border-color: #6c757d;
    }
    .btn-dark:focus, .btn-dark.focus {
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }
    .btn-dark.disabled, .btn-dark:disabled {
      background-color: #343a40;
      border-color: #343a40;
    }
    .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
    .show > .btn-dark.dropdown-toggle {
      background-color: #6c757d;
      border-color: #6c757d;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i> Dosen Universitas Tangerang</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">Universitas Tangerang</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            <a href="/dosen" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>Data Dosen</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col-md-12">

            <?php if(!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-success">
              <?php echo session()->getFlashdata('message'); ?>
            </div>
            <?php endif ?>

            <!-- Form Tambah Data Dosen -->
            <form action="/tambah-data-dosen" method="post">
              <div class="form-group">
                <label for="kode_dosen">Kode Dosen:</label>
                <input type="text" name="kode_dosen" id="kode_dosen" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="kode_matkul">Kode Mata Kuliah:</label>
                <input type="text" name="kode_matkul" id="kode_matkul" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="nama_matkul">Nama Mata Kuliah:</label>
                <input type="text" name="nama_matkul" id="nama_matkul" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-dark"><i class=""></i> Simpan</button>
              <a href="/dosen" class="btn btn-danger"><i class=""></i> Kembali</a>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery, Popper.js, Bootstrap JS, and AdminLTE JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</body>
</html>
