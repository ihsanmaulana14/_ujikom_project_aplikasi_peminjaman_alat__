<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Anda Login Sebagai</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Data Peminjam</h3>
	</div>
	<form class="form-horizontal" method="POST" id="barang_pinjam" action="<?php echo base_url('member_system/barang_pinjam_act'); ?>">
		<div class="panel-body">
			<!--				-------------------------------------------------------------------------------------------------------->
			<div class="form-group">
				<label class="col-md-2 col-xs-12 control-label">ID</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="" class="form-control" value="<?php echo $data->id_peminjam; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-xs-12 control-label">Email</label>
				<div class="col-md-4 col-xs-12">
					<input type="text" name="" class="form-control" value="<?php echo $data->email; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-xs-12 control-label">Nama</label>
				<div class="col-md-4 col-xs-12">
					<input type="text" name="" class="form-control" value="<?php echo $data->name; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 col-xs-12 control-label">Kelas</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="" class="form-control" value="<?php echo $data->kelas; ?>" disabled>
				</div>
			</div>
		</div>
		<div class="panel-footer text-right">
			<a href="<?php echo base_url('member/dashboard'); ?>" style="margin-right: 10px;" class="pull-left btn btn-success"><i class="fa fa-check"></i> OKE</a>
			<a href="<?php echo base_url('member_system/edit_profile'); ?>" class="pull-left btn btn-warning"><i class="fa fa-pencil"></i> Edit Profile</a>
			<div class="clearfix"></div>
		</div>
	</form>
</div>