<!-- /.col-md-8 -->
<div class="col-md-12 card-solid  mt-4 ">
    <div class="card bg-gray card-body card-primary card-outline pb-0">
        <div class="row d-flex align-items-center ">
            <?php foreach ($barang as $key => $value) { ?>


                <div class=" col-sm-3">
                    <div class="card bg-light">
                        <div class="card-body border-bottom-0">
                            <div class="text-center">
                                <img width="200px" height="200px" src="<?= base_url('./gambar/' . $value->gambar) ?>" alt="User profile picture">
                            </div>
                            <h3 class="text-center"><?= $value->nama_barang ?></h3>
                            <ul class="fa-ul mb-3"> DI SINI DI ISI PERULANGAN BARANG YANG DI PILIH
                                <li class="group"><span class="fa-li">
                                        <i class="fas fa-align-justify"></i>
                                    </span>
                                    <b>Kategori :</b> <a><?= $value->nama_kategori ?></a>
                                </li>
                                <li class="group"><span class="fa-li">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                    <b>Harga :</b> <a> Rp. <?= number_format($value->harga, 0) ?></a>
                                </li>
                            </ul>
                            <div class="ml-3">
                                <a href="#" class="btn btn-success "><i class="fas fa-comments"></i> Chat</a>
                                <a href="#" class="btn btn-primary "><b>Detail Produk</b></a>
                                <a href="#" class="btn btn-primary "><i class="fas fa-cart-plus"> Add</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.col-md-8 -->