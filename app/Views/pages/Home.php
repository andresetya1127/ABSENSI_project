<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 ms-6 con-w mw-web">
    <div class="card-group">
        <div class="card border-warning">
            <img src="../img/stmik1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pelatihan Mikrotik</h5>
                <p class="card-text">Pelaksanaan Pelatihan Mikrotik DI STMIK LOMBOK.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card border-warning">
            <img src="../img/stmik2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Beasiswa </h5>
                <p class="card-text">Untuk Mahasiswa Yg Berprestasi Bisa Berkesempatan Mendapat Besiswa.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card border-warning">
            <img src="../img/gunung.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Lokasi Kampus</h5>
                <p class="card-text">Untuk Lokasi Gedung Perkuliahan bisa <a href="">Klik Disini.</p></a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <hr>
        <h3 class="card-title text-center">LOKASI GEDUNG</h3>
        <hr>
        <div class="embed-responsive embed-responsive-21by4 d-flex justify-content-md-center mb-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.929411382681!2d116.28017621436706!3d-8.698253691024098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1ad111a8a59%3A0xb024ee78db33e0f6!2sSTMIK%20Lombok!5e0!3m2!1sid!2sid!4v1641665198101!5m2!1sid!2sid" width="100%" height="450" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
<!-- Card end -->

<?= $this->endSection(); ?>