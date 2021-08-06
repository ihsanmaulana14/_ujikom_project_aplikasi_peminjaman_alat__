<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends PX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('petugas') != FALSE) {
			redirect('admin/dashboard');
		} else
			redirect('admin/login');
	}

	function login()
	{
		if ($this->session->userdata('petugas') != FALSE) {
			redirect('admin/dashboard');
		} else
			$this->load->view('backend/admin/login');
		// $this->load->view('landing_page/index');
	}
	function batal()
	{
		if ($this->session->userdata('petugas') != FALSE) {
			$this->session->unset_userdata('petugas');
			redirect('home');
		} else
			redirect('home');
	}

	function dashboard()
	{
		$data['userdata'] = $this->session_petugas;
		if ($this->session->userdata('petugas') == FALSE) {
			redirect('admin');
		} else
			$jml_barang = $this->model_basic->select_all('tbl_barang');
		$jml_peminjam = $this->model_basic->select_all('tbl_peminjam');
		$jml_pinjam = $this->model_basic->select_all('tbl_pinjam');
		$ttl_barang = 0;
		foreach ($jml_barang as $stock) {
			$ttl_barang += $stock->stock;
		}
		$ttl_pinjam = 0;

		foreach ($jml_pinjam as $jml) {
			$ttl_pinjam += $jml->jml;
		}

		if ($this->session->userdata('petugas') == FALSE) {
			redirect('admin');
		} else
			$jml_bahan = $this->model_basic->select_all('tbl_bahan');
		$jml_pakai = $this->model_basic->select_all('tbl_riwayat_pakai');
		$ttl_bahan = 0;
		foreach ($jml_bahan as $stock) {
			$ttl_bahan += $stock->stock;
		}
		$ttl_pakai = 0;
		foreach ($jml_pakai as $jml) {
			$ttl_pakai += $jml->jml;
		}

		$data['jml_barang'] = count($jml_barang);
		$data['jml_bahan'] = count($jml_bahan);
		$data['jml_peminjam'] = count($jml_peminjam);
		$data['ttl_barang'] = $ttl_barang;
		$data['ttl_bahan'] = $ttl_bahan;
		$data['ttl_pinjam'] = $ttl_pinjam;
		$data['ttl_pakai'] = $ttl_pakai;
		$data['content'] = $this->load->view('backend/admin/dashboard', $data, true);
		$this->load->view('backend/index', $data);
	}

	public function do_login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('backend/admin/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// $user_data = $this->db->get_where('tbl_peminjam', ['email' => $email])->row_array();
		$user_data = $this->model_basic->select_where('tbl_petugas', 'email', $email)->row();
		if ($user_data) {
			if ($this->encryption->decrypt($user_data->password) == $password) {
				$data_user = array(
					'id_petugas' => $user_data->id_petugas,
					'email' => $user_data->email,
					'password' => $password,
					'name' => $user_data->name,

				);
				$this->session->set_userdata('petugas', $data_user);
				echo "<script>
					alert('Berhasil! Anda akan dialihkan');
               window.location='" . base_url('admin/dashboard') . "'
					</script>";
			} else
				echo "<script>
					alert('Login gagal! password anda salah.');
               window.location='" . base_url('admin/do_login') . "'
					</script>";
		} else
			echo "<script>
					alert('Login gagal! email tidak terdaftar.');
               window.location='" . base_url('admin/do_login') . "'
					</script>";
	}

	function do_logout()
	{
		if ($this->session->userdata('petugas') != FALSE) {
			$this->session->unset_userdata('petugas');
			redirect('home');
		} else
			redirect('home');
	}
}
