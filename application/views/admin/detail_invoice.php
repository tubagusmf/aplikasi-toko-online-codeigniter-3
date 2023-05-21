<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Nomor Invoice : <?= $invoice->id; ?>
                <a class="btn btn-sm btn-primary float-right" href="" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus"></i></a>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Pesanan</th>
                            <th>Harga Satuan</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach ($pesanan as $psn) :
                            $subtotal = $psn->jumlah * $psn->harga;
                            $total += $subtotal;
                        ?>
                            <tr>
                                <td><?= $psn->id_brg; ?></td>
                                <td><?= $psn->nama_brg; ?></td>
                                <td><?= $psn->jumlah; ?></td>
                                <td>Rp. <?= number_format($psn->harga, 0, ',', '.'); ?></td>
                                <td>Rp. <?= number_format($subtotal, 0, ',', '.'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4" align="left">Grand Total</td>
                            <td style="display: none"></td>
                            <td style="display: none"></td>
                            <td style="display: none"></td>
                            <td align="right">Rp. <?= number_format($total, 0, ',', '.'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

</div>