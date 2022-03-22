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
                                    <h6 class="text-white text-capitalize">Tambah Denda</h6>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="btn bg-gradient-dark mb-0 text-capitalize" href="<?= base_url('admin/data-master'); ?>">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= base_url('dmaster/proses_tambah_denda'); ?>">
                        <div class="input-group input-group-outline mb-3">
                            <input name="nominal" type="text" autocomplete="off" placeholder="Nominal" value="" class="form-control px-2">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-sm-2  bg-gradient-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>