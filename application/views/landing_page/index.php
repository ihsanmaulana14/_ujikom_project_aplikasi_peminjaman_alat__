<!doctype html>
<html lang="en">

<head>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.css">
   <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
   <!-- custom -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/custom/style.css">
   <!-- dataTables -->
   <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->
   <!-- font -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

   <link rel="shortcut icon" href="<?php echo base_url() ?>assets/backend_assets/img/tkj.png" />
   <title>Aplikasi Peminjaman Alat</title>
</head>

<body class="masthead">
   <nav class="navbar navbar-expand-lg navbar-dark bg-custom">

      <div class="container">
         <div class="row">
            <div class="col-5">
               <span class="navbar-brand-custom align-content-center" href="#">Aplikasi Peminjaman Alat</span>
               <a href="<?php echo base_url('admin') ?>" class="btn btn-custom1">Login Admin</a>
               <a href="<?php echo base_url('member') ?>" class="btn btn-custom2 ml-5">Login Umum</a>
            </div>
         </div>
      </div>
   </nav>
   <header>
      <div class="row">
         <!-- /.col -->
         <div class="col-md-5 customTable">
            <div class="box-custom">
               <div class="box-header-custom">
                  <h3 class="box-title">Daftar Alat yang tersedia</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="example2" class="table table-bordered">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Alat</th>
                           <th scope="col">Stock</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d1) { ?>
                           <tr>
                              <td scope="row"><?= $no++; ?></td>
                              <td><?= $d1->name ?></td>
                              <td><?= $d1->stock ?></td>
                              <td><a href="<?php echo base_url('member') ?>" class="btn btn-primary btn-sm">Proses</a>
                              </td>
                           </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="col-md-5 customTable alat">
            <div class="box-custom">
               <div class="box-header-custom">
                  <h3 class="box-title">Daftar Bahan yang tersedia</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="example1" class="table table-bordered">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Bahan</th>
                           <th scope="col">Stock</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $no = 1;
                        foreach ($bahan as $d1) { ?>
                           <tr>
                              <td scope="row"><?= $no++; ?></td>
                              <td><?= $d1->nama_bahan ?></td>
                              <td><?= $d1->stock ?></td>
                              <td><a href="<?php echo base_url('member') ?>" class="btn btn-primary btn-sm">Proses</a>
                              </td>
                           </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </header>

   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
   <!-- jQuery -->
   <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery/jquery.min.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/js/bootstrap.min.js"></script>

   <!-- Metis Menu Plugin JavaScript -->
   <script src="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.js"></script>

   <!-- Custom Theme JavaScript -->
   <script src="<?php echo base_url() ?>assets/backend_assets/dist/js/sb-admin-2.js"></script>

   <!-- Validation Plugin -->
   <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery-validation/jquery.validate.js"></script>



   <!-- DataTables -->
   <script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
   <!-- page script -->
   <script>
      $(function() {
         $('#example1').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true,
            "lengthMenu": [5, 10, 15, 20]
         });
         $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true,
            "lengthMenu": [5, 10, 15, 20]
         });
      });
   </script>
</body>

</html>