<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Data Alat
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Layout</a></li>
         <li class="active">Fixed</li>
      </ol>
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="callout callout-info">
         <h4>Tip!</h4>

         <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
            is bigger than your content because it prevents extra unwanted scrolling.</p>
      </div>
      <!-- Default box -->
      <div class="box">
         <div class="box-header with-border">
            <h3 class="box-title">Title</h3>

            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
               <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
            </div>
         </div>
         <div class="box-body">
            Start creating your amazing application!
         </div>
         <!-- /.box-body -->
         <div class="box-footer">
            Footer
         </div>
         <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      <div class="row">
         <div class="col-lg-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Kode Alat</th>
                           <th>Nama Alat</th>
                           <th>Merk</th>
                           <th>No. Seri</th>
                           <th>Stock</th>
                           <th>Satuan</th>
                           <th>Kondisi</th>
                           <th>Tahun</th>
                           <th>Lokasi</th>
                           <th>Pinjam</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d1) { ?>
                           <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $d1->kode_alat ?></td>
                              <td><?php echo $d1->name ?></td>
                              <td><?php echo $d1->merk; ?></td>
                              <td><?php echo $d1->desc ?></td>
                              <td><?php echo $d1->stock ?></td>
                              <td><?php echo $d1->satuan ?></td>
                              <td><?php echo $d1->kondisi ?></td>
                              <td><?php echo $d1->tahun  ?></td>
                              <td><?php echo $d1->lokasi ?></td>
                              <td class="text-center">
                                 <form action="<?php echo base_url('member_system/barang_pinjam') ?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $d1->id_barang ?>">
                                    <button class="btn btn-danger btn-xs btn-delete" type="submit" title="Pinjam" data-placement="top" data-toggle="tooltip"><i class="fa fa-book"></i> Pinjam</button>
                                 </form>
                                 <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                    Launch
                                 </button> -->
                              </td>
                           </tr>
                        <?php } ?>
                     </tbody>
                  </table>
                  <!-- /.table-responsive -->
               </div>
               <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
         </div>
         <!-- /.col-lg-12 -->
      </div>

   </section>
   <script>
      $(function() {
         $('#example1').DataTable()
         $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
         })
      })
   </script>