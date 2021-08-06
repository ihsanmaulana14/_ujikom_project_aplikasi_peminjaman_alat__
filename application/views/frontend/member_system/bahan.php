<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data bahan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Data Bahan</h3>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Bahan</th>
                          <th>Merk</th>
                          <th>Stock</th>
                          <th>Lokasi</th>
                          <th>Pakai</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1; 
                        foreach ($data as $d1) { ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d1->nama_bahan ?></td>
                          <td><?php echo $d1->merk ?></td>
                          <td><?php echo $d1->stock?></td>
                          <td><?php echo $d1->lokasi?></td>
                          <td class="text-center">
                            <form action="<?php echo base_url('member_system/bahan_pakai') ?>" method="post">
										          <input type="hidden" name="id" value="<?php echo $d1->id_bahan ?>">
										          <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="delete" data-placement="top" data-toggle="tooltip"><i class="fa fa-book"></i> Pakai</button>
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
