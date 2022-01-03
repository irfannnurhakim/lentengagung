<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jadwal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jadwal');
	}
	public function add()
	{
		if ($this->session->userdata('login') == '1') {
			$data['nama'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('dokter/add');
			$this->load->view('templates/footer');

			if (isset($_POST['submit'])) {
				$this->M_jadwal->add();
			}
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}

	public function edit($id)
	{
		if ($this->session->userdata('login') == '1') {
			$data['dokter'] = $this->M_jadwal->get_row($id);
			$data['nama'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('dokter/edit');
			$this->load->view('templates/footer');
			if (isset($_POST['submit'])) {
				$this->M_jadwal->update();
			}
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}

	function delete($id)
	{
		if ($this->session->userdata('login') == '1') {
			$this->db->where('id', $id);
			$this->db->delete('tbl_dokter');
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('pesan', 'Dihapus');
				redirect('admin/jadwalDokter', 'refresh');
			}
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}

	function deleteAll()
	{
		if ($this->session->userdata('login') == '1') {
			$this->db->empty_table('tbl_dokter');
			redirect('admin/jadwalDokter');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('admin', 'refresh');
		}
	}
}
