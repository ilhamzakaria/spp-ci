<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data siswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $siswa['nisn']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $siswa['nis']; ?></h6>
                    <p class="card-text"><?= $siswa['nama']; ?></p>
                    <p class="card-text"><?= $siswa['id_kelas']; ?></p>
                    <p class="card-text"><?= $siswa['alamat']; ?></p>
                    <p class="card-text"><?= $siswa['no_telp']; ?></p>
                    <p class="card-text"><?= $siswa['id_spp']; ?></p>
                    <a href="<?= base_url(); ?>siswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>