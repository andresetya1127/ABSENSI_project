<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-5 ms-6 con-w mw-web">
    <div class="row">
        <div class="col-sm-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Dosen</h5>
                    <a href="<?= base_url('pages/dtdosen'); ?>" class="btn btn-primary mt-4">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Mahasiswa</h5>
                    <a href="<?= base_url('/data'); ?>" class="btn btn-primary mt-4">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-3 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mata Kuliah</h5>
                    <a href="<?= base_url('pages/dtmatkul'); ?>" class="btn btn-primary mt-4">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Dosen</h5>
                    <a href="<?= base_url('pages/dtdosen'); ?>" class="btn btn-primary mt-4">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>