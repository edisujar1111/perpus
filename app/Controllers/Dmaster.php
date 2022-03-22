<?php

namespace App\Controllers;

use App\Models\Master;

class Dmaster extends BaseController
{
    protected $master;
    protected $show;
    public function __construct()
    {
        $this->master = new Master();
        $this->show = null;
    }
    public function data_master()
    {
        $data = [
            'denda' => $this->master->get_denda(),
            'count_denda' => $this->master->get_count('denda'),
            'kategori' => $this->master->get_kategori(),
            'rak' => $this->master->get_rak(),
            'page' => 'Data Master',
            'subpage' => null,
        ];
        return view('admin/data_master', $data);
    }
    //denda
    public function tambah_denda()
    {
        $data = [
            'page' => 'Data Master',
            'subpage' => 'Tambah Denda',
        ];
        return view('admin/form/form_tambah_denda', $data);
    }
    public function proses_tambah_denda()
    {
        $data = [
            'nominal' => $this->request->getVar('nominal'),
        ];
        $this->master->tambah_denda($data);
        session()->setFlashdata('action', 'Data denda berhasil ditambah');
        session()->setFlashdata('show', 'denda');
        return redirect()->to('admin/data-master');
    }
    public function edit_denda($id_denda, $show = null)
    {
        $data = [
            'denda' => $this->master->get_denda($id_denda),
            'page' => 'Data Master',
            'subpage' => 'Ubah Denda',
        ];
        return view('admin/form/form_edit_denda', $data);
    }
    public function get_proses_edit_denda($id)
    {
        $data = [
            'nominal' => $this->request->getVar('nominal'),
        ];
        $this->master->edit_denda($id, $data);
        session()->setFlashdata('action', 'Data denda berhasil diubah');
        session()->setFlashdata('show', 'denda');
        return redirect()->to('admin/data-master');
    }
    public function delete_denda($id_denda)
    {
        $this->master->delete_denda($id_denda);
        session()->setFlashdata('action', 'Data denda berhasil dihapus');
        session()->setFlashdata('show', 'denda');
        return redirect()->to('admin/data-master');
    }
    //end denda
    //Kategori
    public function tambah_kategori()
    {
        $data = [
            'validasi' => \Config\Services::validation(),
            'page' => 'Data Master',
            'subpage' => 'Tambah Kategori',
        ];
        return view('admin/form/form_tambah_kategori', $data);
    }
    public function edit_kategori($id_kategori)
    {
        $data = [
            'kategori' => $this->master->get_kategori($id_kategori),
            'validasi' => \Config\Services::validation(),
            'page' => 'Data Master',
            'subpage' => 'Tambah Kategori',
        ];
        return view('admin/form/form_edit_kategori', $data);
    }
    public function proses_tambah_kategori()
    {
        if (!$this->validate([
            'nama_kategori' => [
                'rules'  => 'required|is_unique[kategori.nama_kategori]',
                'errors' => [
                    'required' => 'field tidak boleh kosong',
                    'is_unique' => 'kategori sudah ada'
                ],
            ]
        ])) {
            $valid = \Config\Services::validation();
            return redirect()->to('/admin/data-master/tambah-kategori')->withInput()->with('validasi', $valid);
        }
        $data = [
            'nama_kategori' => $this->request->getVar('nama_kategori')
        ];
        $this->master->get_tambah_kategori($data);
        session()->setFlashdata('action', 'Data kategori berhasil ditambah');
        session()->setFlashdata('show', 'kategori');
        return redirect()->to('admin/data-master');
    }
    public function proses_edit_kategori($id_kategori)
    {
        $d_kategori = $this->master->get_kategori($id_kategori);
        if ($d_kategori->nama_kategori == $this->request->getVar('nama_kategori')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[kategori.nama_kategori]';
        }
        if (!$this->validate([
            'nama_kategori' => [
                'rules'  => $rule_judul,
                'errors' => [
                    'required' => 'field tidak boleh kosong',
                    'is_unique' => 'kategori sudah ada'
                ],
            ]
        ])) {
            $valid = \Config\Services::validation();
            return redirect()->to('/admin/data-master/tambah-kategori')->withInput()->with('validasi', $valid);
        }
        $data = [
            'nama_kategori' => $this->request->getVar('nama_kategori')
        ];
        $this->master->get_edit_kategori($id_kategori, $data);
        session()->setFlashdata('action', 'Data kategori berhasil diubah');
        session()->setFlashdata('show', 'kategori');
        return redirect()->to('admin/data-master');
    }
    public function delete_kategori($id_kategori)
    {
        $this->master->get_delete_kategori($id_kategori);
        session()->setFlashdata('action', 'Data Kategori berhasil dihapus');
        session()->setFlashdata('show', 'kategori');
        return redirect()->to('admin/data-master');
    }
}
