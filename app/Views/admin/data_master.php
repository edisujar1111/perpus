<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-0">
    <div class="row">

        <div class="col-12">
            <div class="card my-4">
                <div class="card-header">
                    <?php if (session()->getFlashdata('action') != null) : ?>
                        <div class="text-white alert alert-success" role="alert">
                            <?= session()->getFlashdata('action'); ?>
                        </div>
                    <?php endif; ?>
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link <?= (session()->getFlashdata('show') == 'kategori') ? 'active' : ((session()->getFlashdata('show') == null) ? 'active' : ''); ?>" data-bs-toggle="tab" href="#kategori">Kategori Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (session()->getFlashdata('show') == 'rak') ? 'active' : ''; ?>" data-bs-toggle="tab" href="#rak">Rak Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (session()->getFlashdata('show') == 'denda') ? 'active' : ''; ?>" data-bs-toggle="tab" href="#denda">Denda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (session()->getFlashdata('show') == 'sekolah') ? 'active' : ''; ?>" data-bs-toggle="tab" href="#menu3">Profil Sekolah</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div id="kategori" class="table-responsive tab-pane fade <?= (session()->getFlashdata('show') == 'kategori') ? 'active show' : ((session()->getFlashdata('show') == null) ? 'active show' : ''); ?>">
                            <div class="col-12 mb-3">
                                <a class="btn btn-sm btn-dark" href="<?= base_url('admin/data-master/tambah-kategori'); ?>"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah</a>
                            </div>
                            <table class="cell-border" id="mytable">
                                <thead class="bg-gradient-primary">
                                    <th></th>
                                    <th class="text-white text-uppercase text-xxs font-weight-bolder">Nama Kategori</th>
                                    <th class="text-white text-center text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($kategori->getResult() as $kategori) : ?>
                                        <tr>
                                            <td class="text-center w-1">#</td>
                                            <td><?= $kategori->nama_kategori; ?></td>
                                            <td class="text-center w-15">
                                                <a class="btn btn-sm px-2 py-1 mb-0 bg-gradient-success" href="<?= base_url('admin/data-master/edit-kategori/' . $kategori->id_kategori); ?>" title="edit"><i class="material-icons text-sm">edit</i></a>
                                                <form action="<?= base_url('admin/data-master/delete-kategori/' . $kategori->id_kategori); ?>" method="POST" class="d-inline">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm px-2 py-1 mb-0 bg-gradient-danger" onclick="return confirm('Apakah anda yakin')" title="Hapus"><i class="material-icons text-sm">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="rak" class="table-responsive tab-pane fade">
                            <div class="col-12 mb-3">
                                <a class="btn btn-sm btn-dark" href=""><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah</a>
                            </div>
                            <table class="cell-border" id="mytable1">
                                <thead class="bg-gradient-primary">
                                    <th class="text-white text-uppercase text-xxs font-weight-bolder"></th>
                                    <th class="text-white text-uppercase text-xxs font-weight-bolder">Nama Rak</th>
                                    <th class="text-center text-white text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($rak->getResult() as $rak) : ?>
                                        <tr>
                                            <td class="text-center w-1">#</td>
                                            <td><?= $rak->nama_rak; ?></td>
                                            <td class="text-center w-15">
                                                <a class="btn btn-sm px-2 py-1 mb-0 bg-gradient-success" href="#" title="edit"><i class="material-icons text-sm">edit</i></a>
                                                <form action="#" method="POST" class="d-inline">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm px-2 py-1 mb-0 bg-gradient-danger" onclick="return confirm('Apakah anda yakin')" title="Hapus"><i class="material-icons text-sm">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="denda" class="table-responsive tab-pane fade <?= (session()->getFlashdata('show') == 'denda') ? 'active show' : ''; ?>">
                            <?php if ($count_denda == 0) : ?>
                                <div class="col-12 mb-3">
                                    <a class="btn btn-sm btn-dark" href="<?= base_url('admin/data-master/tambah-denda'); ?>"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah</a>
                                </div>
                            <?php endif; ?>
                            <table class="cell-border" id="mytable2">
                                <thead class="bg-gradient-primary">
                                    <th class="text-white text-uppercase text-xxs font-weight-bolder"></th>
                                    <th class="text-white text-uppercase text-xxs font-weight-bolder">Nominal</th>
                                    <th class="text-center text-white text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $d = 0;
                                    foreach ($denda->getResult() as $denda) : ?>
                                        <tr>
                                            <td class="text-center w-1">#</td>
                                            <td><?= $denda->nominal; ?></td>
                                            <td class="text-center w-15">
                                                <a class="btn btn-sm px-2 py-1 mb-0 bg-gradient-success" href="/admin/data-master/edit-denda/<?= $denda->id_denda; ?>" title="edit"><i class="material-icons text-sm">edit</i></a>
                                                <form action="<?= base_url('admin/data-master/delete-denda/' . $denda->id_denda); ?>" method="POST" class="d-inline">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm px-2 py-1 mb-0 bg-gradient-danger" onclick="return confirm('Apakah anda yakin')" title="Hapus"><i class="material-icons text-sm">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="menu3" class="table-responsive tab-pane fade">
                            <table class="table table" id="mytable3">
                                <thead class="bg-gradient-primary">
                                    <th class="text-white text-uppercase text-xxs font-weight-bolder">No</th>
                                    <th class="text-white text-uppercase text-xxs font-weight-bolder">Nama Kategori</th>
                                    <th class="text-white text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </thead>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>