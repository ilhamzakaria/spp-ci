<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data pembayaran
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_pembayaran">id_pembayaran</label>
                            <input type="text" name="id_pembayaran" class="form-control" id="id_pembayaran">
                            <small class="form-text text-danger"><?= form_error('id_pembayaran'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_petugas">id_petugas</label>
                            <input type="text" name="id_petugas" class="form-control" id="id_petugas">
                            <small class="form-text text-danger"><?= form_error('id_petugas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nisn">nisn</label>
                            <input type="text" name="nisn" class="form-control" id="nisn">
                            <small class="form-text text-danger"><?= form_error('nisn'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_bayar">tgl_bayar</label>
                            <input type="text" name="tgl_bayar" class="form-control" id="tgl_bayar">
                            <small class="form-text text-danger"><?= form_error('tgl_bayar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="bulan_dibayar">bulan_dibayar</label>
                            <input type="text" name="bulan_dibayar" class="form-control" id="bulan_dibayar">
                            <small class="form-text text-danger"><?= form_error('bulan_dibayar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tahun_dibayar">tahun_dibayar</label>
                            <input type="text" name="tahun_dibayar" class="form-control" id="tahun_dibayar">
                            <small class="form-text text-danger"><?= form_error('tahun_dibayar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_spp">id_spp</label>
                            <input type="text" name="id_spp" class="form-control" id="id_spp">
                            <small class="form-text text-danger"><?= form_error('id_spp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_bayar">jumlah_bayar</label>
                            <input type="text" name="jumlah_bayar" class="form-control" id="jumlah_bayar">
                            <small class="form-text text-danger"><?= form_error('jumlah_bayar'); ?></small>
                        </div>
                    
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>