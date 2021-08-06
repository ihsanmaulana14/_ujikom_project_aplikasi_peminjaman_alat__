            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-blue">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tools fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jml_barang ?></div>
                                    <div>Jumlah Data Alat</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin_system/barang') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $ttl_barang ?></div>
                                    <div>Alat Tersedia</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin_system/barang') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $ttl_pinjam ?></div>
                                    <div>Alat Dipinjam</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin_system/laporan_pinjam') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jml_peminjam ?></div>
                                    <div>Data User Peminjam</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin_system/peminjam') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- row ke 2 -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-blue2">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-archive fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jml_bahan ?></div>
                                    <div>Jumlah Data Bahan</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin_system/bahan') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green2">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $ttl_bahan ?></div>
                                    <div>Bahan Tersedia</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin_system/bahan') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-orange">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $ttl_pakai ?></div>
                                    <div>Bahan Terpakai</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin_system/riwayat_pakai') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
