<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-0">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="border-radius-lg bg-gradient-primary pb-1">
                        <div class="pb-0 p-3 mb-2">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h6 class="mb-0 text-white">Tabel Anggota</h6>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="/admin/anggota/tambah-anggota"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah anggota</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="tabel2" class="table-responsive p-0 mt-3 w-100">
                        <table class="cell-border" id="mytable1">
                            <thead class="bg-gradient-primary">
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Nis</th>
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Nama</th>
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Jenis kelamin</th>
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">TTL</th>
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Alamat</th>
                                <th class="text-white text-center text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($d_anggota->getResult() as $ra) : ?>
                                    <tr class="text-dark">
                                        <td><?= $ra->nis; ?></td>
                                        <td><?= $ra->nama_anggota; ?></td>
                                        <td><?= $ra->j_kelamin; ?></td>
                                        <td><?= $ra->ttl; ?></td>
                                        <td><?= $ra->alamat; ?></td>

                                        <td class="text-center">
                                            <a class="btn btn-sm px-2 py-1 mb-0 bg-gradient-success" href="/admin/anggota/edit-anggota/<?= $ra->nis; ?>" title="edit"><i class="material-icons text-sm">edit</i></a>
                                            <form action="/admin/delete_anggota/<?= $ra->nis; ?>" method="POST" class="d-inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm px-2 py-1 mb-0 bg-gradient-danger" onclick="return confirm('Apakah anda yakin')" title="Hapus"><i class="material-icons text-sm">delete</i></button>
                                            </form>
                                            <a class="btn btn-sm px-2 py-1 mb-0 bg-gradient-success" href="/admin/print/<?= $ra->nis; ?>" target="_blank" title="cetak"><i class="material-icons text-sm">local_printshop</i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>