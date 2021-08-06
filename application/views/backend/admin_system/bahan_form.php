<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Form Data Bahan</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>

			<!-- START DEFAULT DATATABLE -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Form Data Bahan</h3>
				</div>
				<form class="form-horizontal" method="POST" id="bahan_form" action="<?php if($data!=null) echo base_url('admin_system/bahan_update'); else echo base_url('admin_system/bahan_add'); ?>">
				<input type="hidden" name="id_bahan" value="<?php if($data!=null) echo $data->id_bahan; ?>">
				<div class="panel-body">
					<div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
					<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
					<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

<!--				-------------------------------------------------------------------------------------------------------->
				<!-- <div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">ID</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" class="form-control" value="<?php if($data!=null) echo $data->id_barang; ?>" disabled>
					</div>
				</div> -->
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Nama Bahan</label>
					<div class="col-md-4 col-xs-12">
						<input type="text" name="nama_bahan" class="form-control" value="<?php if($data!=null) echo $data->nama_bahan; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Merk</label>
					<div class="col-md-4 col-xs-12">
						<input type="text" name="merk" class="form-control" value="<?php if($data!=null) echo $data->merk; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Stock</label>
					<div class="col-md-2 col-xs-12">
						<input type="number" name="stock" class="form-control" value="<?php if($data!=null) echo $data->stock; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Lokasi</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" name="lokasi" class="form-control" value="<?php if($data!=null) echo $data->lokasi; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Penampilan</label>
					<div class="col-md-6 col-xs-12">
						<div class="radio">
						<label>
							<input type="radio" value="tampilkan" name="status" <?php if($data){ if($data->status == 'tampilkan') echo 'checked'; } else echo 'checked'; ?>>
							Tampilkan
						</label>
						<label>
							<input type="radio" value="sembunyikan" name="status" <?php if($data){ if($data->status == 'sembunyikan') echo 'checked'; } ?>>
							Sembunyikan
						</label>
						</div>
					</div>
				</div>

				</div>
				<div class="panel-footer text-right">
					<button class="btn btn-default" type="reset">Reset</button>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>
				</form>
			</div>
