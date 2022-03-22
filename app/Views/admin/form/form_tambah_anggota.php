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
                    <form method="POST" action="/admin/anggota_save">
                        <?php csrf_field() ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <input name="nis" type="text" placeholder="NIS" value="<?= old('nis') ?>" class="form-control px-2 <?= ($validasi->hasError('nis')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validasi->getError('nis'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <input name="nama_anggota" type="text" class="form-control <?= ($validasi->hasError('nama_anggota')) ? 'is-invalid' : ''; ?>" value="<?= old('j_buku'); ?>" placeholder="Nama">
                                    <div class="invalid-feedback">
                                        <?= $validasi->getError('nama_anggota'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <select class="form-control" name="jk" id="" value="<?= old('jk') ?>">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <input name="kelas" type="text" value="<?= old('kelas'); ?>" class="form-control <?= ($validasi->hasError('kelas')) ? 'is-invalid' : ''; ?>" placeholder="Kelas">
                                    <div class="invalid-feedback">
                                        <?= $validasi->getError('kelas'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="input-group input-group-outline">
                                    <input name="tmp_lahir" type="text" class="form-control <?= ($validasi->hasError('tmp_lahir')) ? 'is-invalid' : ''; ?>" placeholder="Tempat Lahir">
                                    <div class="invalid-feedback">
                                        <?= $validasi->getError('tmp_lahir'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline">
                                    <input name="tgl_lahir" type="text" autocomplete="off" class="form-control <?= ($validasi->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="datepicker" placeholder="Tanggal Lahir">
                                    <div class="input-icon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= $validasi->getError('tgl_lahir'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                <div class="input-group input-group-outline">
                                    <input name="thn_masuk" type="text" autocomplete="off" class="form-control <?= ($validasi->hasError('thn_masuk')) ? 'is-invalid' : ''; ?>" placeholder="Tahun Masuk">
                                    <div class="invalid-feedback">
                                        <?= $validasi->getError('thn_masuk'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-outline">
                                    <input name="thn_selesai" type="text" autocomplete="off" class="form-control <?= ($validasi->hasError('thn_selesai')) ? 'is-invalid' : ''; ?>" placeholder="Tahun Masuk">
                                    <div class="invalid-feedback">
                                        <?= $validasi->getError('thn_selesai'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline">
                                    <input name="alamat" type="text" class="form-control <?= ($validasi->hasError('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Tempat Lahir">
                                    <div class="invalid-feedback">
                                        <?= $validasi->getError('alamat'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-lg bg-gradient-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>