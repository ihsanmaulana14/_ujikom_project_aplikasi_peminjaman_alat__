            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">Data Alat</h1>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title">Data Alat</div>
                      <a class="btn btn-success btn-add" href="<?php echo base_url('admin_system/barang_form') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d1) {
                        ?>
                          <tr>
                            <td width="1"><?php echo $no++; ?></td>
                            <td><?php echo $d1->kode_alat ?></td>
                            <td><?php echo $d1->name ?></td>
                            <td><?php echo $d1->merk; ?></td>
                            <td><?php echo $d1->desc ?></td>
                            <td><?php echo $d1->stock ?></td>
                            <td><?php echo $d1->satuan ?></td>
                            <td><?php echo $d1->kondisi ?></td>
                            <td><?php echo $d1->tahun  ?></td>
                            <td><?php echo $d1->lokasi ?></td>
                            <td><?php echo $d1->status ?></td>
                            <td class="text-center">
                              <form action="<?php echo base_url('admin_system/barang_form') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $d1->id_barang ?>">
                                <button class="btn btn-info btn-xs btn-edit" type="submit" title="Ubah" data-placement="top" data-toggle="tooltip"><i class="fa fa-edit"></i></button>
                              </form>
                            </td>
                            <td class="text-center">
                              <form onclick="javascript:return confirm('Anda Yakin Ingin Hapus Alat Ini?')" action="<?php echo base_url('admin_system/barang_delete') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $d1->id_barang ?>">
                                <button class="btn btn-danger btn-delete btn-xs" type="submit" title="Hapus" data-placement="top" data-toggle="tooltip"><i class="fas fa-trash"></i></button>
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