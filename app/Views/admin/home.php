<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">auto_stories</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Jumlah Buku</p>
                        <h4 class="mb-0"><?php foreach ($buku->getResult() as $b) : ?><?php echo $b->jumlah ?> <?php endforeach; ?></h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Anggota</p>
                        <h4 class="mb-0"><?= $anggota; ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">archive</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Pengembalian</p>
                        <h4 class="mb-0">3,462</h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">unarchive</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Peminjaman</p>
                        <h4 class="mb-0">$103,430</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-12">
            <div class="card my-6">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Cari buku</h6>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" action="">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input name="j_buku" type="text" class="form-control">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Penerbit</label>
                            <input name="penerbit" type="text" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Cari</button>
                        </div>
                    </form>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive p-0 mt-3 w-100">
                            <table class="table table-bordered align-items-center mb-0">
                                <thead>
                                    <th>No</th>
                                    <th>No</th>
                                    <th>No</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>