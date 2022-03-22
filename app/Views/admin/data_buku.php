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
                                    <h6 class="mb-0 text-white">Tabel Buku</h6>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="/admin/buku/tambah-buku"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Buku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="tabel1" class="table-responsive p-0 mt-3 w-100">

                        <table class="table align-items-center" id="mytable">
                            <thead class="bg-gradient-primary">
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Kd. Buku</th>
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Judul</th>
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Penerbit</th>
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Pengarang</th>
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Jumlah</th>
                                <th class="text-white text-uppercase text-secondary text-xxs font-weight-bolder ps-2">ISBN</th>
                                <th class="text-white text-center text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($d_buku->getResult() as $rb) : ?>
                                    <tr class="text-dark">
                                        <td><?= $rb->k_buku; ?></td>
                                        <td><?= $rb->judul_buku; ?></td>
                                        <td><?= $rb->penerbit; ?></td>
                                        <td><?= $rb->pengarang; ?></td>
                                        <td><?= $rb->jumlah; ?></td>
                                        <td><?= $rb->isbn; ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm px-2 py-1 mb-0 bg-gradient-success" href="/admin/buku/edit-buku/<?= $rb->k_buku; ?>" title="edit"><i class="material-icons text-sm">edit</i></a>
                                            <form action="/admin/buku/delete/<?= $rb->k_buku; ?>" method="POST" class="d-inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm px-2 py-1 mb-0 bg-gradient-danger" onclick="return confirm('Apakah anda yakin')" title="Hapus"><i class="material-icons text-sm">delete</i></button>
                                            </form>
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