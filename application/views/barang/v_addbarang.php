    <div class="col-md-8">
        <!-- general form elements disabled -->
        <div class="card card-primary">
            <div class="card-header">
                <h2 class="card-title">Tambah Barang</h2>
            </div>

            <div class="card-body">

                <?php
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');
                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
                }

                echo form_open_multipart('barang/addbarang') ?>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?= set_value('nama_barang') ?>" required="required">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="id_kategori" class="form-control">
                                <option value="">--Pilih Kategori--</option>
                                <?php foreach ($kategori as $key => $value) { ?>
                                    <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                </div>
                <label>Katerangan</label>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div>Soc
                                <input type="number" name="soc" class="form-control" value="<?= set_value('soc') ?>">
                            </div>
                            <div>Ram
                                <input type="number" name="ram" class="form-control" value="<?= set_value('ram') ?>">
                            </div>
                            <div>Rom
                                <input type="number" name="rom" class="form-control" value="<?= set_value('rom') ?>">
                            </div>
                            <div>Kamera
                                <input type="number" name="kamera" class="form-control" value="<?= set_value('kamera') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div>Layar
                                <input type="number" name="layar" class="form-control" value="<?= set_value('layar') ?>">
                            </div>
                            <div>NFC
                                <input type="text" name="nfc" class="form-control" value="<?= set_value('nfc') ?>">
                            </div>
                            <div>Jaringan
                                <input type="number" name="jaringan" class="form-control" value="<?= set_value('jaringan') ?>">
                            </div>
                            <div>Battrey
                                <input type="number" name="battre" class="form-control" value="<?= set_value('battre') ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Harga Barang</label>
                            <input name="harga" class="form-control" placeholder="Harga Barang" value="<?= set_value('harga') ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Berat Barang (Gr)</label>
                            <input type="number" min="0" name="berat" class="form-control" placeholder="Berat Barang" value="<?= set_value('berat') ?>" >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gambar Barang</label>
                            <input id="preview_gambar" type="file" name="gambar" class="form-control" placeholder="Gambar Barang" >
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group text-center">
                            <img src="<?= base_url('gambar/not.jpg') ?>" id="gambar_load" width="100px">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('barang') ?>" class="btn btn-default">Close</a>
                </div>

                <?php echo form_close(); ?>

            </div>
        </div>
    </div>

    <script>
        function viewGambar(input) {
            if (input.files && input.files) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#gambar_load').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#preview_gambar").change(function() {
            viewGambar(this);
        });
    </script>