<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tes extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title'     => 'Rekomendasiin',
            'isi'       => 'v_mulai',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, FALSE);
    }

    public function saw_bobot_kriter_hp()
    {
        $data = array(
            'title'     => 'Rekomendasiin',
            'isi'       => 'v_saw_bobot_kriter_hp',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, FALSE);
    }

    public function saw_hasil_hp()
    {
        $data = array(
            'title'     => 'Rekomendasiin',
            'isi'       => 'v_saw_hasil_hp',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, FALSE);
    }

    public function error_null_barang()
    {
        $data = array(
            'title'     => 'Rekomendasiin',
            'isi'       => 'v_error_null_barang',
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}
