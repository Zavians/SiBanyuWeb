<?php
defined('BASEPATH') or exit('No direct script access allowed');
class m_surat_buktinikah extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_surat_buktinikah()
    {
        $this->db->from('surat_buktinikah');
        $this->db->join('penduduk', 'surat_buktinikah.nama_pertama=penduduk.nik');
        $this->db->join('pejabat', 'surat_buktinikah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_surat_buktinikah($data)
    {
        return $this->db->insert('surat_buktinikah', $data);
    }

    public function edit_surat_buktinikah($id)
    {
        $this->db->where('id_surat_buktinikah', $id);
        return $this->db->get('surat_buktinikah')->row();
    }

    public function proses_edit_surat_buktinikah($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('surat_buktinikah', $data);
    }

    public function cetak_surat_buktinikah($id)
    {
        $this->db->from('surat_buktinikah');
        $this->db->where('id_surat_buktinikah', $id);
        $this->db->join('penduduk', 'surat_buktinikah.nama_pertama=penduduk.nik');
        $this->db->join('pejabat', 'surat_buktinikah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function hapus_surat_buktinikah($id)
    {
        $this->db->where('id_surat_buktinikah', $id);
        return $this->db->delete('surat_buktinikah');
    }
}