<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 ms-6 con-w mw-web">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <section>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 mt-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/Home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Data</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Dosen</li>

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
                            <th>Nama</th>
                            <th>NIDN</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Matkul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dosen as $k => $value) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $value->nama_dosen ?></td>
                                <td><?= $value->nidn ?></td>
                                <td><?= $value->no_hp ?></td>
                                <td><?= $value->alamat ?></td>
                                <td><?= $value->nama_matkul ?></td>
                                <td>
                                    <a href="/page/delete/<?= $dosenModel['id_dosen']; ?>" class="btn btn-info p-1">Edit</a>
                                    <button class="btn btn-danger p-1">Hapus</button>
                                </td>
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="text-center bg-success p-3">
                <h4 class="modal-title text-white" id="info-header-modalLabel">Tambah Data Siswa</h4>
            </div>
            <div class="modal-body">
                <form action="/pages/save" method="POST" class="pl-3 pr-3">
                    <?= csrf_field() ?>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama"> Nama: <span class="text-danger">*</span> </label>
                                <input type="text" name="nama_dosen" class="form-control" placeholder="Nama" maxlength="11" required autofocus>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nidn"> NIDN: <span class="text-danger">*</span> </label>
                                <input type="text" name="nidn" class="form-control" placeholder="NIDn" maxlength="150" digits>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_hp"> No Hp: <span class="text-danger">*</span> </label>
                                <input type="text" name="no_hp" class="form-control" placeholder="No Hp" maxlength="150" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alamat"> Alamat: <span class="text-danger">*</span> </label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" maxlength="150" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="id_matkul"> Matkul: <span class="text-danger">*</span> </label>
                            <div class="form-group">
                                <select class="form-select text-center" aria-label="Default select example" name="id_matkul" required>
                                    <option value="" hidden>- Pilih Matakuliah -</option>
                                    <?php foreach ($matkul as $k) : ?>
                                        <option value="<?= $k['id_matkul']; ?>"><?= $k['nama_matkul']; ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?= $this->endSection(); ?>