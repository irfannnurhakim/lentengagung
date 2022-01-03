<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

	function get_row($id)
	{
		return $this->db->get_where('tbl_pasien', ['id' => $id])->row_array();
	}

	public function regist()
	{
		$data = [
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'tmptlahir' => $this->input->post('tmptlahir'),
			'tgllahir' => $this->input->post('tgllahir'),
			'alamat' => $this->input->post('alamat'),
		];

		$this->db->insert('tbl_pasien', $data);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('regist', '<div class="alert alert-success" role="alert">Anda Berhasil Mendaftar, Silakan Daftar Antrean!</div>');
			redirect('', 'refresh');
		}
	}

	public function antre()
	{
		$nik = $this->db->get_where('tbl_pasien', ['nik' => $this->input->post('nik')])->row_array();

		if ($nik) {
			$data = [
				'nik' => $this->input->post('nik'),
				'nama' => $nik['nama'],
				'poli' => $this->input->post('poli'),
			];

			$this->db->insert('tbl_pendaftaran', $data);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">Anda Berhasil Mendaftar, Silakan Daftar Antrean!</div>');
				redirect('auth/terdaftar', 'refresh');
			}
		} else {
			$this->session->set_flashdata('unregist', '<div class="alert alert-primary" role="alert">Nik tidak terdaftar silakan melakukan registrasi terlebih dahulu!</div>');
			redirect('auth/regist');
		}
	}

	function selesai()
	{
		$query = $this->db->get('tbl_pendaftaran');
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_pasien');
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', '1');
			redirect('admin/datapasien', 'refresh');
		}
	}
}
