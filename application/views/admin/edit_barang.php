<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4" style="width: 60%;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
        </div>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <form action="<?= base_url('admin/data_barang/update'); ?>" method="POST">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg; ?>">
                        <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg; ?>">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan; ?>">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori; ?>">
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" value="<?= $brg->harga; ?>">
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" name="stok" class="form-control" value="<?= $brg->stok; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                </form>
            <?php endforeach; ?>

        </div>
    </div>

</div>

</div>