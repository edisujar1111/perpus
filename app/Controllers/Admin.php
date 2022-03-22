<?php

namespace App\Controllers;


use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Master;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\ThirdParty\fpdf\FPDF;

class Admin extends BaseController
{
    protected $buku;
    protected $anggota;

    public function __construct()
    {

        $this->buku = new Buku();
        $this->anggota = new Anggota();
    }
    public function index()
    {
        $data = [
            'page' => 'Home',
            'buku' => $this->buku->get_jumlah(),
            'anggota' => $this->anggota->anggota_count(),
            'subpage' => null,
        ];
        return view('admin/home', $data);
    }

    public function data_kembali()
    {
        $data = [
            'page' => 'Data Pengembalian',
            'subpage' => null,
        ];
        return view('admin/data_kembali', $data);
    }
    public function data_peminjaman()
    {
        $data = [
            'page' => 'Data Peminjaman',
            'subpage' => null,
        ];
        return view('admin/data_peminjaman', $data);
    }

    // bagian buku
    public function data_buku()
    {
        $data = [
            'd_buku' => $this->buku->get_buku(),
            'page' => 'Buku',
            'subpage' => null,
        ];
        return view('admin/data_buku', $data);
    }
    private function get_kode()
    {
        $kd_buku = $this->buku->get_count();
        $kodeBukuSekarang = $kd_buku + 1;
        $kodeBuku = 'B' . sprintf("%04s", $kodeBukuSekarang);
        return $kodeBuku;
    }
    public function tambah_buku()
    {
        $data = [
            'kode' => $this->get_kode(),
            'page' => 'Buku',
            'subpage' => 'Tambah Buku',
            'validasi' => \Config\Services::validation()
        ];
        return view('admin/form/form_tambah_buku', $data);
    }
    public function edit_buku($kd)
    {
        $d_buku = $this->buku->get_buku($kd);
        $data = [
            'buku' => $d_buku->getRow(),
            'page' => 'Buku',
            'subpage' => 'Edit Buku',
            'validasi' => \Config\Services::validation()
        ];
        return view('admin/form/form_edit_buku', $data);
    }
    public function simpan_buku()
    {
        if (!$this->validate([
            'j_buku' => [
                'rules'  => 'required|is_unique[tbl_buku.judul_buku]',
                'errors' => [
                    'required' => 'judul buku harus diisi',
                    'is_unique' => 'Buku sudah ada'
                ],
            ],
            'penerbit' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'field buku harus diisi',
                ],
            ],
            'jumlah' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'jumlah harus diisi',
                    'integer' => 'jumlah harus angka'
                ]
            ],
            'isbn' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'field harus diisi',
                    'integer' => 'isbn harus angka'
                ]
            ]
        ])) {
            $valid = \Config\Services::validation();
            return redirect()->to('/admin/tambah-buku')->withInput()->with('validasi', $valid);
        }
        $this->buku->save([
            'k_buku' => $this->request->getPost('kb'),
            'judul_buku' => $this->request->getPost('j_buku'),
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit' => $this->request->getPost('penerbit'),
            'jumlah' => $this->request->getPost('jumlah'),
            'isbn' => $this->request->getPost('isbn'),
        ]);
        return redirect()->to('/admin/data-master');
    }
    public function delete_buku($kd)
    {
        $this->buku->delete_buku($kd);
        return redirect()->to('/admin/buku');
    }
    public function ubah_buku($kd)
    {
        $d_buku = $this->buku->get_buku($kd)->getRow();
        if ($d_buku->judul_buku == $this->request->getVar('j_buku')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[tbl_buku.judul_buku]';
        }
        if (!$this->validate([
            'j_buku' => [
                'rules'  => $rule_judul,
                'errors' => [
                    'required' => 'judul buku harus diisi',
                    'is_unique' => 'Buku sudah ada'
                ],
            ],
            'penerbit' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'field buku harus diisi',
                ],
            ],
            'jumlah' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'jumlah harus diisi',
                    'integer' => 'jumlah harus angka'
                ]
            ],
            'isbn' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'field harus diisi',
                    'integer' => 'isbn harus angka'
                ]
            ]
        ])) {
            $valid = \Config\Services::validation();
            return redirect()->to('/admin/edit-buku')->withInput()->with('validasi', $valid);
        }
        $data = [
            'k_buku' => $this->request->getPost('kb'),
            'judul_buku' => $this->request->getPost('j_buku'),
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit' => $this->request->getPost('penerbit'),
            'jumlah' => $this->request->getPost('jumlah'),
            'isbn' => $this->request->getPost('isbn'),
        ];
        $this->buku->update_buku($kd, $data);
        return redirect()->to('/admin/data-master');
    }

    // end buku

    //bagian anggota
    public function data_anggota()
    {
        $data = [
            'd_anggota' => $this->anggota->get_anggota(),
            'page' => 'Anggota',
            'subpage' => null,
        ];
        return view('admin/data_anggota', $data);
    }
    public function print($nis)
    {
        $anggota = $this->anggota->get_anggota($nis);
        $nis = $anggota->getRow();
        $data = [
            'kepala_sekolah' => 'EDI SUJARWINTO',
            'nama_sekolah_b' => 'SDN 1 SUKAREMA',
            'kota' => 'Sukarema',
            'tanggal' => get_tanggal(date('d-m-Y')),
            'anggota' => $anggota->getRow()
        ];
        // return view('admin/cetak_kartu', $data);
        $dompdf = new Dompdf();
        $html = view('admin/cetak_kartu', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream(strval(date('h:i:s') . '-' . $nis->nis) . '.pdf', array('Attachment' => 0));
    }

    public function tambah_anggota()
    {
        $data = [
            'd_anggota' => $this->anggota->get_anggota(),
            'page' => 'Anggota',
            'subpage' => 'Tambah Anggota',
            'validasi' => \Config\Services::validation()
        ];
        return view('admin/form/form_tambah_anggota', $data);
    }
    public function edit_anggota($nis)
    {
        $data = [
            'd_anggota' => $this->anggota->get_anggota($nis)->getRow(),
            'page' => 'Anggota',
            'subpage' => 'Edit Anggota',
            'validasi' => \Config\Services::validation()
        ];
        return view('admin/form/form_edit_anggota', $data);
    }
    public function simpan_edit_anggota($nis)
    {
        $nis_a = $this->anggota->get_anggota($nis)->getRow();
        if ($nis_a->nis == $this->request->getVar('nis')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[tbl_anggota.nis]';
        }
        if (!$this->validate([
            'nis' => [
                'rules'  => $rule_judul,
                'errors' => [
                    'required' => 'NIS tidak boleh kosong',
                    'is_unique' => 'Buku sudah ada'
                ],
            ],
            'nama_anggota' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ],
            ],
            'jk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
            'tmp_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
            'thn_masuk' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'field harus diisi',
                    'integer' => 'data yang anda masukkan tidak sesuai'
                ]
            ],
            'thn_selesai' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'field harus diisi',
                    'integer' => 'data yang anda masukkan tidak sesuai'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
        ])) {
            $valid = \Config\Services::validation();
            return redirect()->to('/admin/anggota/edit-anggota')->withInput()->with('validasi', $valid);
        }
        $get_ttl = $this->request->getPost('tmp_lahir') . ', ' . $this->request->getPost('tgl_lahir');
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama_anggota' => $this->request->getPost('nama_anggota'),
            'j_kelamin' => $this->request->getPost('jk'),
            'kelas' => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat'),
            'ttl' => $get_ttl,
            'thn_masuk' => $this->request->getPost('thn_masuk'),
            'thn_selesai' => $this->request->getPost('thn_selesai'),
        ];
        $this->anggota->update_anggota($nis, $data);
        return redirect()->to('/admin/anggota');
    }
    public function anggota_save()
    {
        if (!$this->validate([
            'nis' => [
                'rules'  => 'required|is_unique[tbl_anggota.nis]',
                'errors' => [
                    'required' => 'NIS tidak boleh kosong',
                    'is_unique' => 'Buku sudah ada'
                ],
            ],
            'nama_anggota' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ],
            ],
            'jk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
            'tmp_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
            'thn_masuk' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'field harus diisi',
                    'integer' => 'data yang anda masukkan tidak sesuai'
                ]
            ],
            'thn_selesai' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'field harus diisi',
                    'integer' => 'data yang anda masukkan tidak sesuai'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field harus diisi',
                ]
            ],
        ])) {
            $valid = \Config\Services::validation();
            return redirect()->to('/admin/anggota/tambah-anggota')->withInput()->with('validasi', $valid);
        }
        $get_ttl = $this->request->getPost('tmp_lahir') . ', ' . $this->request->getPost('tgl_lahir');
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama_anggota' => $this->request->getPost('nama_anggota'),
            'j_kelamin' => $this->request->getPost('jk'),
            'kelas' => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat'),
            'ttl' => $get_ttl,
            'thn_masuk' => $this->request->getPost('thn_masuk'),
            'thn_selesai' => $this->request->getPost('thn_selesai'),
        ];
        $this->anggota->save($data);
        return redirect()->to('/admin/anggota');
    }

    public function kosong()
    {
        $nis_a = $this->buku->get_count();
        echo ($this->anggota->anggota_count());
    }
}
