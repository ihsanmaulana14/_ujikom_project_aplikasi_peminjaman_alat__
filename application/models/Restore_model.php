<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restore_model extends CI_Model
{

   function droptabel()
   {
      $cek = $this->db->query("SHOW TABLES");
      if ($cek->num_rows() > 0) {
         $query = $this->db->query('DROP TABLE tbl_barang,tbl_bahan,tbl_pakai,tbl_peminjam,tbl_petugas,tbl_pinjam,tbl_riwayat,tbl_riwayat_pakai');
         return $query;
      } else {
         return true;
      }
   }
}
