<?php 

class Siswa_model extends CI_model {
    public function getAllSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nisn" => $this->input->post('nisn', true),
            "nis" => $this->input->post('nis', true),
            "nama" => $this->input->post('nama', true),
            "id_kelas" => $this->input->post('id_kelas', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "id_spp" => $this->input->post('id_spp', true)
        ];

        $this->db->insert('siswa', $data);
    }

    public function hapusDataSiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('siswa', ['id' => $id]);
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row_array();
    }

    public function ubahDataSiswa()
    {
        $data = [
           "nisn" => $this->input->post('nisn', true),
            "nis" => $this->input->post('nis', true),
            "nama" => $this->input->post('nama', true),
            "id_kelas" => $this->input->post('id_kelas', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "id_spp" => $this->input->post('id_spp', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa', $data);
    }

    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nisn', $keyword);
        $this->db->or_like('nis', $keyword);
        $this->db->or_like('id_kelas', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('no_telp', $keyword);
        $this->db->or_like('id_spp', $keyword);
        return $this->db->get('Siswa')->result_array();
    }
}