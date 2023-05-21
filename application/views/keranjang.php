<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary"><?= $title; ?>
                <a class="btn btn-sm btn-primary float-right" href="<?= base_url("dashboard"); ?>"><i class="fas fa-plus"></i></a>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($this->cart->contents() as $items) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $items['name']; ?></td>
                                <td><?= $items['qty']; ?></td>
                                <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.'); ?></td>
                                <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4">Total</td>
                            <td style="display: none"></td>
                            <td style="display: none"></td>
                            <td style="display: none"></td>
                            <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <a href="<?= base_url('dashboard/hapus_keranjang'); ?>" class="btn btn-sm btn-danger">Hapus Keranjang</a>
                    <a href="<?= base_url('dashboard/pembayaran'); ?>" class="btn btn-sm btn-primary">Pembayaran</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->