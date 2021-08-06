<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Form Data Alat</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>

			<!-- START DEFAULT DATATABLE -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Form Data Alat</h3>
				</div>
				<form class="form-horizontal" method="POST" id="barang_form" action="<?php if($data!=null) echo base_url('admin_system/barang_update'); else echo base_url('admin_system/barang_add'); ?>">
				<input type="hidden" name="id_barang" value="<?php if($data!=null) echo $data->id_barang; ?>">
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
					<label class="col-md-4 col-xs-12 control-label">Kode Alat</label>
					<div class="col-md-4 col-xs-12">
						<input type="text" name="kode_alat" class="form-control" value="<?php if($data!=null) echo $data->kode_alat; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Nama Alat</label>
					<div class="col-md-4 col-xs-12">
						<input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Merk</label>
					<div class="col-md-4 col-xs-12">
						<input type="text" name="merk" class="form-control" value="<?php if($data!=null) echo $data->merk; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">No. Seri</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" name="desc" class="form-control" value="<?php if($data!=null) echo $data->desc; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Stock</label>
					<div class="col-md-2 col-xs-12">
						<input type="number" name="stock" class="form-control" value="<?php if($data!=null) echo $data->stock; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Satuan</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" name="satuan" class="form-control" value="<?php if($data!=null) echo $data->satuan; ?>"require>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Kondisi</label>
					<div class="col-md-6 col-xs-12">
						<div class="radio">
						<label>
							<input type="radio" value="baik" name="kondisi" <?php if($data){ if($data->kondisi == 'baik') echo 'checked'; } else echo 'checked'; ?>>
							Baik
						</label>
						<label>
							<input type="radio" value="rusak" name="kondisi" <?php if($data){ if($data->kondisi == 'rusak') echo 'checked'; } ?>>
							Rusak
						</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Tahun</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" name="tahun" class="form-control" value="<?php if($data!=null) echo $data->tahun; ?>">
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
