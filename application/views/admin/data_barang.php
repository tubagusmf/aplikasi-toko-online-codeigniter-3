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
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Keterangan</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($barang as $brg) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $brg->nama_brg; ?></td>
                                <td><?= $brg->keterangan; ?></td>
                                <td><?= $brg->kategori; ?></td>
                                <td><?= $brg->harga; ?></td>
                                <td><?= $brg->stok; ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-success" href="#"><i class="fas fa-search-plus"></i></a>
                                        <a class="btn btn-sm btn-primary" href="<?= base_url('admin/data_barang/edit/' . $brg->id_brg); ?>"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus?')" href="<?= base_url('admin/data_barang/hapus/' . $brg->id_brg); ?>"><i class="fas fa-trash"></i></a>
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


<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/data_barang/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option value="elektronik">Elektronik</option>
                            <option value="pakaian_pria">Pakaian Pria</option>
                            <option value="pakaian_wanita">Pakaian Wanita</option>
                            <option value="pakaian_anak">Pakaian Anak-Anak</option>
                            <option value="peralatan_olahraga">Peralatan Olahraga</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>