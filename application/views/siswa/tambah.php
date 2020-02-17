<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data siswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nisn">nisn</label>
                            <input type="text" name="nisn" class="form-control" id="nisn">
                            <small class="form-text text-danger"><?= form_error('nisn'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nis">nis</label>
                            <input type="text" name="nis" class="form-control" id="nis">
                            <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_kelas">id_kelas</label>
                            <input type="text" name="id_kelas" class="form-control" id="id_kelas">
                            <small class="form-text text-danger"><?= form_error('id_kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">no_telp</label>
                            <input type="text" name="no_telp" class="form-control" id="no_telp">
                            <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_spp">id_spp</label>
                            <input type="text" name="id_spp" class="form-control" id="id_spp">
                            <small class="form-text text-danger"><?= form_error('id_spp'); ?></small>
                        </div>
                    
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>