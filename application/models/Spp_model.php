<?php 

class Spp_model extends CI_model {
    public function getAllSpp()
    {
        return $this->db->get('spp')->result_array();
    }

    public function tambahDataSpp()
    {
        $data = [
            "id_spp" => $this->input->post('id_spp', true),
            "tahun" => $this->input->post('tahun', true),
            "nominal" => $this->input->post('nominal', true)
        ];

        $this->db->insert('spp', $data);
    }

    public function hapusDataSpp($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('spp', ['id' => $id]);
    }

    public function getSppById($id)
    {
        return $this->db->get_where('spp', ['id' => $id])->row_array();
    }

    public function ubahDataSpp()
    {
        $data = [
           "id_spp" => $this->input->post('id_spp', true),
            "tahun" => $this->input->post('tahun', true),
            "nominal" => $this->input->post('nominal', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('spp', $data);
    }

    public function cariDataSpp()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_spp', $keyword);
        $this->db->or_like('tahun', $keyword);
        $this->db->or_like('nominal', $keyword);
        return $this->db->get('spp')->result_array();
    }
}