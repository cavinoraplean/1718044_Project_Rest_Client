<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Sepatu
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" name="jenis" class="form-control" id="jenis">
                            <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <input type="text" name="warna" class="form-control" id="warna">
                            <small class="form-text text-danger"><?= form_error('warna'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" name="ukuran" class="form-control" id="ukuran">
                            <small class="form-text text-danger"><?= form_error('ukuran'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>