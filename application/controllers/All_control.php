<?php

class All_control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('All_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Sepatu';
        $data['all'] = $this->All_model->getAll();
        if( $this->input->post('keyword') ) {
            $data['all'] = $this->All_model->cariData();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('all/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Sepatu';

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');
        $this->form_validation->set_rules('ukuran', 'ukuran', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('all/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->All_model->tambahData();
            $this->session->set_flashdata('success', 'Ditambahkan');
            redirect('All_control');
        }
    }

    public function hapus($id)
    {
        $this->All_model->hapusData($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('All_control');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Sepatu';
        $data['all'] = $this->All_model->GetId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('all/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Sepatu';
        $data['all'] = $this->All_model->GetId($id);

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');
        $this->form_validation->set_rules('ukuran', 'ukuran', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('all/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->All_model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('All_control');
        }
    }

}
