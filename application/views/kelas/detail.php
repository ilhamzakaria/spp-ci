<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Kelas
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $kelas['id_kelas']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $kelas['nama_kelas']; ?></h6>
                    <p class="card-text"><?= $kelas['kompetensi_keahlian']; ?></p>
                    <a href="<?= base_url(); ?>kelas" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>