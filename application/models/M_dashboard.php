<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_dashboard extends CI_Model
{
    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->order_by('id_kategori', 'desc');
        return $this->db->get()->result();
    }
    public function kriteria_barang($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('kriteria');
        $this->db->join('kategori', 'kategori.id_kategori = kriteria.id_kategori', 'left');
        $this->db->where('kriteria.id_kategori', $id_kategori);
        return $this->db->get()->result();
    }

    public function filter_soc($data)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('kriteria', 'kriteria.id_kategori = barang.id_kategori', 'left');
        $this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori', 'left');
        $this->db->where('barang.id_kategori', $data);
        return $this->db->get()->result();
    }
}
