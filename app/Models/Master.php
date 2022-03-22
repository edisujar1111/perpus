<?php

namespace App\Models;

use CodeIgniter\Model;

class Master extends Model
{

    public function get_denda($id_denda = null)
    {
        if ($id_denda == null) {
            $builder = $this->db->table('denda');
            $builder->select('*');
            $query = $builder->get();
            return $query;
        }
        $builder = $this->db->table('denda');
        $builder->select('*');
        $builder->where('id_denda', $id_denda);
        $query = $builder->get()->getRow();
        return $query;
    }
    public function get_count($count)
    {
        if ($count == 'denda') {
            $builder = $this->db->table('denda');
            $builder->select('*');
            $query = $builder->countAllResults();
            return $query;
        }
    }
    public function tambah_denda($data)
    {
        $builder = $this->db->table('denda');
        $builder->select('*');
        $query = $builder->insert($data);
        return $query;
    }
    public function edit_denda($id_denda, $data)
    {
        $builder = $this->db->table('denda');
        $builder->select('*');
        $builder->where('id_denda', $id_denda);
        $query = $builder->update($data);
        return $query;
    }
    public function delete_denda($id_denda)
    {
        $builder = $this->db->table('denda');
        $builder->select('*');
        $builder->where('id_denda', $id_denda);
        $query = $builder->delete();
        return $query;
    }
    public function get_kategori($id_kategori = null)
    {
        if ($id_kategori == null) {
            $builder = $this->db->table('kategori');
            $builder->select('*');
            $query = $builder->get();
            return $query;
        }
        $builder = $this->db->table('kategori');
        $builder->select('*');
        $builder->where('id_kategori', $id_kategori);
        $query = $builder->get()->getRow();
        return $query;
    }
    public function get_tambah_kategori($data)
    {
        $builder = $this->db->table('kategori');
        $builder->select('*');
        $query = $builder->insert($data);
        return $query;
    }
    public function get_edit_kategori($id_kategori, $data)
    {
        $builder = $this->db->table('kategori');
        $builder->select('*');
        $builder->where('id_kategori', $id_kategori);
        $query = $builder->update($data);
        return $query;
    }
    public function get_delete_kategori($id_kategori)
    {
        $builder = $this->db->table('kategori');
        $builder->select('*');
        $builder->where('id_kategori', $id_kategori);
        $query = $builder->delete();
        return $query;
    }
    public function get_rak($id_rak = null)
    {
        if ($id_rak == null) {
            $builder = $this->db->table('rak');
            $builder->select('*');
            $query = $builder->get();
            return $query;
        }
        $builder = $this->db->table('rak');
        $builder->select('*');
        $builder->where('id_kategori', $id_rak);
        $query = $builder->get()->getRow();
        return $query;
    }
}
