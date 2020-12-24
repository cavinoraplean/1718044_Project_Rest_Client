<div class="container">
    

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>All_control/tambah" class="btn btn-primary">Tambah
                Data Sepatu</a>
        </div>
    </div>

    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data kode pos." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->

    <div class="row mt-3">
        <div class="col-md-12">
            <h3>Daftar Sepatu</h3>
            <ul class="list-group">
                <?php foreach ($all as $all) : ?>
                <li class="list-group-item">
                    <?= $all['nama'] ?>
                    <a href="<?= base_url(); ?>All_control/hapus/<?= $all['id']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>All_control/ubah/<?= $all['id']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>All_control/detail/<?= $all['id']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>