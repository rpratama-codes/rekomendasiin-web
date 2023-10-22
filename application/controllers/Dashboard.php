<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
        $this->load->model('m_dashboard');
        $this->load->model('m_kriteria');
        $this->load->model('m_barang');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title'     => 'Kategori',
            'kategori'  => $this->m_kategori->get_all_data_kategori(),
            'isi'       => 'v_dashboard',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, false);
    }

    public function kriteria($id_kategori)
    {
        $data = array(
            'title'     => 'pilihan kriteria',
            'kriteria'  => $this->m_dashboard->kriteria_barang($id_kategori),
            'isi'       => 'v_home_two',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, false);
    }

    public function filter($data)
    {

        $data = array(
            'title'     => 'pilihan kriteria',
            'filter'    => $this->m_dashboard->filter_soc($data),
            'isi'       => 'v_filter',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, false);
    }
}
