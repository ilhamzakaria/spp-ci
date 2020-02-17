<?php 

class Kelas_model extends CI_model {
    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function tambahDataKelas()
    {
        $data = [
            "id_kelas" => $this->input->post('id_kelas', true),
            "nama_kelas" => $this->input->post('nama_kelas', true),
            "kompetensi_keahlian" => $this->input->post('kompetensi_keahlian', true)
        ];

        $this->db->insert('kelas', $data);
    }

    public function hapusDataKelas($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('kelas', ['id' => $id]);
    }

    public function getKelasById($id)
    {
        return $this->db->get_where('kelas', ['id' => $id])->row_array();
    }

    public function ubahDataKelas()
    {
        $data = [
            "id_kelas" => $this->input->post('id_kelas', true),
            "nama_kelas" => $this->input->post('nama_kelas', true),
            "kompetensi_keahlian" => $this->input->post('kompetensi_keahlian', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kelas', $data);
    }

    public function cariDataKelas()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_kelas', $keyword);
        $this->db->or_like('nama_kelas', $keyword);
        $this->db->or_like('kompetensi_keahlian', $keyword);
        return $this->db->get('kelas')->result_array();
    }
}