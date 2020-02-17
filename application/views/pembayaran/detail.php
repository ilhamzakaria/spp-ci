<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pembayaran
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pembayaran['id_pembayaran']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $pembayaran['id_petugas']; ?></h6>
                    <p class="card-text"><?= $pembayaran['nisn']; ?></p>
                    <p class="card-text"><?= $pembayaran['tgl_bayar']; ?></p>
                    <p class="card-text"><?= $pembayaran['bulan_dibayar']; ?></p>
                    <p class="card-text"><?= $pembayaran['tahun_dibayar']; ?></p>
                    <p class="card-text"><?= $pembayaran['id_spp']; ?></p>
                    <p class="card-text"><?= $pembayaran['jumlah_bayar']; ?></p>
                    <a href="<?= base_url(); ?>pembayaran" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>