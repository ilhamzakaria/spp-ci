<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kelas
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $kelas['id']; ?>">
                        <div class="form-group">
                            <label for="id_kelas">id_kelas</label>
                            <input type="text" name="id_kelas" class="form-control" id="id_kelas" value="<?= $kelas['id_kelas']; ?>">
                            <small class="form-text text-danger"><?= form_error('id_kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_kelas">nama_kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" value="<?= $kelas['nama_kelas']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kompetensi_keahlian">kompetensi_keahlian</label>
                            <input type="text" name="kompetensi_keahlian" class="form-control" id="kompetensi_keahlian" value="<?= $kelas['kompetensi_keahlian']; ?>">
                            <small class="form-text text-danger"><?= form_error('kompetensi_keahlian'); ?></small>
                        </div>
                      <!--   <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach( $jurusan as $j ) : ?>
                                    <?php if( $j == $mahasiswa['jurusan'] ) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div> -->
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>