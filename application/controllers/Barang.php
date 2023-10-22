<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');
        $this->load->model('m_kategori');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Barang',
            'barang' => $this->m_barang->get_all_data_barang(),
            'isi' => 'barang/v_barang',
        );
        $this->load->view('layout/admin/v_wrapper_admin', $data, false);
    }

    // Add a new item
    public function addbarang()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('soc', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('ram', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('rom', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('kamera', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('layar', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('nfc', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('jaringan', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('battre', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('harga', 'Harga Barang', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('berat', 'Berat Barang', 'required', array('required' => '%s isi'));


        if ($this->form_validation->run() == true) {
            $config['upload_path']      = './gambar/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '3000';
            $this->upload->initialize($config);

            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title'         => 'Tambah Barang',
                    'kategori'      => $this->m_kategori->get_all_data_kategori(),
                    'error_upload'  => $this->upload->display_errors(),
                    'isi'           => 'barang/v_addbarang',
                );
                $this->load->view('layout/admin/v_wrapper_admin', $data, false);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_barang' => $this->input->post('nama_barang'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'soc'         => $this->input->post('soc'),
                    'ram'         => $this->input->post('ram'),
                    'rom'         => $this->input->post('rom'),
                    'kamera'      => $this->input->post('kamera'),
                    'layar'       => $this->input->post('layar'),
                    'nfc'         => $this->input->post('nfc'),
                    'jaringan'    => $this->input->post('jaringan'),
                    'battre'      => $this->input->post('battre'),
                    'harga'       => $this->input->post('harga'),
                    'berat'       => $this->input->post('berat'),
                    'gambar'      => $upload_data['uploads']['file_name'],
                );
                $this->m_barang->add($data);
                $this->session->set_flashdata('pesan', 'Data berhasil Ditambah');
                redirect('barang');
            }
        }

        $data = array(
            'title'      => 'Tambah Barang',
            'kategori'   => $this->m_kategori->get_all_data_kategori(),
            'isi'        => 'barang/v_addbarang',
        );
        $this->load->view('layout/admin/v_wrapper_admin', $data, false);
    }

    //Update one item
    public function edit($id_barang)
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('soc', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('ram', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('rom', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('kamera', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('layar', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('nfc', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('jaringan', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('battre', 'Keterangan', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('harga', 'Harga Barang', 'required', array('required' => '%s isi'));
        $this->form_validation->set_rules('berat', 'Berat Barang', 'required', array('required' => '%s isi'));


        if ($this->form_validation->run() == true) {
            $config['upload_path']      = './gambar/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = '3000';
            $this->upload->initialize($config);

            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title'         => 'Edit Barang',
                    'kategori'      => $this->m_kategori->get_all_data_kategori(),
                    'barang'        => $this->m_barang->get_data_barang($id_barang),
                    'error_upload'  => $this->upload->display_errors(),
                    'isi'           => 'barang/v_edit',
                );
                $this->load->view('layout/admin/v_wrapper_admin', $data, false);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_barang'   => $id_barang,
                    'nama_barang' => $this->input->post('nama_barang'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'soc'         => $this->input->post('soc'),
                    'ram'         => $this->input->post('ram'),
                    'rom'         => $this->input->post('rom'),
                    'kamera'      => $this->input->post('kamera'),
                    'layar'       => $this->input->post('layar'),
                    'nfc'         => $this->input->post('nfc'),
                    'jaringan'    => $this->input->post('jaringan'),
                    'battre'      => $this->input->post('battre'),
                    'harga'       => $this->input->post('harga'),
                    'berat'       => $this->input->post('berat'),
                    'gambar'      => $upload_data['uploads']['file_name'],
                );
                $this->m_barang->edit($data);
                $this->session->set_flashdata('pesan', 'Data berhasil Di Edit');
                redirect('barang');
            }
            //no edit gambar
            $data = array(
                'id_barang'   => $id_barang,
                'nama_barang' => $this->input->post('nama_barang'),
                'id_kategori' => $this->input->post('id_kategori'),
                'soc'         => $this->input->post('soc'),
                'ram'         => $this->input->post('ram'),
                'rom'         => $this->input->post('rom'),
                'kamera'      => $this->input->post('kamera'),
                'layar'       => $this->input->post('layar'),
                'nfc'         => $this->input->post('nfc'),
                'jaringan'    => $this->input->post('jaringan'),
                'battre'      => $this->input->post('battre'),
                'harga'       => $this->input->post('harga'),
                'berat'       => $this->input->post('berat'),
            );
            $this->m_barang->edit($data);
            $this->session->set_flashdata('pesan', 'Data berhasil Di Edit');
            redirect('barang');
        }

        $data = array(
            'title'      => 'Edit Barang',
            'kategori'   => $this->m_kategori->get_all_data_kategori(),
            'barang'     => $this->m_barang->get_data_barang($id_barang),
            'isi'        => 'barang/v_edit',
        );
        $this->load->view('layout/admin/v_wrapper_admin', $data, false);
    }

    //Delete one item
    public function delete($id_barang)
    {
        //hapus gambar
        $barang = $this->m_barang->get_data_barang($id_barang);
        if ($barang->gambar != "") {
            unlink('./gambar/' . $barang->gambar);
        }
        $data = array('id_barang' => $id_barang);
        $this->m_barang->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('barang');
    }
}

/* End of file Barang_hp.php */
