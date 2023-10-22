<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }


    public function index()
    {
        $data = array(
            'title'     => 'Home',
            'barang'    => $this->m_home->get_all_data_home(),
            'isi'       => 'v_home',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, false);
    }

    public function kategori($id_kategori)
    {
        $kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title'     => 'Kategori Barang :',
            'barang'    => $this->m_home->get_all_data_barangkategori($id_kategori),
            'isi'       => 'v_kategori_barang',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, false);
    }

    public function detail_barang($id_barang)
    {
        $data = array(
            'title'     => 'Detail_Barang',
            //'gambar'    => $this->m_home->gambar_barang($id_barang),
            'barang'    => $this->m_home->detail_barang($id_barang),
            'isi'       => 'v_detail_barang',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, false);
    }
}

/* End of file Controllername.php */
