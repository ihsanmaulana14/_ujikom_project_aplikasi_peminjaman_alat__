<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">Form Data Peminjam</h1>
   </div>
   <!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title">Edit Profile</h3>
   </div>
   <?= $this->session->flashdata('message'); ?>
   <form class="form-horizontal" method="POST" id="" action="<?php if ($data != null) echo base_url('member_system/edit_profile');
                                                               else echo base_url('member_system/edit_profile_add'); ?>">
      <input type="hidden" name="id_peminjam" value="<?php if ($data != null) echo $data->id_peminjam; ?>">
      <div class="panel-body">
         <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
         <div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
         <div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

         <!--				-------------------------------------------------------------------------------------------------------->
         <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">ID</label>
            <div class="col-md-2 col-xs-12">
               <input type="text" class="form-control" value="<?php if ($data != null) echo $data->id_peminjam; ?>" disabled>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Email</label>
            <div class="col-md-3 col-xs-12">
               <input type="text" id="email" name="email" class="form-control" value="<?php if ($data != null) echo $data->email; ?>">
               <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Nama</label>
            <div class="col-md-3 col-xs-12">
               <input type="text" name="name" class="form-control" value="<?php if ($data != null) echo $data->name; ?>">
               <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Password</label>
            <div class="col-md-3 col-xs-12">
               <input type="text" name="password" class="form-control" value="<?php if ($data != null) echo $this->encryption->decrypt($data->password); ?>" disabled>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Cange Password</label>
            <div class="col-md-3 col-xs-12">
               <input type="password" name="password" class="form-control" value="<?php if ($data != null) echo $this->encryption->decrypt($data->password); ?>">
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-4 col-xs-12 control-label">Kelas</label>
            <div class="col-md-3 col-xs-12">
               <input type="text" name="kelas" class="form-control" value="<?php if ($data != null) echo $data->kelas; ?>">
            </div>
         </div>

      </div>
      <div class="panel-footer text-right">
         <a href="<?php echo base_url('member_system/profile'); ?>" class="pull-left btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
         <button class="btn btn-default" type="reset">Reset</button>
         <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
   </form>
</div>
<script>
   var jvalidate = $("#profile").validate({
      ignore: [],
      rules: {
         name: {
            required: true,
         },
         kelas: {
            required: true,
         },
         email: {
            required: true,
            valid_email: true,
         },
         password: {
            required: true
         },
      },
   });
</script>