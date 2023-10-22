<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
        $this->load->model('m_kriteria');
        $this->load->model('m_barang');
    }
    


    public function index()
    {
        $data = array(
            'title'     => 'Kriteria',
            'kategori'  => $this->m_kategori->get_all_data_kategori(),
            'kriteria'  => $this->m_kriteria->get_all_data_kriteria(),
            'isi'       => 'v_kriteria',
        );
        $this->load->view('layout/admin/v_wrapper_admin', $data, false);
    }

    public function add()
    {
        $data = array(
            'id_kategori'   => $this->input->post('id_kategori'),
            'nama_kriteria' => $this->input->post('nama_kriteria')
        );
        $this->m_kriteria->add($data);
        $this->session->set_flashdata('pesan', 'Data berhasil Ditambah');
        redirect('kriteria');
    }
    public function edit($id_kriteria)
    {
        $data = array(
            'id_kriteria'   => $id_kriteria,
            'id_kategori'   => $this->input->post('id_kategori'),
            'nama_kriteria' => $this->input->post('nama_kriteria')
        );
        $this->m_kriteria->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil Diedit');
        redirect('kriteria');
    }
    public function delete($id_kriteria)
    {
        $data = array('id_kriteria' => $id_kriteria);
        $this->m_kriteria->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('kriteria');
    }
}
