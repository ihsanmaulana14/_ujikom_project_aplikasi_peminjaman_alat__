 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Admin_system extends PX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('px_helper');
		}

		public function index()
		{
		}
		// * peminjam * //
		function peminjam()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_all('tbl_peminjam');
			$data['content'] = $this->load->view('backend/admin_system/peminjam', $data, true);
			$this->load->view('backend/index', $data);
		}

		function peminjam_form()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			if ($id) {
				$data['data'] = $this->model_basic->select_where('tbl_peminjam', 'id_peminjam', $id)->row();
			} else {
				$data['data'] = null;
			}
			$data['content'] = $this->load->view('backend/admin_system/peminjam_form', $data, true);
			$this->load->view('backend/index', $data);
		}

		function peminjam_add()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_peminjam');
			$insert = array();
			foreach ($table_field as $field) {
				$insert[$field] = $this->input->post($field);
			}
			$insert['password'] = $this->encryption->encrypt($insert['password']);
			$check_email = $this->model_basic->select_where('tbl_peminjam', 'email', $insert['email'])->row();
			if ($check_email != null) {
				$this->returnJson(array('status' => 'error', 'msg' => 'email sudah digunakan!'));
			} else {
				if ($insert) {
					$do_insert = $this->model_basic->insert_all('tbl_peminjam', $insert);
					$this->returnJson(array('status' => 'ok', 'msg' => 'Insert data berhasil', 'redirect' => 'peminjam'));
				} else {
					$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
				}
			}
		}

		function peminjam_update()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_peminjam');
			$update = array();
			foreach ($table_field as $field) {
				$update[$field] = $this->input->post($field);
			}
			$update['password'] = $this->encryption->encrypt($update['password']);
			$check_email = $this->model_basic->select_where('tbl_peminjam', 'email', $update['email'])->row();
			if ($check_email != null && $check_email->id_peminjam != $update['id_peminjam']) {
				$this->returnJson(array('status' => 'error', 'msg' => 'email sudah digunakan!'));
			} else {
				if ($update) {
					$do_update = $this->model_basic->update('tbl_peminjam', $update, 'id_peminjam', $update['id_peminjam']);
					$this->returnJson(array('status' => 'ok', 'msg' => 'Update data berhasil', 'redirect' => 'peminjam'));
				} else {
					$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
				}
			}
		}

		function peminjam_delete()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			$do_delete = $this->model_basic->delete('tbl_peminjam', 'id_peminjam', $id);
			if ($do_delete) {
				redirect('admin_system/peminjam');
			} else {
			}
		}

		//----petugas----//
		function petugas()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_all('tbl_petugas');
			$data['content'] = $this->load->view('backend/admin_system/petugas', $data, true);
			$this->load->view('backend/index', $data);
		}
		function petugas_form()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			if ($id) {
				$data['data'] = $this->model_basic->select_where('tbl_petugas', 'id_petugas', $id)->row();
			} else {
				$data['data'] = null;
			}
			$data['content'] = $this->load->view('backend/admin_system/petugas_form', $data, true);
			$this->load->view('backend/index', $data);
		}

		function petugas_add()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
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
					$this->returnJson(array('status' => 'ok', 'msg' => 'Insert data berhasil', 'redirect' => 'petugas'));
				} else {
					$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
				}
			}
		}

		function petugas_update()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_petugas');
			$update = array();
			foreach ($table_field as $field) {
				$update[$field] = $this->input->post($field);
			}
			$update['password'] = $this->encryption->encrypt($update['password']);
			$check_email = $this->model_basic->select_where('tbl_petugas', 'email', $update['email'])->row();
			if ($check_email != null && $check_email->id_petugas != $update['id_petugas']) {
				$this->returnJson(array('status' => 'error', 'msg' => 'email sudah digunakan!'));
			} else {
				if ($update) {
					$do_update = $this->model_basic->update('tbl_petugas', $update, 'id_petugas', $update['id_petugas']);
					$this->returnJson(array('status' => 'ok', 'msg' => 'Update data berhasil', 'redirect' => 'petugas'));
				} else {
					$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
				}
			}
		}

		function petugas_delete()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			$do_delete = $this->model_basic->delete('tbl_petugas', 'id_petugas', $id);
			if ($do_delete) {
				redirect('admin_system/petugas');
			} else {
			}
		}



		//----barang----//
		function barang()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_all('tbl_barang');
			$data['content'] = $this->load->view('backend/admin_system/barang', $data, true);
			$this->load->view('backend/index', $data);
		}

		function barang_form()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			if ($id) {
				$data['data'] = $this->model_basic->select_where('tbl_barang', 'id_barang', $id)->row();
			} else {
				$data['data'] = null;
			}
			$data['content'] = $this->load->view('backend/admin_system/barang_form', $data, true);
			$this->load->view('backend/index', $data);
		}

		function barang_add()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_barang');
			$insert = array();
			foreach ($table_field as $field) {
				$insert[$field] = $this->input->post($field);
			}
			$check_name = $this->model_basic->select_where('tbl_barang', 'desc', $insert['desc'])->row();
			if ($check_name != null) {
				$this->returnJson(array('status' => 'error', 'msg' => 'Alat dengan nomor seri yang sama sudah ada!'));
			} else {
				if ($insert) {
					$do_insert = $this->model_basic->insert_all('tbl_barang', $insert);
					$this->returnJson(array('status' => 'ok', 'msg' => 'Insert data berhasil', 'redirect' => 'barang'));
				} else {
					$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
				}
			}
		}

		function barang_update()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_barang');
			$update = array();
			foreach ($table_field as $field) {
				$update[$field] = $this->input->post($field);
			}
			$check_desc = $this->model_basic->select_where('tbl_barang', 'desc', $update['desc'])->row();
			if ($check_desc != null && $check_desc->id_barang != $update['id_barang']) {
				$this->returnJson(array('status' => 'error', 'msg' => 'Alat dengan nomor seri yang sama sudah ada!'));
			} else {
				if ($update) {
					$do_update = $this->model_basic->update('tbl_barang', $update, 'id_barang', $update['id_barang']);
					$this->returnJson(array('status' => 'ok', 'msg' => 'Update data berhasil', 'redirect' => 'barang'));
				} else {
					$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
				}
			}
		}

		function barang_delete()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			$do_delete = $this->model_basic->delete('tbl_barang', 'id_barang', $id);
			if ($do_delete) {
				redirect('admin_system/barang');
			} else {
			}
		}

		//----bahan----//
		function bahan()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_all('tbl_bahan');
			$data['content'] = $this->load->view('backend/admin_system/bahan', $data, true);
			$this->load->view('backend/index', $data);
		}

		function bahan_form()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			if ($id) {
				$data['data'] = $this->model_basic->select_where('tbl_bahan', 'id_bahan', $id)->row();
			} else {
				$data['data'] = null;
			}
			$data['content'] = $this->load->view('backend/admin_system/bahan_form', $data, true);
			$this->load->view('backend/index', $data);
		}
		function bahan_add()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_bahan');
			$insert = array();
			foreach ($table_field as $field) {
				$insert[$field] = $this->input->post($field);
			}
			$check_name = $this->model_basic->select_where('tbl_bahan', 'nama_bahan', $insert['nama_bahan'])->row();
			if ($check_name != null) {
				$this->returnJson(array('status' => 'error', 'msg' => 'bahan sudah ada!'));
			} else {
				if ($insert) {
					$do_insert = $this->model_basic->insert_all('tbl_bahan', $insert);
					$this->returnJson(array('status' => 'ok', 'msg' => 'Insert data berhasil', 'redirect' => 'bahan'));
				} else {
					$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
				}
			}
		}

		function bahan_update()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_bahan');
			$update = array();
			foreach ($table_field as $field) {
				$update[$field] = $this->input->post($field);
			}
			$check_name = $this->model_basic->select_where('tbl_bahan', 'nama_bahan', $update['nama_bahan'])->row();
			if ($check_name != null && $check_name->id_bahan != $update['id_bahan']) {
				$this->returnJson(array('status' => 'error', 'msg' => 'Nama bahan sudah digunakan!'));
			} else {
				if ($update) {
					$do_update = $this->model_basic->update('tbl_bahan', $update, 'id_bahan', $update['id_bahan']);
					$this->returnJson(array('status' => 'ok', 'msg' => 'Update data berhasil', 'redirect' => 'bahan'));
				} else {
					$this->returnJson(array('status' => 'error', 'msg' => 'Periksa kembali form'));
				}
			}
		}

		function bahan_delete()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			$do_delete = $this->model_basic->delete('tbl_bahan', 'id_bahan', $id);
			if ($do_delete) {
				redirect('admin_system/bahan');
			} else {
			}
		}

		// ----pakai----//
		function pakai()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_where_join_2('tbl_pakai', 'tbl_pakai.*,tbl_bahan.nama_bahan as name_bahan,tbl_bahan.merk,tbl_peminjam.name as name_pemakai,tbl_peminjam.kelas', 'tbl_pakai.status', '0', 'tbl_bahan', 'tbl_pakai.id_bahan', 'tbl_bahan.id_bahan', 'tbl_peminjam', 'tbl_pakai.id_peminjam', 'tbl_peminjam.id_peminjam')->result();
			$data['content'] = $this->load->view('backend/admin_system/pakai', $data, true);
			$this->load->view('backend/index', $data);
		}

		function pakai_setujui()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_riwayat_pakai');
			$insert = array();
			foreach ($table_field as $field) {
				$insert[$field] = $this->input->post($field);
			}

			$check = $this->model_basic->select_where('tbl_bahan', 'id_bahan', $insert['id_bahan'])->row();
			if ($insert) {
				$do_insert = $this->model_basic->insert_all('tbl_riwayat_pakai', $insert);
				$do_delete = $this->model_basic->delete('tbl_pakai', 'id_pakai', $insert['id_pakai']);
				if ($do_insert && $do_delete) {
					redirect('admin_system/pakai');
				}
			}
		}

		function pakai_tolak()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_riwayat');
			$insert = array();
			foreach ($table_field as $field) {
				$insert[$field] = $this->input->post($field);
			}

			$check = $this->model_basic->select_where('tbl_bahan', 'id_bahan', $insert['id_bahan'])->row();
			if ($insert) {
				$update['stock'] = $check->stock + $insert['jml'];
				$do_insert = $this->model_basic->insert_all('tbl_riwayat', $insert);
				$do_update = $this->model_basic->update('tbl_bahan', $update, 'id_bahan', $insert['id_bahan']);
				$do_delete = $this->model_basic->delete('tbl_pakai', 'id_pakai', $insert['id_pakai']);
				if ($do_insert && $do_delete && $do_update) {
					redirect('admin_system/pakai');
				}
			}
		}


		function riwayat_pakai()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_all_join_2('tbl_riwayat_pakai', 'tbl_riwayat_pakai.*,tbl_bahan.nama_bahan as name_bahan,tbl_bahan.merk,tbl_peminjam.name as name_pemakai,tbl_peminjam.kelas', 'tbl_bahan', 'tbl_riwayat_pakai.id_bahan', 'tbl_bahan.id_bahan', 'tbl_peminjam', 'tbl_riwayat_pakai.id_peminjam', 'tbl_peminjam.id_peminjam');
			$data['content'] = $this->load->view('backend/admin_system/riwayat_pakai', $data, true);
			$this->load->view('backend/index', $data);
		}
		function riwayat_pakai_delete()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			$do_delete = $this->model_basic->delete('tbl_riwayat_pakai', 'id_pakai', $id);
			if ($do_delete) {
				redirect('admin_system/riwayat_pakai');
			} else {
			}
		}

		function riwayat_pakai_clear()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$this->db->empty_table('tbl_riwayat_pakai');
			redirect('admin_system/riwayat_pakai');
		}


		//----pinjam----//
		function pinjam()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_where_join_2('tbl_pinjam', 'tbl_pinjam.*,tbl_barang.name as name_barang,tbl_barang.kode_alat,tbl_barang.merk,,tbl_barang.desc,tbl_barang.satuan,tbl_peminjam.name as name_peminjam,tbl_peminjam.kelas', 'tbl_pinjam.status', '0', 'tbl_barang', 'tbl_pinjam.id_barang', 'tbl_barang.id_barang', 'tbl_peminjam', 'tbl_pinjam.id_peminjam', 'tbl_peminjam.id_peminjam')->result();
			$data['content'] = $this->load->view('backend/admin_system/pinjam', $data, true);
			$this->load->view('backend/index', $data);
		}

		function pinjam_setujui()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			$update['status'] = '1';

			if ($update) {
				$do_update = $this->model_basic->update('tbl_pinjam', $update, 'id_pinjam', $id);
				if ($do_update) {
					redirect('admin_system/pinjam');
				}
			}
		}

		function pinjam_tolak()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_riwayat');
			$insert = array();
			foreach ($table_field as $field) {
				$insert[$field] = $this->input->post($field);
			}

			$check = $this->model_basic->select_where('tbl_barang', 'id_barang', $insert['id_barang'])->row();
			if ($insert) {
				$update['stock'] = $check->stock + $insert['jml'];
				$do_insert = $this->model_basic->insert_all('tbl_riwayat', $insert);
				$do_update = $this->model_basic->update('tbl_barang', $update, 'id_barang', $insert['id_barang']);
				$do_delete = $this->model_basic->delete('tbl_pinjam', 'id_pinjam', $insert['id_pinjam']);
				if ($do_insert && $do_delete && $do_update) {
					redirect('admin_system/pinjam');
				}
			}
		}

		function kembali()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_where_join_2('tbl_pinjam', 'tbl_pinjam.*,tbl_barang.name as name_barang,tbl_barang.kode_alat,tbl_barang.merk,tbl_barang.satuan,tbl_peminjam.name as name_peminjam,tbl_peminjam.kelas', 'tbl_pinjam.status', '2', 'tbl_barang', 'tbl_pinjam.id_barang', 'tbl_barang.id_barang', 'tbl_peminjam', 'tbl_pinjam.id_peminjam', 'tbl_peminjam.id_peminjam')->result();
			$data['content'] = $this->load->view('backend/admin_system/kembali', $data, true);
			$this->load->view('backend/index', $data);
		}

		function kembali_setujui()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$table_field = $this->db->list_fields('tbl_riwayat');
			$insert = array();
			foreach ($table_field as $field) {
				$insert[$field] = $this->input->post($field);
			}

			$check = $this->model_basic->select_where('tbl_barang', 'id_barang', $insert['id_barang'])->row();
			if ($insert) {
				$update['stock'] = $check->stock + $insert['jml'];
				$do_insert = $this->model_basic->insert_all('tbl_riwayat', $insert);
				$do_update = $this->model_basic->update('tbl_barang', $update, 'id_barang', $insert['id_barang']);
				$do_delete = $this->model_basic->delete('tbl_pinjam', 'id_pinjam', $insert['id_pinjam']);
				if ($do_insert && $do_delete && $do_update) {
					redirect('admin_system/kembali');
				}
			}
		}

		function riwayat()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_all_join_2('tbl_riwayat', 'tbl_riwayat.*,tbl_barang.name as name_alat,tbl_barang.satuan as satuan,tbl_barang.merk,tbl_barang.desc,tbl_peminjam.name as name_peminjam,tbl_peminjam.kelas', 'tbl_barang', 'tbl_riwayat.id_barang', 'tbl_barang.id_barang', 'tbl_peminjam', 'tbl_riwayat.id_peminjam', 'tbl_peminjam.id_peminjam');
			$data['content'] = $this->load->view('backend/admin_system/riwayat', $data, true);
			$this->load->view('backend/index', $data);
		}

		function riwayat_clear()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$this->db->empty_table('tbl_riwayat');
			redirect('admin_system/riwayat');
		}

		function riwayat_delete()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$id = $this->input->post('id');
			$do_delete = $this->model_basic->delete('tbl_riwayat', 'id_pinjam', $id);
			if ($do_delete) {
				redirect('admin_system/riwayat');
			} else {
			}
		}

		function riwayat_hapus()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$this->db->empty_table('tbl_riwayat_pakai');
			redirect('admin_system/riwayat_pakai');
		}

		function laporan_pinjam()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_where_join_2('tbl_pinjam', 'tbl_pinjam.*,tbl_barang.name as nama_alat,tbl_barang.kode_alat,tbl_barang.merk,tbl_barang.desc,tbl_barang.satuan as satuan,tbl_peminjam.name as name_peminjam,tbl_peminjam.kelas,tbl_peminjam.email', 'tbl_pinjam.status', '1', 'tbl_barang', 'tbl_pinjam.id_barang', 'tbl_barang.id_barang', 'tbl_peminjam', 'tbl_pinjam.id_peminjam', 'tbl_peminjam.id_peminjam')->result();
			$data['content'] = $this->load->view('backend/admin_system/laporan_pinjam', $data, true);
			$this->load->view('backend/index', $data);
		}
		// * export to excel *//
		public function excel()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_all_join_2('tbl_riwayat', 'tbl_riwayat.*,tbl_barang.name as name_alat,tbl_barang.kode_alat,tbl_barang.satuan as satuan,tbl_barang.merk,tbl_peminjam.name as name_peminjam,tbl_peminjam.kelas', 'tbl_barang', 'tbl_riwayat.id_barang', 'tbl_barang.id_barang', 'tbl_peminjam', 'tbl_riwayat.id_peminjam', 'tbl_peminjam.id_peminjam');

			require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
			require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

			// date_default_timezone_set('Asia/Jakarta');
			$timezone = new DateTimeZone('Asia/Jakarta');
			$date = new DateTime();
			$date->setTimeZone($timezone);
			$object = new PHPExcel();

			$object->getProperties()->setCreator("Petugas");
			$object->getProperties()->setLastModifiedBy("Petugas");
			$object->getProperties()->setTitle("Laporan Peminjaman Alat");

			$object->setActiveSheetIndex(0);
			$object->getActiveSheet()->getStyle('A1')->getFont()->setSize(12);
			$object->getActiveSheet()->getStyle('A2')->getFont()->setSize(14);
			$object->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$object->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$object->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$object->getActiveSheet()->getStyle('A5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$object->getActiveSheet()->getStyle('A6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$object->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$object->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			$object->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
			$object->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
			$object->getActiveSheet()->getStyle('A5')->getFont()->setBold(true);

			$object->getActiveSheet()->getColumnDimension('B')->setWidth('22');
			$object->getActiveSheet()->getColumnDimension('B')->setAutoSize(false);
			$object->getActiveSheet()->getColumnDimension('C')->setWidth('12');
			$object->getActiveSheet()->getColumnDimension('C')->setAutoSize(false);
			$object->getActiveSheet()->getColumnDimension('D')->setWidth('15');
			$object->getActiveSheet()->getColumnDimension('D')->setAutoSize(false);
			$object->getActiveSheet()->getColumnDimension('E')->setWidth('20');
			$object->getActiveSheet()->getColumnDimension('E')->setAutoSize(false);
			$object->getActiveSheet()->getColumnDimension('F')->setWidth('16');
			$object->getActiveSheet()->getColumnDimension('F')->setAutoSize(false);
			$object->getActiveSheet()->getColumnDimension('G')->setWidth('10');
			$object->getActiveSheet()->getColumnDimension('G')->setAutoSize(false);
			$object->getActiveSheet()->getColumnDimension('H')->setWidth('20');
			$object->getActiveSheet()->getColumnDimension('H')->setAutoSize(false);
			$object->getActiveSheet()->getColumnDimension('I')->setWidth('20');
			$object->getActiveSheet()->getColumnDimension('I')->setAutoSize(false);
			$object->getActiveSheet()->getColumnDimension('J')->setWidth('20');
			$object->getActiveSheet()->getColumnDimension('J')->setAutoSize(false);
			// $object->getActiveSheet()->getNumberFormat('A9')->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD2);
			$tanggal = $date->format('d F Y');
			$tahun = $date->format('Y');
			$object->getActiveSheet()->mergeCells('A1:J1')->setCellValue('A1', 'TEKNIK KOMPUTER DAN JARINGAN');
			$object->getActiveSheet()->mergeCells('A2:J2')->setCellValue('A2', 'SMK NEGERI 2 KOTA BEKASI');
			$object->getActiveSheet()->mergeCells('A3:J3')->setCellValue('A3', "$tahun");
			$object->getActiveSheet()->mergeCells('A5:J5')->setCellValue('A5', 'LAPORAN PEMINJAMAN ALAT');
			$object->getActiveSheet()->mergeCells('A6:J6')->setCellValue('A6', "Tanggal : $tanggal");
			// $object->getActiveSheet()->setCellValueByColumnAndRow(8, 8);

			$object->getActiveSheet()->setCellValue('A8', 'No');
			$object->getActiveSheet()->setCellValue('B8', 'Nama Peminjam');
			$object->getActiveSheet()->setCellValue('C8', 'Kelas');
			$object->getActiveSheet()->setCellValue('D8', 'Kode Alat');
			$object->getActiveSheet()->setCellValue('E8', 'Nama Alat');
			$object->getActiveSheet()->setCellValue('F8', 'Merk');
			$object->getActiveSheet()->setCellValue('G8', 'Jumlah');
			$object->getActiveSheet()->setCellValue('H8', 'Tanggal Pinjam');
			$object->getActiveSheet()->setCellValue('I8', 'Tanggal Kembali');
			$object->getActiveSheet()->setCellValue('J8', 'Keterangan');

			$baris = 9;
			$no = 1;


			foreach ($data['data'] as $dt) {
				$object->getActiveSheet()->setCellValue('A' . $baris, $no);
				$object->getActiveSheet()->setCellValue('B' . $baris, $dt->name_peminjam);
				$object->getActiveSheet()->setCellValue('C' . $baris, $dt->kelas);
				$object->getActiveSheet()->setCellValue('D' . $baris, $dt->kode_alat);
				$object->getActiveSheet()->setCellValue('E' . $baris, $dt->name_alat);
				$object->getActiveSheet()->setCellValue('F' . $baris, $dt->merk);
				$object->getActiveSheet()->setCellValue('G' . $baris, $dt->jml);
				$object->getActiveSheet()->setCellValue('H' . $baris, $dt->tgl_pinjam);
				$object->getActiveSheet()->setCellValue('I' . $baris, $dt->tgl_kembali);
				$object->getActiveSheet()->setCellValue('J' . $baris, $dt->ket);

				$baris++;
				$no++;
			}
			$timezone = new DateTimeZone('Asia/Jakarta');
			$date = new DateTime();
			$date->setTimeZone($timezone);

			$tanggal = $date->format('d F Y');
			$filename = "Laporan_peminjaman - $tanggal" . '.xlsx';
			$object->getActiveSheet()->setTitle("Laporan peminjaman");
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-disposition: attachment;filename="' . $filename . '"');
			header('Content-Control:max-age=0');
			$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
			ob_end_clean();
			$writer->save('php://output');
		}

		public function excel_pakai()
		{
			$this->check_login_petugas();
			$data['userdata'] = $this->session_petugas;
			$data['data'] = $this->model_basic->select_all_join_2('tbl_riwayat_pakai', 'tbl_riwayat_pakai.*,tbl_bahan.nama_bahan as name_bahan,tbl_bahan.merk,tbl_peminjam.name as name_pemakai,tbl_peminjam.kelas', 'tbl_bahan', 'tbl_riwayat_pakai.id_bahan', 'tbl_bahan.id_bahan', 'tbl_peminjam', 'tbl_riwayat_pakai.id_peminjam', 'tbl_peminjam.id_peminjam');

			require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
			require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

			$timezone = new DateTimeZone('Asia/Jakarta');
			$date = new DateTime();
			$date->setTimeZone($timezone);
			$object = new PHPExcel();

			$object->getProperties()->setCreator("Petugas");
			$object->getProperties()->setLastModifiedBy("Petugas");
			$object->getProperties()->setTitle("Laporan Pemakaian Bahan");

			$object->setActiveSheetIndex(0);
			// header/kop
			$object->getActiveSheet()->getStyle('A1')->getFont()->setSize(12);
			$object->getActiveSheet()->getStyle('A2')->getFont()->setSize(14);
			$object->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$object->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$object->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$object->getActiveSheet()->getStyle('A5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$object->getActiveSheet()->getStyle('A6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$object->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$object->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			$object->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
			$object->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
			$object->getActiveSheet()->getStyle('A5')->getFont()->setBold(true);

			$tanggal = $date->format('d F Y');
			$tahun = $date->format('Y');
			$object->getActiveSheet()->mergeCells('A1:F1')->setCellValue('A1', 'TEKNIK KOMPUTER DAN JARINGAN');
			$object->getActiveSheet()->mergeCells('A2:F2')->setCellValue('A2', 'SMK NEGERI 2 KOTA BEKASI');
			$object->getActiveSheet()->mergeCells('A3:F3')->setCellValue('A3', "$tahun");
			$object->getActiveSheet()->mergeCells('A5:F5')->setCellValue('A5', 'LAPORAN PEMAKAIAN BAHAN');
			$object->getActiveSheet()->mergeCells('A6:F6')->setCellValue('A6', "Tanggal : $tanggal");

			// table
			$object->getActiveSheet()->setCellValue('A8', 'No');
			$object->getActiveSheet()->setCellValue('B8', 'Nama Pemakai');
			$object->getActiveSheet()->setCellValue('C8', 'Kelas');
			$object->getActiveSheet()->setCellValue('D8', 'Bahan');
			$object->getActiveSheet()->setCellValue('E8', 'Jumlah Pakai');
			$object->getActiveSheet()->setCellValue('F8', 'Tanggal Pakai');

			$baris = 9;
			$no = 1;

			foreach ($data['data'] as $dt) {
				$object->getActiveSheet()->setCellValue('A' . $baris, $no);
				$object->getActiveSheet()->setCellValue('B' . $baris, $dt->name_pemakai);
				$object->getActiveSheet()->setCellValue('C' . $baris, $dt->kelas);
				$object->getActiveSheet()->setCellValue('D' . $baris, $dt->name_bahan);
				$object->getActiveSheet()->setCellValue('E' . $baris, $dt->jml);
				$object->getActiveSheet()->setCellValue('F' . $baris, $dt->tgl_pakai);

				$baris++;
				$no++;
			}
			// file format download
			$timezone = new DateTimeZone('Asia/Jakarta');
			$date = new DateTime();
			$date->setTimeZone($timezone);

			$tanggal = $date->format('d F Y');
			$filename = "Laporan_pemakaian - $tanggal" . '.xlsx';
			$object->getActiveSheet()->setTitle("Laporan pemakaian");
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-disposition: attachment;filename="' . $filename . '"');
			header('Content-Control:max-age=0');
			$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
			ob_end_clean();
			$writer->save('php://output');
		}
	}
