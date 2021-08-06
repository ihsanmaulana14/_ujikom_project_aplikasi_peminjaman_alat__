<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends PX_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index()
   {
      if ($this->session->userdata('peminjam') != FALSE) {
         redirect('member/dashboard');
      } else
         redirect('member/login');
   }

   function login()
   {
      if ($this->session->userdata('peminjam') != FALSE) {
         redirect('member/dashboard');
      } else
         $this->load->view('frontend/member/login');
   }

   function dashboard()
   {
      $data['userdata'] = $this->session_peminjam;
      if ($this->session->userdata('peminjam') == FALSE) {
         redirect('member');
      } else
         $jml_barang = $this->model_basic->select_where('tbl_barang', 'status', 'tampilkan')->result();
      $jml_pinjam = $this->model_basic->select_where('tbl_pinjam', 'id_peminjam', $this->session_peminjam['id_peminjam'])->result();
      $ttl_barang = 0;
      foreach ($jml_barang as $stock) {
         $ttl_barang += $stock->stock;
      }
      $ttl_pinjam = 0;
      foreach ($jml_pinjam as $jml) {
         $ttl_pinjam += $jml->jml;
      }
      if ($this->session->userdata('peminjam') == FALSE) {
         redirect('member');
      } else
         $jml_bahan = $this->model_basic->select_where('tbl_bahan', 'status', 'tampilkan')->result();
      $jml_pakai = $this->model_basic->select_where('tbl_riwayat_pakai', 'id_peminjam', $this->session_peminjam['id_peminjam'])->result();
      $ttl_bahan = 0;
      foreach ($jml_bahan as $stock) {
         $ttl_bahan += $stock->stock;
      }
      $ttl_pakai = 0;
      foreach ($jml_pakai as $jml) {
         $ttl_pakai += $jml->jml;
      }

      $data['ttl_barang'] = $ttl_barang;
      $data['ttl_pinjam'] = $ttl_pinjam;
      $data['ttl_bahan'] = $ttl_bahan;
      $data['ttl_pakai'] = $ttl_pakai;
      $data['content'] = $this->load->view('frontend/member/dashboard', $data, true);
      $this->load->view('frontend/index', $data);
   }

   public function do_login()
   {
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->view('frontend/member/login');
      } else {
         $this->_login();
      }
   }

   private function _login()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user_data = $this->model_basic->select_where('tbl_peminjam', 'email', $email)->row();
      if ($user_data) {

         if ($this->encryption->decrypt($user_data->password) == $password) {
            $data_user = array(
               'id_peminjam' => $user_data->id_peminjam,
               'email' => $user_data->email,
               'password' => $password,
               'name' => $user_data->name,
               'kelas' => $user_data->kelas

            );
            $this->session->set_userdata('peminjam', $data_user);
            echo "<script>
					alert('Berhasil! Anda akan dialihkan');
               window.location='" . base_url('member_system/profile') . "'
					</script>";
         } else
            echo "<script>
					alert('Login gagal! password anda salah.');
               window.location='" . base_url('member/do_login') . "'
					</script>";
      } else
         echo "<script>
					alert('Login gagal! email tidak terdaftar.');
               window.location='" . base_url('member/do_login') . "'
					</script>";
   }

   function do_logout()
   {
      if ($this->session->userdata('peminjam') != FALSE) {
         $this->session->unset_userdata('peminjam');
         redirect('home');
      } else
         redirect('home');
   }
}
