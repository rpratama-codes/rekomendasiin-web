<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_laporan');
    }

    public function index()
    {
        $data = array(
            'title' => 'Laporan Penjualan',
            'isi' => 'v_laporan',
        );
        $this->load->view('layout/admin/v_wrapper_admin', $data, FALSE);
    }

    public function harian()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan   = $this->input->post('bulan');
        $tahun   = $this->input->post('tahun');
        $data = array(
            'title'     => 'Laporan Harian',
            'tanggal'   => $tanggal,
            'bulan'     => $bulan,
            'tahun'     => $tahun,
            'laporan'   => $this->m_laporan->harian($tanggal, $bulan, $tahun),
            'isi'       => 'v_harian',
        );
        $this->load->view('layout/admin/v_wrapper_admin', $data, FALSE);
    }

    public function bulanan()
    {
        $bulan   = $this->input->post('bulan');
        $tahun   = $this->input->post('tahun');
        $data = array(
            'title'     => 'Laporan Bulanan',
            'bulan'     => $bulan,
            'tahun'     => $tahun,
            'laporan'   => $this->m_laporan->bulanan($bulan, $tahun),
            'isi'       => 'v_bulanan',
        );
        $this->load->view('layout/admin/v_wrapper_admin', $data, FALSE);
    }

    public function tahunan()
    {
        $tahun   = $this->input->post('tahun');
        $data = array(
            'title'     => 'Laporan Tahunan',
            'tahun'     => $tahun,
            'laporan'   => $this->m_laporan->tahunan($tahun),
            'isi'       => 'v_tahunan',
        );
        $this->load->view('layout/admin/v_wrapper_admin', $data, FALSE);
    }
}

/* End of file Controllername.php */
