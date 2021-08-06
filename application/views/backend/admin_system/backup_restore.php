<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">Backup & Restore</h1>
   </div>
   <!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="col-md-5">
   <div class="panel panel-default ">
      <div class="panel-heading">
         <h3 class="panel-title">Backup</h3>
      </div>
      <div class="panel-body">
         <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
         <div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
         <div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>
      </div>
      <div style="padding: 6px;">
         <a class="btn btn-flat btn-primary" href="<?= base_url() ?>c_backup/backup">Klik untuk backup data</a>
      </div>
   </div>
</div>
<div class="col-md-6">
   <div class="panel panel-default ">
      <div class="panel-heading">
         <h3 class="panel-title">Restore Data</h3>
      </div>
      <div class="panel-body">
         <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
         <div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
         <div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>
      </div>
      <div style="padding: 8px;">
         <form action="<?= base_url() ?>c_backup/restore" method="POST" enctype="multipart/form-data">
            <span>pilih file yang sudah di backup (.sql)</span><input type="file" name="datafile" title="Pilih File">

            <input onclick="javascript:return confirm('Pastikan Anda sudah memilih file(.sql)')" style="margin-top: 5px;" type="submit" value="klik untuk restore">
         </form>
      </div>
   </div>
</div>