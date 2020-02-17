<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Spp
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $spp['id_spp']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $spp['tahun']; ?></h6>
                    <p class="card-text"><?= $spp['nominal']; ?></p>
                    <a href="<?= base_url(); ?>spp" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>