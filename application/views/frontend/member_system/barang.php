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
                    <h3 class="panel-title">Data Alat</h3>
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