<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Spp
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_spp">id_spp</label>
                            <input type="text" name="id_spp" class="form-control" id="id_spp">
                            <small class="form-text text-danger"><?= form_error('id_spp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tahun">tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun">
                            <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nominal">nominal</label>
                            <input type="text" name="nominal" class="form-control" id="nominal">
                            <small class="form-text text-danger"><?= form_error('nominal'); ?></small>
                        </div>
                        <!-- <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Pangan">Teknik Pangan</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Planologi">Teknik Planologi</option>
                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            </select>
                        </div> -->
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>