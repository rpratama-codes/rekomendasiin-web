    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-bold">Data Kriteria</h3>

                <div class="card-tools">
                    <button data-toggle="modal" data-target="#add" type=" button" class="btn btn-primary btn_sm"><i class="fas fa-plus"></i>Add
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <?php
                if ($this->session->flashdata('pesan')) {
                    echo ' <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                    echo $this->session->flashdata('pesan');
                    echo '</h5></div>';
                }
                ?>
                <table class="table table-bordered" id="example1">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama Kriteria</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 1;
                        foreach ($kriteria as $key => $value) { ?>
                            <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $value->nama_kategori ?></td>
                                <td><?= $value->nama_kriteria ?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#edit<?= $value->id_kriteria ?>" class="btn btn-warning btn-xs">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button data-toggle="modal" data-target="#delete<?= $value->id_kriteria ?>" class="btn btn-danger btn-xs">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <!-- modal add -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h4 class="modal-title">Add Kriteria</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <?php echo
                    form_open('kriteria/add');
                    ?>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_kategori" class="form-control">
                            <option value="">--Pilih Kategori--</option>
                            <?php foreach ($kategori as $key => $value) { ?>
                                <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kriteria</label>
                        <input type="text" name="nama_kriteria" class="form-control" placeholder="nama kriteria" required>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save</button>
                </div>
                <?php echo
                form_close();
                ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- modal edit -->
    <?php foreach ($kriteria as $key => $value) { ?>
        <div class="modal fade" id="edit<?= $value->id_kriteria ?>">
            <div class="modal-dialog">
                <div class="modal-content bg-secondary">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Kriteria</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <?php echo
                        form_open('kriteria/edit/' . $value->id_kriteria);
                        ?>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="id_kategori" class="form-control">
                                <option value=""></option>
                                <?php foreach ($kategori as $key => $value) { ?>
                                    <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nama Kriteria</label>
                            <input name="nama_kriteria" class="form-control" value="">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-light">Save</button>
                    </div>
                    <?php echo
                    form_close();
                    ?>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php } ?>

    <!-- modal delete -->
    <?php foreach ($kriteria as $key => $value) { ?>
        <div class="modal fade" id="delete<?= $value->id_kriteria ?>">
            <div class="modal-dialog">
                <div class="modal-content bg-secondary">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete<?= $value->nama_kategori ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h5> Apakah Anda Yakin Ingin Hapus Data Ini....?</h5>



                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('kriteria/delete/' . $value->id_kriteria) ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php } ?>