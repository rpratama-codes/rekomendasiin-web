<div class="col-lg-8 card-solid  mt-4 ">
    <h2 class="text-center"><b>Profile</b></h2><br>
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">

            <?php if ($this->session->userdata('email') == "") { ?>
                <a class="nav-link" href="<?= base_url('pelanggan/login') ?>">
                    <span class="brand-text font-weight-light">Login/Register</span>
                    <!-- <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                    <i class="fas fa-user"></i>
                </a>
            <?php } else { ?>
                <!-- <div class="text-center">
                    <img src="<?= base_url('img/' . $this->session->userdata('foto')) ?>" alt="foto akun" class="profile-user-img img-fluid img-circle elevation-3" style="opacity: .8">
                </div> -->
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Nama : <?= $this->session->userdata('nama_pelanggan') ?></b>
                    </li>
                    <li class="list-group-item">
                        <b>Email : <?= $this->session->userdata('email') ?></b>
                    </li>
                    <li class="list-group-item">
                        <b>Password : ********<?= $this->session->userdata('password') ?></b>
                    </li>
                </ul>


                <a href=" <?= $this->session->userdata('pelanggan/edit/' . '$id_pelanggan') ?>" class="btn btn-primary btn-block"><b>edit</b></a>
            <?php } ?>
        </div>
        <!-- /.card-body -->
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>