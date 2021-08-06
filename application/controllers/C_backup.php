<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_backup extends PX_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('restore_model');

      date_default_timezone_set('Asia/Jakarta');
   }

   public function index()
   {
      $this->check_login_petugas();
      $data['userdata'] = $this->session_petugas;
      $data['content'] = $this->load->view('backend/admin_system/backup_restore', $data, true);
      $this->load->view('backend/index', $data);
   }

   function backup()
   {
      $this->load->dbutil();
      $timezone = new DateTimeZone('Asia/Jakarta');
      $date = new DateTime();
      $date->setTimeZone($timezone);

      $tanggal = $date->format('d F Y');
      $config = array(
         'format' => 'zip',
         'filename' => 'peminjaman_alat-' . $tanggal . '_db.sql',
         'add_drop' => true,
         'add_insert' => true,
         'newline' => "\n",
         'foreign_key_ceks' => false,
      );

      $backup = &$this->dbutil->backup($config);
      $nama_file = 'peminjaman_alat-' . $tanggal . '.zip';
      $this->load->helper('download');
      force_download($nama_file, $backup);
   }
   function restore()
   {
      $this->restore_model->droptabel();
      $fileinput = $_FILES['datafile'];
      $nama = $_FILES['datafile']['name'];

      if (isset($fileinput)) {
         $lokasi_file = $fileinput['tmp_name'];
         $direktori = "backup_db/$nama";
         move_uploaded_file($lokasi_file, "$direktori");
      }
      //restore database
      $isi_file = file_get_contents($direktori);
      $string_query = rtrim($isi_file, "\n;");
      $array_query = explode(";", $string_query);

      foreach ($array_query as $query) {
         $this->db->query($query);
      }

      unlink($direktori);

      echo "<script>
					alert('Restore Berhasil');
               window.location='" . base_url('c_backup') . "'
					</script>";
   }
}
