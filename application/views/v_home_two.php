<!-- /.col-md-8 -->
<div class="col-md-8 card-solid  mt-4 ">
    <h2 class="text-center"><b>Mau Direkomendasiin Apa Hari Ini</b></h2><br><br>
    <div class="card bg-gray card-body card-primary card-outline pb-0">
        <div class="row d-flex align-items-center ">
            <?php
            foreach ($kriteria as $key => $value) { ?>
                <div class=" col-sm-4">
                    <div class="card bg-light">
                        <div class="card-body border-bottom-0">
                            <a href="<?= base_url('dashboard/filter/' . $value->id_kategori) ?>" class="text-center ">
                                <h3><?= $value->nama_kriteria ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.col-md-8 -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>