<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku extends Model
{
    protected $table = 'tbl_buku';

    protected $allowedFields = ['k_buku', 'judul_buku', 'pengarang', 'penerbit', 'jumlah', 'isbn'];
    public function get_buku($kd = null)
    {
        if ($kd == null) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $query = $builder->get();
            return $query;
        }
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('k_buku', $kd);
        $query = $builder->get();
        return $query;
    }
    public function get_count()
    {
        $builder = $this->db->table($this->table);
        $builder->select('jumlah');
        $query = $builder->countAllResults();
        return $query;
    }
    public function get_jumlah()
    {
        $builder = $this->db->table($this->table);
        $builder->selectSum('jumlah');
        $query = $builder->get();
        return $query;
    }
    public function delete_buku($kd)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('k_buku', $kd);
        $query = $builder->delete();
        return $query;
    }
    public function update_buku($kd, $data)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('k_buku', $kd);
        $query = $builder->update($data);
        return $query;
    }
}
