<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_kriteria extends CI_Model
{
    // List all your items
    public function get_all_data_kriteria()
    {
        $this->db->select('*');
        $this->db->from('kriteria');
        $this->db->join('kategori', 'kategori.id_kategori = kriteria.id_kategori', 'left');

        $this->db->order_by('id_kriteria', 'desc');
        return $this->db->get()->result();
    }
    public function add($data)
    {
        $this->db->insert(
            'kriteria',
            $data
        );
    }
    public function edit($data)
    {
        $this->db->where('id_kriteria', $data['id_kriteria']);
        $this->db->update(
            'kriteria',
            $data
        );
    }
    public function delete($data)
    {
        $this->db->where('id_kriteria', $data['id_kriteria']);
        $this->db->delete(
            'kriteria',
            $data
        );
    }
}
