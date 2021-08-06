<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Form Pemakaian Bahan</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>

			<!-- START DEFAULT DATATABLE -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Form Pemakaian Bahan</h3>
				</div>
				<form class="form-horizontal" method="POST" id="bahan_pakai" action="<?php echo base_url('member_system/bahan_pakai_act'); ?>">
					<input type="hidden" name="id_peminjam" value="<?php echo $userdata['id_peminjam'] ?>">
					<input type="hidden" name="id_bahan" value="<?php echo $data->id_bahan; ?>">
					<!-- <input type="hidden" name="tgl_kembali" value="0"> -->
					<input type="hidden" name="status" value="0">
				<div class="panel-body">
					<div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
					<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
					<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

<!---------------------------------------------------------------------------------------------------------->
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">ID</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" class="form-control" value="<?php echo $data->id_bahan; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Nama Bahan</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" name="" class="form-control" value="<?php echo $data->nama_bahan; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Merk</label>
					<div class="col-md-5 col-xs-12">
						<input type="text" name="" class="form-control" value="<?php echo $data->merk; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Stock</label>
					<div class="col-md-2 col-xs-12">
						<input type="number" name="" class="form-control" value="<?php echo $data->stock; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Tanggal Pakai</label>
					<div class="col-md-3 col-xs-12">
						<input type="datetime" name="tgl_pakai" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Jumlah Pakai</label>
					<div class="col-md-2 col-xs-12">
						<input type="number" name="jml" class="form-control" value="">
					</div>
				</div>

				</div>
				<div class="panel-footer text-right">
					<a href="<?php echo base_url('member_system/bahan'); ?>" class="pull-left btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
					<button class="btn btn-default" type="reset">Reset</button>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>
				</form>
			</div>
