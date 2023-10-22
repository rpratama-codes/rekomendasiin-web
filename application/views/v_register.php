<div class="col-lg-8 card-solid  mt-4 ">
    <h2 class="text-center"><b>Rekomendasiin</b></h2><br><br>
    <div class="card ">
        <div class="card-body register-card-body">
            <h4>
                <p class="login-box-msg">Register Member</p>
            </h4>
            <?php
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

            if ($this->session->flashdata('pesan')) {
                echo ' <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }
            echo form_open('pelanggan/register'); ?>
            <div class="input-group mb-3">
                <input type="text" name="nama_pelanggan" value="<?= set_value('nama_pelanggan') ?>" class="form-control" placeholder="Full Name" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control" placeholder="E-mail" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="ulangi_password" class="form-control" placeholder="Ulangi Password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <a href="<?= base_url('pelanggan/login') ?>" class="text-center">Sudah Punya Akun</a>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>