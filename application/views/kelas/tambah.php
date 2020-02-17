<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Kelas
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_kelas">id_kelas</label>
                            <input type="text" name="id_kelas" class="form-control" id="id_kelas">
                            <small class="form-text text-danger"><?= form_error('id_kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_kelas">nama_kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas">
                            <small class="form-text text-danger"><?= form_error('nama_kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kompetensi_keahlian">kompetensi_keahlian</label>
                            <input type="text" name="kompetensi_keahlian" class="form-control" id="kompetensi_keahlian">
                            <small class="form-text text-danger"><?= form_error('kompetensi_keahlian'); ?></small>
                        </div>
                       
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>