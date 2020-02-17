<?php

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pembayaran';
        $data['pembayaran'] = $this->Pembayaran_model->getAllPembayaran();
        if( $this->input->post('keyword') ) {
            $data['pembayaran'] = $this->Pembayaran_model->cariDataPembayaran();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pembayaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pembayaran';

        // $this->form_validation->set_rules('nama', 'Nama', 'required');
        // $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('id_pembayaran', 'Id_pembayaran');
        $this->form_validation->set_rules('id_petugas', 'Id_petugas');
        $this->form_validation->set_rules('nisn', 'Nisn', 'required');
        $this->form_validation->set_rules('tgl_bayar', 'Tgl_bayar');
        $this->form_validation->set_rules('bulan_dibayar', 'Bulan_dibayar');
        $this->form_validation->set_rules('tahun_dibayar', 'Tahun_dibayar');
        $this->form_validation->set_rules('id_spp', 'Id_spp');
        $this->form_validation->set_rules('jumlah_bayar', 'Jumlah_bayar');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
             $this->load->view('templates/sidebar', $data);
            $this->load->view('pembayaran/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pembayaran_model->tambahDataPembayaran();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pembayaran');
        }
    }

    public function hapus($id)
    {
        $this->Pembayaran_model->hapusDataPembayaran($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pembayaran');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pembayaran';
        $data['pembayaran'] = $this->Pembayaran_model->getPembayaranById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pembayaran/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pembayaran';
        $data['pembayaran'] = $this->Pembayaran_model->getPembayaranById($id);
        // $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        // $this->form_validation->set_rules('nama', 'Nama', 'required');
        // $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $this->form_validation->set_rules('id_pembayaran', 'Id_pembayaran', 'required');
        $this->form_validation->set_rules('id_petugas', 'Id_petugas', 'required');
        $this->form_validation->set_rules('nisn', 'Nisn', 'required');
        $this->form_validation->set_rules('tgl_bayar', 'Tgl_bayar', 'required');
        $this->form_validation->set_rules('bulan_dibayar', 'Bulan_dibayar', 'required');
        $this->form_validation->set_rules('tahun_dibayar', 'Tahun_dibayar', 'required');
        $this->form_validation->set_rules('id_spp', 'Id_spp', 'required');
        $this->form_validation->set_rules('jumlah_bayar', 'Jumlah_bayar', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pembayaran/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pembayaran_model->ubahDataPembayaran();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pembayaran');
        }
    }

}
