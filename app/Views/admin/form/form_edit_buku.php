<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-0">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pb-1">
                        <div class="pb-0 p-3 mb-2">
                            <div class="row">
                                <div class="col-6  d-flex align-items-center">
                                    <h6 class="text-white text-capitalize">Tambah Buku</h6>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="btn bg-gradient-dark mb-0 text-capitalize" href="<?= base_url('admin/buku'); ?>">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="/admin/ubah_buku/<?= $buku->k_buku; ?>">

                        <div class="input-group-outline mb-3">
                            <input name="kb" type="text" placeholder="Kode buku" value="<?= $buku->k_buku; ?>" class="form-control px-2" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <input name="j_buku" type="text" class="form-control <?= ($validasi->hasError('j_buku')) ? 'is-invalid' : ''; ?>" value="<?= $buku->judul_buku; ?>" placeholder="Judul Buku">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('j_buku'); ?>
                            </div>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <input name="pengarang" type="text" class="form-control" value="<?= $buku->pengarang; ?>" placeholder="Pengarang">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('pengarang'); ?>
                            </div>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <input name="penerbit" type="text" value="<?= $buku->penerbit; ?>" class="form-control <?= ($validasi->hasError('penerbit')) ? 'is-invalid' : ''; ?>" placeholder="Penerbit">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('penerbit'); ?>
                            </div>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <input name="jumlah" type="text" value="<?= $buku->jumlah; ?>" class="form-control <?= ($validasi->hasError('jumlah')) ? 'is-invalid' : ''; ?>" placeholder="Jumlah">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('jumlah'); ?>
                            </div>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <input name="isbn" type="text" value="<?= $buku->isbn; ?>" class="form-control <?= ($validasi->hasError('isbn')) ? 'is-invalid' : ''; ?>" placeholder="ISBN">
                            <div class="invalid-feedback">
                                <?= $validasi->getError('isbn'); ?>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-lg bg-gradient-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>