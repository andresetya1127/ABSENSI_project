<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 ms-6 con-w mw-web">
    <section>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 mt-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/Home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Data</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Matakuliah</li>

                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex justify-content-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Add" data-bs-placement="top" title="Tambah Data"><i class="bi bi-cloud-plus-fill"></i></button>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="data_table" class="table table-hover text-center">
                    <thead class="table-dark font-1">
                        <tr>
                            <th>#</th>
                            <th>Matakuliah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($matkul as $key) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $key['nama_matkul']; ?></td>
                                <td><button>Hapus</button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</div>
<!-- /.row -->
</div>
</section>

<!-- Modal -->
<div id="Add" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="text-center bg-success p-3">
                <h4 class="modal-title text-white" id="info-header-modalLabel">Tambah Data Siswa</h4>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('pages'); ?>" method="POST" class="pl-3 pr-3">
                    <div class="row">
                        <input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="nim"> Nim: <span class="text-danger">*</span> </label>
                                <input type="text" id="nim" name="nim" class="form-control" placeholder="Nim" maxlength="11" required>
                            </div>
                        </div>
                        <div class="form-group text-center mt-5">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success" id="add-form-btn"><i class="bi bi-check-circle-fill"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= $this->endSection(); ?>