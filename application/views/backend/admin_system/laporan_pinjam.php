            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">Alat Dipinjam</h1>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title">Laporan Alat Yang Sedang Dipinjam</div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Email</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Kode Alat</th>
                          <th>Alat</th>
                          <th>Merk</th>
                          <th>No.seri</th>
                          <th>Jumlah</th>
                          <th>Satuan</th>
                          <th>Keterangan</th>
                          <th>Tanggal Pinjam</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d1) { ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d1->email ?></td>
                            <td><?php echo $d1->name_peminjam ?></td>
                            <td><?php echo $d1->kelas ?></td>
                            <td><?php echo $d1->kode_alat ?></td>
                            <td><?php echo $d1->nama_alat ?></td>
                            <td><?php echo $d1->merk ?></td>
                            <td><?php echo $d1->desc ?></td>
                            <td><?php echo $d1->jml ?></td>
                            <td><?php echo $d1->satuan ?></td>
                            <td><?php echo $d1->ket ?></td>
                            <td><?php echo $d1->tgl_pinjam ?></td>
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