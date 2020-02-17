<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Spp
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $spp['id']; ?>">
                        <div class="form-group">
                            <label for="id_spp">id_spp</label>
                            <input type="text" name="id_spp" class="form-control" id="id_spp" value="<?= $spp['id_spp']; ?>">
                            <small class="form-text text-danger"><?= form_error('id_spp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tahun">tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" value="<?= $spp['tahun']; ?>">
                            <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nominal">nominal</label>
                            <input type="text" name="nominal" class="form-control" id="nominal" value="<?= $spp['nominal']; ?>">
                            <small class="form-text text-danger"><?= form_error('nominal'); ?></small>
                        </div>
                        <!-- <div class="form-group">
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