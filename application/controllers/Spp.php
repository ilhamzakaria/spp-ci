<?php

class Spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Spp_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Spp';
        $data['spp'] = $this->Spp_model->getAllSpp();
        if( $this->input->post('keyword') ) {
            $data['spp'] = $this->Spp_model->cariDataSpp();
        }
        $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
        $this->load->view('spp/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data spp';

        $this->form_validation->set_rules('id_spp', 'Id_spp', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('nominal', 'Nominal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
             $this->load->view('templates/sidebar', $data);
            $this->load->view('spp/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Spp_model->tambahDataSpp();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('spp');
        }
    }

    public function hapus($id)
    {
        $this->Spp_model->hapusDataSpp($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('spp');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Spp';
        $data['spp'] = $this->Spp_model->getSppById($id);
        $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
        $this->load->view('spp/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Spp';
        $data['spp'] = $this->Spp_model->getSppById($id);
        // $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

       $this->form_validation->set_rules('id_spp', 'Id_spp', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('nominal', 'Nominal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
             $this->load->view('templates/sidebar', $data);
            $this->load->view('spp/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Spp_model->ubahDataSpp();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('spp');
        }
    }

}
