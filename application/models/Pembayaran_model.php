<?php 

class Pembayaran_model extends CI_model {
    public function getAllPembayaran()
    {
        return $this->db->get('pembayaran')->result_array();
    }

    public function tambahDataPembayaran()
    {
        $data = [
            "id_pembayaran" => $this->input->post('id_pembayaran', true),
            "id_petugas" => $this->input->post('id_petugas', true),
            "nisn" => $this->input->post('nisn', true),
            "tgl_bayar" => $this->input->post('tgl_bayar', true),
            "bulan_dibayar" => $this->input->post('bulan_dibayar', true),
            "tahun_dibayar" => $this->input->post('tahun_dibayar', true),
            "id_spp" => $this->input->post('id_spp', true),
            "jumlah_bayar" => $this->input->post('jumlah_bayar', true)
        ];

        $this->db->insert('pembayaran', $data);
    }

    public function hapusDataPembayaran($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('pembayaran', ['id' => $id]);
    }

    public function getPembayaranById($id)
    {
        return $this->db->get_where('pembayaran', ['id' => $id])->row_array();
    }

    public function ubahDataPembayaran()
    {
        $data = [
            "id_pembayaran" => $this->input->post('id_pembayaran', true),
            "id_petugas" => $this->input->post('id_petugas', true),
            "nisn" => $this->input->post('nisn', true),
            "tgl_bayar" => $this->input->post('tgl_bayar', true),
            "bulan_dibayar" => $this->input->post('bulan_dibayar', true),
            "tahun_dibayar" => $this->input->post('tahun_dibayar', true),
            "id_spp" => $this->input->post('id_spp', true),
            "jumlah_bayar" => $this->input->post('jumlah_bayar', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pembayaran', $data);
    }

    public function cariDataPembayaran()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_pembayaran', $keyword);
        $this->db->or_like('id_petugas', $keyword);
        $this->db->or_like('nisn', $keyword);
        $this->db->or_like('tgl_biaya', $keyword);
        $this->db->or_like('bulan_dibayar', $keyword);
        $this->db->or_like('tahun_dibayar', $keyword);
        $this->db->or_like('id_spp', $keyword);
        $this->db->or_like('jumlah_bayar', $keyword);
        return $this->db->get('pembayaran')->result_array();
    }
}