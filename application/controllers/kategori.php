<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Kategori',
            'kategori' => $this->m_kategori->get_all_data_kategori(),
            'isi' => 'v_kategori',
        );
        $this->load->view('layout/admin/v_wrapper_admin', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->m_kategori->add($data);
        $this->session->set_flashdata('pesan', 'Data berhasil Ditambah');
        redirect('kategori');
    }

    //edit one item
    public function edit($id_kategori)
    {
        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->m_kategori->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil Diedit');
        redirect('kategori');
    }

    //Delete one item
    public function delete($id_kategori)
    {
        $data = array('id_kategori' => $id_kategori);
        $this->m_kategori->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('kategori');
    }
}

/* End of file Kategori.php */
