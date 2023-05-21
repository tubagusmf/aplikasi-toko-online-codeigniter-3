<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary"><?= $title; ?>
                <a class="btn btn-sm btn-primary float-right" href="" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus"></i></a>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Invoice</th>
                            <th>Nama Pemesanan</th>
                            <th>Alamat Pengiriman</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Batas Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($invoice as $inv) : ?>
                            <tr>
                                <td><?= $inv->id; ?></td>
                                <td><?= $inv->nama; ?></td>
                                <td><?= $inv->alamat; ?></td>
                                <td><?= $inv->tgl_pesan; ?></td>
                                <td><?= $inv->batas_bayar; ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?= base_url('admin/invoice/detail/' . $inv->id); ?>"><i class="fas fa-search-plus"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

</div>