<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Peminjaman Alat - TKJ - Admin</title>
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/backend_assets/img/tkj.png" />

  <!-- Views CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/views/styles.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url() ?>assets/backend_assets/admin_system/css/default-css.css" rel="stylesheet"> -->

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/morrisjs/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- icon -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/fontawesome-5-15-2/css/fontawesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/fontawesome-5-15-2/css/fontawesome.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/fontawesome-5-15-2/css/brands.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/fontawesome-5-15-2/css/regular.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/fontawesome-5-15-2/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- DataTables CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

  <!-- DataTables Responsive CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>style.css"> -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div id="wrapper">

    <div class="page-container">



      <!-- Navigation -->

      <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>



            <a class="navbar-brand" href="#">Selamat Datang, <?php echo $userdata['name'] ?></a>

          </div>
          <div class="col-md">
            <ul class="notification-area pull-right">
              <li>
                <h3>
                  <div class="date">
                    <script type='text/javascript'>
                      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
                        'September', 'Oktober', 'November', 'Desember'
                      ];
                      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                      var date = new Date();
                      var day = date.getDate();
                      var month = date.getMonth();
                      var thisDay = date.getDay(),
                        thisDay = myDays[thisDay];
                      var yy = date.getYear();
                      var year = (yy < 1000) ? yy + 1900 : yy;
                      document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                      //-->
                    </script></b>
                  </div>
                </h3>

              </li>
            </ul>
          </div>
        </div>

        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <img class="logo" src="<?php echo base_url('assets/backend_assets/img/tkj.png') ?>" alt="logo" width="20%">
            <ul class="nav" id="side-menu">
              <li>
                <a href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-tachometer-alt fa-fw"></i>
                  Dashboard</a>
              </li>
              <li>
                <a href="<?php echo base_url('admin_system/petugas') ?>"><i class="fa fa-user fa-fw"></i> User Petugas</a></a>
              </li>
              <li>
                <a href="<?php echo base_url('admin_system/peminjam') ?>"><i class="fa fa-users fa-fw"></i> User Peminjam</a></a>
              </li>
              <li>
                <a href="<?php echo base_url('admin_system/barang') ?>"><i class="fa fa-tools fa-fw"></i> Data Alat</a></a>
              </li>
              <li>
                <a href="<?php echo base_url('admin_system/bahan') ?>"><i class="fa fa-archive fa-fw"></i> Data Bahan</a></a>
              </li>
              <li>
                <a href="#"><i class="fas fa-clipboard-check fa-fw"></i> Persetujuan<span class="fa arrow"></span></a></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="<?php echo base_url('admin_system/pinjam') ?>"><i class="fa fa-check-square fa-fw"></i>
                      Peminjaman</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin_system/pakai') ?>"><i class="fa fa-check-square fa-fw"></i>
                      Pemakaian</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin_system/kembali') ?>"><i class="fa fa-undo fa-fw"></i>
                      Pengembalian</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="<?php echo base_url('admin_system/riwayat') ?>"><i class="fa fa-history fa-fw"></i> Riwayat
                  Peminjaman</a>
              </li>
              <li>
                <a href="<?php echo base_url('admin_system/riwayat_pakai') ?>"><i class="fa fa-history fa-fw"></i>
                  Riwayat Pemakaian</a>
              </li>
              <li>
                <a href="<?php echo base_url('C_backup') ?>"><i class="fa fa-history fa-fw"></i>
                  Backup & Restore</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-flag fa-fw"></i> Generate Laporan<span class="fa arrow"></span></a></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="<?php echo base_url('admin_system/laporan_pinjam') ?>"><i class="fa fa-flag-checkered fa-fw"></i> Alat Yang Sedang Dipinjam</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="<?php echo base_url('admin/do_logout') ?>"><i class="fas fa-sign-out-alt fa-fw"></i> Logout</a>
              </li>

            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>


      <!-- /#page-wrapper -->
    </div>
    <div id="page-wrapper">
      <?php echo $content ?>
    </div>
    <!-- #page container start -->
    <div class="page-container" style="margin-top:-10px;">
      <!-- #navbar-footer start -->
      <div class="navbar navbar-footer fixed-bottom">
        <a class="text-footer fixed-bottom">Copyright © TKJ-SMKN 2 KOTA BEKASI</a>
      </div>
    </div>
  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/morrisjs/morris.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend_assets/data/morris-data.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="<?php echo base_url() ?>assets/backend_assets/dist/js/sb-admin-2.js"></script>

  <!-- DataTables JavaScript -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-plugins/dataTables.bootstrap.min.js">
  </script>
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-responsive/dataTables.responsive.js">
  </script>

  <!-- Validation Plugin -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery-validation/jquery.validate.js"></script>


  <!-- WARNING: DATA TABLES SCRIPT -->
  <script>
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
        responsive: true
      });
    });
  </script>

  <!-- WARNING VALIDATE SCRIPT  -->
  <script type="text/javascript">
    var jvalidate = $("#peminjam_form").validate({
      ignore: [],
      rules: {
        username: {
          required: true
        },
        password: {
          required: true
        },
        name: {
          required: true
        },
        email: {
          required: true
        },
      },
      submitHandler: function(form) {
        var target = $(form).attr('action');
        $('#peminjam_form .alert-warning').removeClass('hidden');
        $('#peminjam_form .alert-success').addClass('hidden');
        $('#peminjam_form .alert-danger').addClass('hidden');
        $.ajax({
          url: target,
          type: 'POST',
          dataType: 'json',
          data: $(form).serialize(),
          success: function(response) {
            $('#peminjam_form .alert-warning').addClass('hidden');
            if (response.status == 'ok') {
              $('#peminjam_form .alert-success').removeClass('hidden').children('span').text(response.msg);
              window.location.href = response.redirect;
            } else
              $('#peminjam_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
          }
        });
      }
    });
  </script>


  <!-- WARNING VALIDATE SCRIPT petugas_form -->
  <script type="text/javascript">
    var jvalidate = $("#petugas_form").validate({
      ignore: [],
      rules: {
        username: {
          required: true
        },
        password: {
          required: true
        },
        name: {
          required: true
        },
        email: {
          required: true
        },
      },
      submitHandler: function(form) {
        var target = $(form).attr('action');
        $('#petugas_form .alert-warning').removeClass('hidden');
        $('#petugas_form .alert-success').addClass('hidden');
        $('#petugas_form .alert-danger').addClass('hidden');
        $.ajax({
          url: target,
          type: 'POST',
          dataType: 'json',
          data: $(form).serialize(),
          success: function(response) {
            $('#petugas_form .alert-warning').addClass('hidden');
            if (response.status == 'ok') {
              $('#petugas_form .alert-success').removeClass('hidden').children('span').text(response.msg);
              window.location.href = response.redirect;
            } else
              $('#petugas_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
          }
        });
      }
    });
  </script>

  <!-- WARNING VALIDATE SCRIPT  -->
  <script type="text/javascript">
    var jvalidate = $("#barang_form").validate({
      ignore: [],
      rules: {
        name: {
          required: true
        },
        desc: {
          required: true
        },
        stock: {
          required: true
        },
        status: {
          required: true
        },
      },
      submitHandler: function(form) {
        var target = $(form).attr('action');
        $('#barang_form .alert-warning').removeClass('hidden');
        $('#barang_form .alert-success').addClass('hidden');
        $('#barang_form .alert-danger').addClass('hidden');
        $.ajax({
          url: target,
          type: 'POST',
          dataType: 'json',
          data: $(form).serialize(),
          success: function(response) {
            $('#barang_form .alert-warning').addClass('hidden');
            if (response.status == 'ok') {
              $('#barang_form .alert-success').removeClass('hidden').children('span').text(response.msg);
              window.location.href = response.redirect;
            } else
              $('#barang_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
          }
        });
      }
    });
  </script>

  <!-- WARNING VALIDATE SCRIPT  -->
  <script type="text/javascript">
    var jvalidate = $("#bahan_form").validate({
      ignore: [],
      rules: {
        nama_bahan: {
          required: true
        },
        merk: {
          required: true
        },
        stock: {
          required: true
        },
        lokasi: {
          required: true
        },
        status: {
          required: true
        },
      },
      submitHandler: function(form) {
        var target = $(form).attr('action');
        $('#bahan_form .alert-warning').removeClass('hidden');
        $('#bahan_form .alert-success').addClass('hidden');
        $('#bahan_form .alert-danger').addClass('hidden');
        $.ajax({
          url: target,
          type: 'POST',
          dataType: 'json',
          data: $(form).serialize(),
          success: function(response) {
            $('#bahan_form .alert-warning').addClass('hidden');
            if (response.status == 'ok') {
              $('#bahan_form .alert-success').removeClass('hidden').children('span').text(response.msg);
              window.location.href = response.redirect;
            } else
              $('#bahan_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
          }
        });
      }
    });
  </script>

</body>

</html>