<?php

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Petugas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Petugas';
        $data['petugas'] = $this->Petugas_model->getAllPetugas();
        if( $this->input->post('keyword') ) {
            $data['petugas'] = $this->Petugas_model->cariDataPetugas();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('petugas/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Petugas';

        $this->form_validation->set_rules('id_petugas', 'id_petugas', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama_petugas', 'nama_petugas', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('petugas/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Petugas_model->tambahDataPetugas();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('petugas');
        }
    }

    public function hapus($id)
    {
        $this->Petugas_model->hapusDataPetugas($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('petugas');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data petugas';
        $data['petugas'] = $this->Petugas_model->getPetugasById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('petugas/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data petugas';
        $data['petugas'] = $this->Petugas_model->getPetugasById($id);
       

        $this->form_validation->set_rules('id_petugas', 'id_petugas', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama_petugas', 'nama_petugas', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('petugas/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Petugas_model->ubahDataPetugas();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('petugas');
        }
    }

}
