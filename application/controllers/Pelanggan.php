<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelanggan');
        $this->load->model('m_auth');
    }
    public function syarat()
    {
        $data = array(
            'title' => 'Syarat',
            'isi'   => 'v_syarat',
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function register()
    {
        $this->form_validation->set_rules('nama_pelanggan', 'Full Name', 'required', array('required' => '%s isi'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Member',
                'isi'   => 'v_register',
            );
            $this->load->view('layout/user/v_wrapper_user', $data, FALSE);
        } else {
            $data = array(
                'nama_pelanggan'    => $this->input->post('nama_pelanggan'),
                'email'             => $this->input->post('email'),
                'password'          => $this->input->post('password'),
            );
            $this->m_pelanggan->register($data);
            $this->session->set_flashdata('pesan', 'Register Anda Berhasil..<br> Silahkan Login');
            redirect('pelanggan/login');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'E-mail', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->pelanggan_login->login($email, $password);
        }
        $data = array(
            'title' => 'Login Member',
            'isi'   => 'v_login',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, FALSE);
    }

    public function logout()
    {

        $this->pelanggan_login->logout();
    }

    public function profile()
    {
        //proteksi profile
        $this->pelanggan_login->proteksi_halaman();
        $data = array(
            'title' => 'Profile',
            'isi'   => 'v_profile',
        );
        $this->load->view('layout/user/v_wrapper_user', $data, FALSE);
    }

    // public function edit($id_pelanggan)
    // {
    //     $data = array(
    //         'id_pelanggan'      => $id_pelanggan,
    //         'nama_pelanggan'    => $this->input->post('nama_pelanggan'),
    //         'email'             => $this->input->post('email'),
    //         'password'          => $this->input->post('password'),

    //     );
    //     $this->m_pelanggan->edit($data);
    //     $this->session->set_flashdata('pesan', 'Data berhasil Diedit');
    //     redirect('pelanggan');
    // }

    public function edit($id_pelanggan = null)
    {
        $data = array(
            'id_pelanggan'   => $id_pelanggan,
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'email'          => $this->input->post('email'),
            'password'       => $this->input->post('password'),
            'isi'            => 'v_editprofile'

        );
        $this->m_pelanggan->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil Diedit');
        redirect('pelanggan');
    }

    // public function editprofile($id_pelanggan)
    // {
    //     $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required', array('required' => '%s isi'));

    //     if ($this->form_validation->run() == true) {
    //         $config['upload_path']      = './img/';
    //         $config['allowed_types']    = 'gif|jpg|png|jpeg';
    //         $config['max_size']         = '3000';
    //         $this->upload->initialize($config);

    //         $field_name = "foto";
    //         if (!$this->upload->do_upload($field_name)) {
    //             $data = array(
    //                 'title'         => 'Edit Profile',
    //                 'pelanggan'     => $this->m_pelanggan->editprofile($id_pelanggan),
    //                 'error_upload'  => $this->upload->display_errors(),
    //                 'isi'           => 'v_editprofile',
    //             );
    //             $this->load->view('layout/user/v_wrapper_user', $data, false);
    //         } else {
    //             $upload_data                = array('uploads' => $this->upload->data());
    //             $config['image_library']    = 'gd2';
    //             $config['source_image']     = './img/' . $upload_data['uploads']['file_name'];
    //             $this->load->library('image_lib', $config);

    //             $data = array(
    //                 'id_pelanggan'   => $id_pelanggan,
    //                 'nama_pelanggan' => $this->input->post('nama_pelanggan'),
    //                 'email'          => $this->input->post('email'),
    //                 'password'       => $this->input->post('password'),
    //                 'foto'            => $upload_data['uploads']['file_name'],
    //             );
    //             $this->m_pelanggan->editprofile($data);
    //             $this->session->set_flashdata('pesan', 'Profile berhasil Di Edit');
    //             redirect('profile');
    //         }
    //         //no edit gambar
    //         $data = array(
    //             'id_pelanggan'   => $id_pelanggan,
    //             'nama_pelanggan' => $this->input->post('nama_pelanggan'),
    //             'email'          => $this->input->post('email'),

    //         );
    //         $this->m_pelanggan->editprofile($data);
    //         $this->session->set_flashdata('pesan', 'profile berhasil Di Edit');
    //         redirect('profile');
    //     }

    //     $data = array(
    //         'title'      => 'Edit Profile',
    //         'pelanggan'  => $this->m_pelanggan->editprofile($id_pelanggan),
    //         'isi'        => 'v_editprofile',
    //     );
    //     $this->load->view('layout/user/v_wrapper_user', $data, false);
    // }
}
