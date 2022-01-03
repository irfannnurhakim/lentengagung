<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		$this->load->view('pendaftaran/antrean');
		if (isset($_POST['antre'])) {
			$this->M_auth->antre();
		}
	}

	public function regist()
	{
		$this->load->view('pendaftaran/daftar');
		if (isset($_POST['regist'])) {
			$this->M_auth->regist();
		}
	}

	public function terdaftar()
	{
		$data['total'] = $this->M_auth->selesai();
		$this->load->view('pendaftaran/selesai', $data);
	}

	public function jadwal()
	{
		$data['dokter'] = $this->db->get('tbl_dokter')->result_array();
		$this->load->view('pendaftaran/jadwal', $data);
	}
}
