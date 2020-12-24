<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Sepatu
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $all['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Sepatu <?= $all['jenis']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Ukuran : <?= $all['ukuran']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Warna : <?= $all['warna']; ?></h6>
                        <p class="card-text">Rp. <?= number_format ($all['harga'],2,",","."); ?></p>
                    <a href="<?= base_url(); ?>All_control" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>