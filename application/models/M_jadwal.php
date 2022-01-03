<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jadwal extends CI_Model
{
  public function add()
  {
    $data = [
      'hari' => $this->input->post('hari'),
      'dokter' => $this->input->post('dokter'),
      'poli' => $this->input->post('poli'),
    ];

    $this->db->insert('tbl_dokter', $data);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('regist', '<div class="alert alert-success" role="alert">Anda Berhasil Mendaftar, Silakan Daftar Antrean!</div>');
      redirect('admin/jadwalDokter', 'refresh');
    }
  }

  function get_row($id)
  {
    return $this->db->get_where('tbl_dokter', ['id' => $id])->row_array();
  }

  function update()
  {
    $data = [
      'hari' => $this->input->post('hari'),
      'dokter' => $this->input->post('dokter'),
      'poli' => $this->input->post('poli'),
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_dokter', $data);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('regist', '<div class="alert alert-success" role="alert">Anda Berhasil Mendaftar, Silakan Daftar Antrean!</div>');
      redirect('admin/jadwalDokter', 'refresh');
    }
  }
}
