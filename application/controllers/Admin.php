<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('login/login');
		$this->load->view('templates/footer');
		if (isset($_POST['login'])) {
			$this->_login();
		}
	}
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tbl_admin', ['email' => $email])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$this->session->set_userdata('login', '1');
				$this->session->set_userdata('email', $user['email']);
				redirect('admin/landingPage', 'refresh');
			} else {
				$this->session->set_flashdata('salah_login', '1');
				redirect('admin', 'refresh');
			}
		} else {
			$this->session->set_flashdata('salah_login', '1');
			redirect('admin', 'refresh');
		}
	}

	public function logout()
	{
		if ($this->session->userdata('login') == '1') {
			session_destroy();
			redirect('admin', 'refresh');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}

	public function landingPage()
	{
		if ($this->session->userdata('login') == '1') {
			$data['nama'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
			$data['data_pasien'] = $this->db->get('tbl_pasien')->num_rows();
			$data['data_pendaftar'] = $this->db->get('tbl_pendaftaran')->num_rows();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/dashbord', $data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}

	public function pendaftaran()
	{
		if ($this->session->userdata('login') == '1') {
			$data['pendaftaran'] = $this->db->get('tbl_pendaftaran')->result_array();
			$data['nama'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/pendaftaran', $data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}

	public function datapasien()
	{
		if ($this->session->userdata('login') == '1') {
			$data['pasien'] = $this->db->get('tbl_pasien')->result_array();
			$data['nama'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/datapasien', $data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}

	public function jadwalDokter()
	{
		if ($this->session->userdata('login') == 1) {
			$data['dokter'] = $this->db->get('tbl_dokter')->result_array();
			$data['nama'] = $this->db->get('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/jadwalDokter', $data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}

	public function offline()
	{
		if ($this->session->userdata('login') == '1') {
			$data = [
				'nik' => 'offline',
				'nama' => 'offline',
				'poli' => 'offline',
			];

			$this->db->insert('tbl_pendaftaran', $data);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('berhasil', '1');
				redirect('admin/pendaftaran', 'refresh');
			}
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}

	public function deleteAll()
	{
		if ($this->session->userdata('login') == '1') {
			$this->db->empty_table('tbl_pendaftaran');
			$this->session->set_flashdata('dihapus', '1');
			redirect('admin/pendaftaran');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}


	public function delete($id)
	{
		if ($this->session->userdata('login') == '1') {
			$this->M_auth->delete($id);
			redirect('admin/datapasien', 'refresh');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}
}
