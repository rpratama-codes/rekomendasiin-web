  <!-- /.col-md-8 -->
  <div class="col-md-12 card-solid  mt-4 ">
    <div class="card bg-gray card-body card-primary card-outline pb-0">
      <div class="row d-flex align-items-center ">

        <?php foreach ($barang as $key => $value) { ?>

          <div class=" col-sm-3">

            <?php
            echo form_open('belanja/addkeranjang');
            echo form_hidden('id', $value->id_barang);
            echo form_hidden('qty', 1);
            echo form_hidden('price', $value->harga);
            echo form_hidden('name', $value->nama_barang);
            echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
            ?>

            <div class="card bg-light">
              <div class="card-body border-bottom-0">
                <div class="text-center">
                  <img width="200px" height="200px" src="<?= base_url('./gambar/' . $value->gambar) ?>" alt="User profile picture">
                </div>
                <h3 class="text-center"><?= $value->nama_barang ?></h3>
                <ul class="fa-ul mb-3">
                <p> Ram : <?= $value->ram ?> Gb<br>
                Rom : <?= $value->rom ?> Gb<br>
                Kamera : <?= $value->kamera ?> Pixel<br>
                Layar : <?= $value->layar ?> inc<br>
                Batrre : <?= $value->battre ?> Mah <br>
                </p>
                
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
                <div class="ml-2">
                  <a href="<?= base_url('home/detail_barang/' . $value->id_barang) ?>" class="btn btn-primary btn-sm"><b>Detail Produk</b></a><br><br>
                  <button type="submit" class="btn btn-sm btn-primary swalDefaultSuccess"><i class="fas fa-cart-plus"> Add</i></button>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>

          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- /.col-md-8 -->

  <!-- SweetAlert2 -->
  <script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Barang Berhasil Ditambah Kekeranjang'
        })
      });
    });
  </script>