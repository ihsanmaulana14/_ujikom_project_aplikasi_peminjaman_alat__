            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Riwayat Pemakaian</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title">Riwayat Pemakaian Alat</div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Bahan</th>
                          <th>Jumlah Pakai</th>
                          <th>Tanggal Pakai</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no=1;
                        foreach ($data as $d1) { ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d1->name_peminjam ?></td>
                          <td><?php echo $d1->nama_bahan ?></td>
                          <td><?php echo $d1->jml ?></td>
                          <td><?php echo $d1->tgl_pakai ?></td>
                          <td>
                            <?php if($d1->status == '0') echo "<div class='text-danger'>Pakai Ditolak</div>";
                                  elseif($d1->status == '1') echo "<div class='text-success'>Terpakai</div>"; ?>
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
