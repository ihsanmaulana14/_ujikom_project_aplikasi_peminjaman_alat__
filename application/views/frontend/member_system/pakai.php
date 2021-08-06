<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bahan Dipakai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Bahan Dipakai</h3>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Bahan</th>
                          <th>Merk</th>
                          <th>Jumlah Pakai</th>
                          <th>Tanggal Pakai</th>
                          <!-- <th>Tanggal Kembali</th> -->
                          <th>Status</th>
                          <!-- <th>Kembalikan</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no=1;
                        foreach ($data as $d1) { ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d1->nama_bahan ?></td>
                          <td><?php echo $d1->merk ?></td>
                          <td><?php echo $d1->jml ?></td>
                          <td><?php echo $d1->tgl_pakai ?></td>
                          <!-- <td class="text-center">
                            <?php if($d1->tgl_kembali == "00:00:00 00-00-0000") echo "N/A"; else echo $d1->tgl_kembali;?> 
                          </td> -->
                          <td>
                            <?php if($d1->status == '0') echo "<div class='text-primary'>Menunggu Persetujuan...</div>";
                                  elseif($d1->status == '1') echo "<div class='bg-success'>Sedang Dipakai</div>";
                                  elseif($d1->status == '2') echo "<div class='text-success'>Menunggu Pengembalian...</div>"; ?>
                          </td>
                          <!-- <td class="text-center">
                            <?php if($d1->status == '1'){ ?>
                            <form action="<?php echo base_url('member_system/pinjam_kembali') ?>" method="post">
                              <input type="hidden" name="tgl_kembali" value="<?php echo date(' Y-m-d H:i:s') ?>">
										          <input type="hidden" name="id" value="<?php echo $d1->id_pinjam ?>">
										          <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="delete" data-placement="top" data-toggle="tooltip"><i class="fa fa-undo"></i> Kembalikan</button>
								 	          </form> 
                          <?php }else{ ?>
                            N/A
                          <?php } ?>
                          </td> -->
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
