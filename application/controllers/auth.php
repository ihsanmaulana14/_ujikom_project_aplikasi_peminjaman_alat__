<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends PX_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   // register peminjam/member
   public function register()
   {
      $this->form_validation->set_rules('name', 'Full Name', 'required|trim|is_unique[tbl_peminjam.name]', [
         'is_unique' => 'This name has alredy registered!'
      ]);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_peminjam.email]', [
         'is_unique' => 'This email has alredy registered!'
      ]);
      $this->form_validation->set_rules('password', 'Password', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->view('frontend/member/regist_auth');
      } else {
         $table_field = $this->db->list_fields('tbl_peminjam');
         $insert = array();
         foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
         }
         $insert['password'] = $this->encrypt->encode($insert['password']);
         $check_email = $this->model_basic->select_where('tbl_peminjam', 'email', $insert['email'])->row();
         if ($check_email != null) {
            $this->returnJson(array('status' => 'error', 'msg' => 'email sudah digunakan!'));
         } else {
            if ($insert) {
               $do_insert = $this->model_basic->insert_all('tbl_peminjam', $insert);
               echo "<script>
				   alert('Berhasil! Anda akan dialihkan');
               window.location='" . base_url('member/login') . "'
				   </script>";
            } else {
               $this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
            }
         }
      }
   }
   // register admin
   public function register_admin()
   {
      $this->form_validation->set_rules('name', 'Full Name', 'required|trim|is_unique[tbl_petugas.name]', [
         'is_unique' => 'This name has alredy registered!'
      ]);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_petugas.email]', [
         'is_unique' => 'This email has alredy registered!'
      ]);
      $this->form_validation->set_rules('password', 'Password', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->view('backend/admin/regist_auth');
      } else {
         $table_field = $this->db->list_fields('tbl_petugas');
         $insert = array();
         foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
         }
         $insert['password'] = $this->encryption->encrypt($insert['password']);
         $check_email = $this->model_basic->select_where('tbl_petugas', 'email', $insert['email'])->row();
         if ($check_email != null) {
            $this->returnJson(array('status' => 'error', 'msg' => 'email sudah digunakan!'));
         } else {
            if ($insert) {
               $do_insert = $this->model_basic->insert_all('tbl_petugas', $insert);
               echo "<script>
				   alert('Berhasil! Anda akan dialihkan');
               window.location='" . base_url('admin/login') . "'
				   </script>";
            } else {
               $this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
            }
         }
      }
   }
}
