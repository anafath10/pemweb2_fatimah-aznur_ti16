<?php
class DosenModel extends CI_Model
{
    private $tabel = 'dosen';
    public function getAll()
    {
        // ! SELECT * from dosen;
        $query = $this->db->get($this->tabel);
        return $query->result();
    }

    // public function findById($id)
    // {
    //     $this->db->where("kode", $id);
    //     $query = $this->db->get($this->tabel);
    //     return $query;
    // }
}
