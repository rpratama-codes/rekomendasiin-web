<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_two extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kriteria');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title'     => 'home_two',
            'kriteria'  => $this->m_kriteria-->get_all_data_kriteria(),
            'isi'       => 'v_home_two',
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }
}
