<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-0">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-body">
                    <div class="pb-0 p-3 mb-5">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Tabel Pengembalian</h6>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div id="tabel2" class="table-responsive p-0 mt-3 w-100">

                        <table class="table table-bordered align-items-center" id="mytable">
                            <thead>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tgl. Pengembalian</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Peminjam</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Denda</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a class="btn btn-sm px-2 py-1 mb-0 bg-gradient-success" href="javascript:;" title="edit"><i class="material-icons text-sm">edit</i></a>
                                        <a class="btn btn-sm px-2 py-1 mb-0 bg-gradient-danger" href="javascript:;" title="hapus"><i class="material-icons text-sm">delete</i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $("#mytable").DataTable();
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>