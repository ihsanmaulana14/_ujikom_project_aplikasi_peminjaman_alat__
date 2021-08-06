<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_system extends PX_Controller
{
   public function __construct()
   {
      parent::__construct();

      $this->load->library('form_validation');
   }

   public function index()
   {
   }

   function profile()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $data['data'] = $this->model_basic->select_where('tbl_peminjam', 'id_peminjam', $this->session_peminjam['id_peminjam'])->row();
      $data['content'] = $this->load->view('frontend/member_system/profile', $data, true);
      $this->load->view('frontend/index', $data);
   }
   function edit_profile()
   {

      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;

      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required|trim');

      if ($this->form_validation->run() == false) {
         $data['data'] = $this->model_basic->select_where('tbl_peminjam', 'id_peminjam', $this->session_peminjam['id_peminjam'])->row();
         $data['content'] = $this->load->view('frontend/member_system/edit_profile', $data, true);
         $this->load->view('frontend/index', $data);
      } else {
         $data['data'] = $this->model_basic->select_where('tbl_peminjam', 'id_peminjam', $this->session_peminjam['id_peminjam'])->row();
         $data['content'] = $this->load->view('frontend/member_system/edit_profile', $data, true);
         $this->load->view('frontend/index', $data);

         $table_field = $this->db->list_fields('tbl_peminjam');
         $update = array();
         foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
         }
         $update['password'] = $this->encryption->encrypt($update['password']);
         $check_name = $this->model_basic->select_where('tbl_peminjam', 'name', $update['name'])->row();
         if ($check_name != null && $check_name->id_peminjam) {
            // $this->returnJson(array('status' => 'error', 'msg' => 'name sudah digunakan!'));
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama sudah digunakan!</div>');
            redirect('member_system/edit_profile');
         } else {
            if ($update) {
               $do_update = $this->model_basic->update('tbl_peminjam', $update, 'id_peminjam', $update['id_peminjam']);
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update data berhasil!</div>');
               redirect('member_system/edit_profile');
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Periksa kembali form!</div>');
               redirect('member_system/edit_profile');
            }
         }
      }
   }
   function edit_profile_add()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $table_field = $this->db->list_fields('tbl_peminjam');
      $insert = array();
      foreach ($table_field as $field) {
         $insert[$field] = $this->input->post($field);
      }
      $insert['password'] = $this->encrypt->encode($insert['password']);
      $check_email = $this->model_basic->select_where('tbl_peminjam', 'email', $insert['email'])->row();
      $check_name = $this->model_basic->select_where('tbl_peminjam', 'name', $insert['name'])->row();

      if ($check_email != null && $check_email->id_peminjam != $insert['id_peminjam']) {
         // $this->returnJson(array('status' => 'error', 'msg' => 'email sudah digunakan!'));
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email sudah digunakan!</div>');
         redirect('member_system/edit_profile');
      }else if ($insert) {
            $insert = $this->model_basic->insert_all('tbl_peminjam', $insert);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update data berhasil!</div>');
            redirect('member_system/profile');
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Periksa kembali form!</div>');
            redirect('member_system/edit_profile');
         }

      if ($check_name != null && $check_name->id_peminjam != $insert['id_peminjam']) {
         // $this->returnJson(array('status' => 'error', 'msg' => 'name sudah digunakan!'));
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama sudah digunakan!</div>');
         redirect('member_system/edit_profile');
      } else {
         if ($insert) {
            $insert = $this->model_basic->insert_all('tbl_peminjam', $insert);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update data berhasil!</div>');
            redirect('member_system/profile');
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Periksa kembali form!</div>');
            redirect('member_system/edit_profile');
         }
      }
   }
   function edit_profile_update()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;

      $table_field = $this->db->list_fields('tbl_peminjam');
      $update = array();
      foreach ($table_field as $field) {
         $update[$field] = $this->input->post($field);
      }
      $update['password'] = $this->encrypt->encode($update['password']);
      $check_email = $this->model_basic->select_where('tbl_peminjam', 'email', $update['email'])->row();
      $check_name = $this->model_basic->select_where('tbl_peminjam', 'name', $update['name'])->row();

      if ($check_email != null && $check_email->id_peminjam != $update['id_peminjam']) {
         // $this->returnJson(array('status' => 'error', 'msg' => 'email sudah digunakan!'));
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email sudah digunakan!</div>');
         redirect('member_system/edit_profile');
      } else {
         if ($update) {
            $update = $this->model_basic->update('tbl_peminjam', $update, 'id_peminjam', $update['id_peminjam']);
            // $this->returnJson(array('status' => 'ok', 'msg' => 'Update data berhasil', 'redirect' => 'peminjam'));
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update data berhasil!</div>');
            redirect('member_system/profile');
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Periksa kembali form!</div>');
            redirect('member_system/edit_profile');
         }
      }
      
      if ($check_name != null && $check_name->id_peminjam != $update['id_peminjam']) {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama sudah digunakan!</div>');
         redirect('member_system/edit_profile');
      } else {
         if ($update) {
            $update = $this->model_basic->update('tbl_peminjam', $update, 'id_peminjam', $update['id_peminjam']);
            // $this->returnJson(array('status' => 'ok', 'msg' => 'Update data berhasil', 'redirect' => 'peminjam'));
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update data berhasil!</div>');
            redirect('member_system/profile');
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Periksa kembali form!</div>');
            redirect('member_system/edit_profile');
         }
      }
   }
   function changepassword()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      // $data['tbl_peminjam'] = $this->db->get_where('tbl_peminjam', ['email' => $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
      $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
      $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

      if ($this->form_validation->run() == false) {
         $data['content'] = $this->load->view('frontend/member_system/changepassword', $data, true);
         $this->load->view('frontend/index', $data);
      } else {
         $current_password = $this->input->post('current_password');
         $new_password = $this->input->post('new_password1');
         $update['password'] = $this->encrypt->encode($new_password['password']);
         $check_password = $this->model_basic->select_where('tbl_peminjam', 'password', $update['password'])->row();
         // if (password_verify($current_password, $data['userdata']['password'])) {
         if ($check_password != null && $check_password->id_peminjam != $update['id_peminjam']) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
            redirect('member_system/changepassword');
         } else {
            // Jika password lama = password baru
            if ($current_password == $new_password) {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
               redirect('member_system/changepassword');
            }
            if ($update) {
               $do_update = $this->model_basic->update('tbl_peminjam', $update, 'id_peminjam', $update['id_peminjam']);
               // Jika password sudah OK
               // $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
               // $password_hash = $this->encrypt->encode($new_password['password']);

               // $this->db->set('password', $password_hash);
               // $this->db->where('email', $this->session_peminjam['email']);
               // $this->db->update('tbl_peminjam');

               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
               redirect('member_system/changepassword');
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Changed Password missed!</div>');
               redirect('member_system/changepassword');
            }
         }
         // $data = [
         //    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
         // ];
      }
   }

   function barang()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $data['data'] = $this->model_basic->select_where('tbl_barang', 'status', 'tampilkan')->result();
      $data['content'] = $this->load->view('frontend/member_system/barang', $data, true);
      $this->load->view('frontend/index', $data);
   }

   function barang_pinjam()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $id = $this->input->post('id');
      $data['data'] = $this->model_basic->select_where('tbl_barang', 'id_barang', $id)->row();
      $data['content'] = $this->load->view('frontend/member_system/barang_pinjam', $data, true);
      $this->load->view('frontend/index', $data);
   }

   function barang_pinjam_act()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $table_field = $this->db->list_fields('tbl_pinjam');
      $insert = array();
      foreach ($table_field as $field) {
         $insert[$field] = $this->input->post($field);
      }
      $limit = array(
         'id_peminjam' => $this->session_peminjam['id_peminjam'],
         'id_barang' => $insert['id_barang']
      );

      $check = $this->model_basic->select_where('tbl_barang', 'id_barang', $insert['id_barang'])->row();
      $limits = $this->model_basic->select_where_array('tbl_pinjam', $limit)->result();
      $check_limit = 0;
      foreach ($limits as $limit) {
         $check_limit += $limit->jml;
      }
      if ($check_limit + $insert['jml'] > '10') {
         $this->returnJson(array('status' => 'error', 'msg' => 'Jumlah Pinjam Maksimal Adalah 10!'));
      } else {
         if ($check->stock < $insert['jml']) {
            $this->returnJson(array('status' => 'error', 'msg' => 'Stock Kurang!'));
         } elseif ($insert['jml'] <= '0') {
            $this->returnJson(array('status' => 'error', 'msg' => 'Jumlah Pinjam Tidak Boleh Nol!'));
         } else {
            if ($insert) {
               $update['stock'] = $check->stock - $insert['jml'];
               $do_update = $this->model_basic->update('tbl_barang', $update, 'id_barang', $insert['id_barang']);
               $do_insert = $this->model_basic->insert_all('tbl_pinjam', $insert);
               $this->returnJson(array('status' => 'ok', 'msg' => 'Pinjam Barang Berhasil', 'redirect' => 'pinjam'));
            } else {
               $this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
            }
         }
      }
   }

   function bahan()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $data['data'] = $this->model_basic->select_where('tbl_bahan', 'status', 'tampilkan')->result();
      $data['content'] = $this->load->view('frontend/member_system/bahan', $data, true);
      $this->load->view('frontend/index', $data);
   }

   function bahan_pakai()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $id = $this->input->post('id');
      $data['data'] = $this->model_basic->select_where('tbl_bahan', 'id_bahan', $id)->row();
      $data['content'] = $this->load->view('frontend/member_system/bahan_pakai', $data, true);
      $this->load->view('frontend/index', $data);
   }

   function bahan_pakai_act()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $table_field = $this->db->list_fields('tbl_pakai');
      $insert = array();
      foreach ($table_field as $field) {
         $insert[$field] = $this->input->post($field);
      }
      $limit = array(
         'id_peminjam' => $this->session_peminjam['id_peminjam'],
         'id_bahan' => $insert['id_bahan']
      );

      $check = $this->model_basic->select_where('tbl_bahan', 'id_bahan', $insert['id_bahan'])->row();
      $limits = $this->model_basic->select_where_array('tbl_pakai', $limit)->result();
      $check_limit = 0;
      foreach ($limits as $limit) {
         $check_limit += $limit->jml;
      }
      if ($check_limit + $insert['jml'] > '40') {
         $this->returnJson(array('status' => 'error', 'msg' => 'Jumlah Pakai Maksimal Adalah 40!'));
      } else {
         if ($check->stock < $insert['jml']) {
            $this->returnJson(array('status' => 'error', 'msg' => 'Stock Kurang!'));
         } elseif ($insert['jml'] <= '0') {
            $this->returnJson(array('status' => 'error', 'msg' => 'Jumlah Pakai Tidak Boleh Nol!'));
         } else {
            if ($insert) {
               $update['stock'] = $check->stock - $insert['jml'];
               $do_update = $this->model_basic->update('tbl_bahan', $update, 'id_bahan', $insert['id_bahan']);
               $do_insert = $this->model_basic->insert_all('tbl_pakai', $insert);
               $this->returnJson(array('status' => 'ok', 'msg' => 'Pakai Bahan Berhasil', 'redirect' => 'bahan'));
            } else {
               $this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
            }
         }
      }
   }
   function pakai()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $data['data'] = $this->model_basic->select_where_join('tbl_pakai', 'tbl_pakai.*,tbl_bahan.nama_bahan,tbl_bahan.merk', 'id_peminjam', $this->session_peminjam['id_peminjam'], 'tbl_bahan', 'tbl_pakai.id_bahan', 'tbl_bahan.id_bahan')->result();
      $data['content'] = $this->load->view('frontend/member_system/pakai', $data, true);
      $this->load->view('frontend/index', $data);
   }

   function pinjam()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $data['data'] = $this->model_basic->select_where_join('tbl_pinjam', 'tbl_pinjam.*,tbl_barang.name,tbl_barang.kode_alat,tbl_barang.merk,,tbl_barang.desc,tbl_barang.satuan', 'id_peminjam', $this->session_peminjam['id_peminjam'], 'tbl_barang', 'tbl_pinjam.id_barang', 'tbl_barang.id_barang')->result();
      $data['content'] = $this->load->view('frontend/member_system/pinjam', $data, true);
      $this->load->view('frontend/index', $data);
   }

   function pinjam_kembali()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $id = $this->input->post('id');
      $tgl_kembali = $this->input->post('tgl_kembali');
      $update['status'] = '2';
      $update['tgl_kembali'] = $tgl_kembali;

      if ($update) {
         $do_update = $this->model_basic->update('tbl_pinjam', $update, 'id_pinjam', $id);
         if ($do_update) {
            redirect('member_system/pinjam');
         }
      }
   }

   function riwayat()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $data['data'] = $this->model_basic->select_where_join_2('tbl_riwayat', 'tbl_riwayat.*,tbl_barang.name as name_barang,tbl_barang.merk,tbl_barang.satuan as satuan,tbl_peminjam.name as name_peminjam', 'tbl_riwayat.id_peminjam', $this->session_peminjam['id_peminjam'], 'tbl_barang', 'tbl_riwayat.id_barang', 'tbl_barang.id_barang', 'tbl_peminjam', 'tbl_riwayat.id_peminjam', 'tbl_peminjam.id_peminjam')->result();
      $data['content'] = $this->load->view('frontend/member_system/riwayat', $data, true);
      $this->load->view('frontend/index', $data);
   }

   function riwayat_pakai()
   {
      $this->check_login_peminjam();
      $data['userdata'] = $this->session_peminjam;
      $data['data'] = $this->model_basic->select_where_join_2('tbl_riwayat_pakai', 'tbl_riwayat_pakai.*,tbl_bahan.nama_bahan as nama_bahan,tbl_peminjam.name as name_peminjam', 'tbl_riwayat_pakai.id_peminjam', $this->session_peminjam['id_peminjam'], 'tbl_bahan', 'tbl_riwayat_pakai.id_bahan', 'tbl_bahan.id_bahan', 'tbl_peminjam', 'tbl_riwayat_pakai.id_peminjam', 'tbl_peminjam.id_peminjam')->result();
      $data['content'] = $this->load->view('frontend/member_system/riwayat_pakai', $data, true);
      $this->load->view('frontend/index', $data);
   }
}
