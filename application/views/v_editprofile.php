<div class="col-md-8">
    <!-- general form elements disabled -->
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Edit profile</h2>
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

            echo form_open_multipart('pelanggan/edit/' . $pelanggan->id_pelanggan) ?>
            <div class="form-group">
                <label>Nama pelanggan</label>
                <input name="nama_pelanggan" class="form-control" placeholder="Nama pelanggan" value="<?= $pelanngan->nama_pelanggan ?>">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_kategori" class="form-control">
                            <option value="<?= $barang->id_kategori ?>"><?= $barang->nama_kategori ?></option>
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
                            <input type="number" name="soc" class="form-control" value="<?= $barang->soc ?>">
                        </div>
                        <div>Ram
                            <input type="number" name="ram" class="form-control" value="<?= $barang->ram ?>">
                        </div>
                        <div>Rom
                            <input type="number" name="rom" class="form-control" value="<?= $barang->rom ?>">
                        </div>
                        <div>Kamera
                            <input type="number" name="kamera" class="form-control" value="<?= $barang->kamera ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div>Layar
                            <input type="number" name="layar" class="form-control" value="<?= $barang->layar ?>">
                        </div>
                        <div>NFC
                            <input type="text" name="nfc" class="form-control" value="<?= $barang->nfc ?>">
                        </div>
                        <div>Jaringan
                            <input type="number" name="jaringan" class="form-control" value="<?= $barang->jaringan ?>">
                        </div>
                        <div>Battrey
                            <input type="number" name="battre" class="form-control" value="<?= $barang->battre ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input name="harga" class="form-control" placeholder="Harga Barang" value="<?= $barang->harga ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Berat Barang (Gr)</label>
                        <input type="number" name="berat" class="form-control" placeholder="Berat Barang" value="<?= $barang->berat ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Gambar Barang</label>
                        <input id="preview_gambar" type="file" name="gambar" class="form-control" placeholder="Gambar Barang">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group text-center">
                        <img src="<?= base_url('gambar/' . $barang->gambar) ?>" id="gambar_load" width="100px">
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