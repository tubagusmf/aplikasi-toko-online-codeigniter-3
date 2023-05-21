<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h4>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');

                ?>
            </div>
            <br><br>
            <h3>Input ALamat Pengiriman & Pembayaran</h3>

            <form action="<?= base_url('dashboard/proses_pesanan'); ?>" method="POST">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap Anda"></textarea>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="number" name="no_telp" class="form-control" placeholder="+628*********">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select name="" class="form-control">
                        <option value="">JNE</option>
                        <option value="">J&T</option>
                        <option value="">SICEPAT</option>
                        <option value="">POS INDONESIA</option>
                        <option value="">GOJEK</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select name="" class="form-control">
                        <option value="">BCA - XXXXXXXX</option>
                        <option value="">BNI - XXXXXXXX</option>
                        <option value="">BRI - XXXXXXXX</option>
                        <option value="">MANDIRI - XXXXXXXX</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-4">Pesan</button>
            </form>

        <?php
                } else {
                    echo "<h4>Keranjang Belanja Anda Masih Kosong.</h4>";
                }
        ?>
        </div>
        <div class="col-md-2">

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->