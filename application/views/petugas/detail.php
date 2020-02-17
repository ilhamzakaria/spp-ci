<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Petugas
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $petugas['id_petugas']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $petugas['username']; ?></h6>
                    <p class="card-text"><?= $petugas['password']; ?></p>
                    <p class="card-text"><?= $petugas['nama_petugas']; ?></p>
                    <p class="card-text"><?= $petugas['level']; ?></p>
                    <a href="<?= base_url(); ?>petugas" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>