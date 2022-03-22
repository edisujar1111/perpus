<?php

namespace App\Models;

use CodeIgniter\Model;

class Anggota extends Model
{
    protected $table = 'tbl_anggota';
    protected $allowedFields = ['nis', 'nama_anggota', 'j_kelamin', 'kelas', 'alamat', 'ttl', 'thn_masuk', 'thn_keluar'];

    public function get_anggota($nis = null)
    {
        if ($nis == null) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $query = $builder->get();
            return $query;
        }
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('nis', $nis);
        $query = $builder->get();
        return $query;
    }

    public function delete_anggota($kd)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('nis', $kd);
        $query = $builder->delete();
        return $query;
    }
    public function update_anggota($kd, $data)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('nis', $kd);
        $query = $builder->update($data);
        return $query;
    }
    public function anggota_count()
    {
        $builder = $this->db->table($this->table);
        $builder->selectCount('nis');
        $query = $builder->countAllResults();
        return $query;
    }
}
