<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Sepatu
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $all['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $all['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" name="jenis" class="form-control" id="jenis" value="<?= $all['jenis']; ?>">
                            <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <input type="text" name="warna" class="form-control" id="warna" value="<?= $all['warna']; ?>">
                            <small class="form-text text-danger"><?= form_error('warna'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" name="ukuran" class="form-control" id="ukuran" value="<?= $all['ukuran']; ?>">
                            <small class="form-text text-danger"><?= form_error('ukuran'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $all['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <a href="<?= base_url(); ?>All_control" class="btn btn-primary">Kembali</a>
                        <button type="submit" name="ubah" class="btn btn-success float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>