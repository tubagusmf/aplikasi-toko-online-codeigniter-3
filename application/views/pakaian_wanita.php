<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url() . 'assets/img/slider1.jpg'; ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url() . 'assets/img/slider2.jpg'; ?>" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    <div class="row text-center mt-4">

        <?php foreach ($pakaian_wanita as $brg) : ?>
            <div class="col-md-3 col-sm-6">


                <div class="card mb-3" style="width: 16rem;">
                    <img class="card-img-top" src="<?= base_url() . 'uploads/' . $brg->gambar; ?>" style="height: 200px;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?= $brg->nama_brg; ?></h5>
                        <small><?= $brg->keterangan; ?></small><br>
                        <span class="badge badge-pill badge-danger mb-3">Rp. <?= number_format($brg->harga, 0, ',', '.'); ?></span><br>
                        <a href="<?= base_url('dashboard/tambah_keranjang/' . $brg->id_brg); ?>" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Keranjang</a>
                        <a href="<?= base_url('dashboard/detail/' . $brg->id_brg); ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Detail</a>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->