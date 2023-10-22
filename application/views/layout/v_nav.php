    <!-- Navbar -->
    <nav class="main-header font-weight-bold navbar navbar-expand-md navbar-danger navbar-info">
      <div class="container">
        <a href="<?= base_url() ?>" class="navbar-brand">
          <img src="<?= base_url('img /logo.svg')  ?>" class="brand-image " style="opacity: 8">
          <span class="text-white font-weight-bold">Rekomendasiin</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">

          <!-- SEARCH FORM -->

        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

          <?php
          $keranjang = $this->cart->contents();
          $jml_item = 0;
          foreach ($keranjang as $key => $value) {
            $jml_item = $jml_item + $value['qty'];
          } ?>
          <li class="dropdown">
            <a class="nav-link" data-toggle="dropdown">
              <i class="fas fa-shopping-cart" style="color: #FFFFFF;"></i>
              <span class="badge badge-danger navbar-badge"><?= $jml_item ?></span>
            </a>

            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right ">
              <?php if (empty($keranjang)) { ?>
                <a href="#" class="dropdown-item text-center">
                  <p><i class="fas fa-exclamation-circle"></i> Keranjang Kosong</p>
                </a>
                <?php } else {
                foreach ($keranjang as $key => $value) {
                  $barang = $this->m_home->detail_barang($value['id']);
                ?>
                  <!-- barang start -->
                  <a href="#" class="dropdown-item">
                    <div class="media">
                      <img src="<?= base_url('gambar/' . $barang->gambar) ?>" alt="" class="img-size-50 mr-3">
                      <div class="media-body">
                        <h3 class="dropdown-item-title">
                          <?= $value['name'] ?>
                        </h3>
                        <p class="text-sm"><?= $value['qty'] ?> x Rp. <?= number_format($value['price'], 0) ?></p>
                        <p class="text-sm"><i class="fas fa-calculator"></i>Rp. <?= $this->cart->format_number($value['subtotal']); ?></p>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                <?php } ?>
                <!-- barang end -->
                <a href="#" class="dropdown-item">
                  <div class="media">
                    <div class="media-body">
                      <tr>
                        <td colspan="2"> </td>
                        <td class="right"><strong>Total</strong></td>
                        <td class="right">Rp. <?= $this->cart->format_number($this->cart->total()); ?></td>
                      </tr>
                    </div>
                  </div>
                </a>

                <div class=" text-lg-center">
                  <a href="<?= base_url('belanja') ?>" class="btn btn-sm btn-primary ">View Cart</a>
                </div>
                <br>
              <?php } ?>

            </div>
          </li>

          <li class="nav-item dropdown">

            <?php if ($this->session->userdata('email') == "") { ?>
              <a class="nav-link" href="<?= base_url('pelanggan/login') ?>">
                <span class="text-white font-weight-light">Login/Register</span>
                <i class="fas fa-user" style="color: #FFFFFF;"></i>
              </a>
            <?php } else { ?>
              <a class="nav-link" data-toggle="dropdown" href="#">
                <span class=" text-white font-weight-bold"><?= $this->session->userdata('nama_pelanggan') ?></span>
                <i class="fas fa-user" style="color: #FFFFFF;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                <a class="dropdown-item" href="<?= base_url('pelanggan/profile') ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="<?= base_url('pesanan_saya') ?>">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pesanan Saya
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('pelanggan/logout') ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            <?php } ?>

          </li>
          <!--end user-->

        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <div class="content">
        <br>
        <div class="container d-flex justify-content-center">