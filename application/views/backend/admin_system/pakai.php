<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Persetujuan Pemakaian</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="text-right">
          <div class="pull-left panel-title">Persetujuan Pemakaian Bahan</div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pemakai</th>
              <th>Kelas</th>
              <th>Nama Bahan</th>
              <th>Merk</th>
              <th>Jumlah Pakai</th>
              <th>Tanggal Pakai</th>
              <th>Setujui</th>
              <th>Tolak</th>
            </tr>
          </thead>
          <tbody>
            <?php
                        $no=1; 
                        foreach ($data as $d1) { ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $d1->name_pemakai ?></td>
              <td><?php echo $d1->kelas ?></td>
              <td><?php echo $d1->name_bahan?></td>
              <td><?php echo $d1->merk ?></td>
              <td><?php echo $d1->jml ?></td>
              <td><?php echo $d1->tgl_pakai ?></td>
              <td class="text-center">
                <form action="<?php echo base_url('admin_system/pakai_setujui') ?>" method="post">
                  <input type="hidden" name="id_pakai" value="<?php echo $d1->id_pakai ?>">
                  <input type="hidden" name="id_peminjam" value="<?php echo $d1->id_peminjam ?>">
                  <input type="hidden" name="id_bahan" value="<?php echo $d1->id_bahan ?>">
                  <input type="hidden" name="jml" value="<?php echo $d1->jml ?>">
                  <input type="hidden" name="tgl_pakai" value="<?php echo $d1->tgl_pakai ?>">
                  <input type="hidden" name="status" value="1">
                  <button class="btn btn-success btn-xs btn-edit" type="submit" data-original-title="Ubah"
                    data-placement="top" data-toggle="tooltip"><i class="fa fa-check"></i> Setujui</button>
                </form>
              </td>
              <td class="text-center">
                <form action="<?php echo base_url('admin_system/pakai_tolak') ?>" method="post">
                  <input type="hidden" name="id" value="<?php echo $d1->id_pakai ?>">
                  <input type="hidden" name="name_pemakai" value="<?php echo $d1->name_pemakai ?>">
                  <input type="hidden" name="kelas" value="<?php echo $d1->kelas?>">
                  <input type="hidden" name="id_bahan" value="<?php echo $d1->id_bahan ?>">
                  <input type="hidden" name="merk" value="<?php echo $d1->merk ?>">
                  <input type="hidden" name="jml" value="<?php echo $d1->jml ?>">
                  <input type="hidden" name="tgl_pakai" value="<?php echo $d1->tgl_pakai ?>">
                  <!-- <input type="hidden" name="tgl_kembali" value="<?php echo $d1->tgl_kembali ?>"> -->
                  <input type="hidden" name="status" value="0">
                  <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="delete"
                    data-placement="top" data-toggle="tooltip"><i class="fa fa-times"></i> Tolak</button>
                </form>
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