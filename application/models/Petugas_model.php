<?php 

class Petugas_model extends CI_model {
    public function getAllPetugas()
    {
        return $this->db->get('petugas')->result_array();
    }

    public function tambahDataPetugas()
    {
        $data = [
            "id_petugas" => $this->input->post('id_petugas', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "nama_petugas" => $this->input->post('nama_petugas', true),
            "level" => $this->input->post('level', true)
        ];

        $this->db->insert('petugas', $data);
    }

    public function hapusDataPetugas($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('Petugas', ['id' => $id]);
    }

    public function getPetugasById($id)
    {
        return $this->db->get_where('petugas', ['id' => $id])->row_array();
    }

    public function ubahDataPetugas()
    {
        $data = [
            "id_petugas" => $this->input->post('id_petugas', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "nama_petugas" => $this->input->post('nama_petugas', true),
            "level" => $this->input->post('level', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('petugas', $data);
    }

    public function cariDataPetugas()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_petugas', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('password', $keyword);
        $this->db->or_like('nama_petugas', $keyword);
        $this->db->or_like('level', $keyword);
        return $this->db->get('petugas')->result_array();
    }
}