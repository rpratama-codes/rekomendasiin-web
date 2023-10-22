<div class="col-lg-8 card-solid  mt-4 ">
    <h2 class="text-center"><b>Daftar belanja Anda</b></h2><br>
    <div class="card-solid ">
        <div class="card  card-body pb-0">
            <div class="row  ">
                <div class="col-sm-12">
                    <?php
                    if ($this->session->flashdata('pesan')) {
                        echo ' <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                        echo $this->session->flashdata('pesan');
                        echo '</h5></div>';
                    } ?>
                </div>
                <div class="col-sm-12 table-responsive">
                    <?php echo form_open('belanja/update'); ?>

                    <table class="table table-responsive " cellpadding="6" cellspacing="1" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th style="text-align:center" width="70px">QTY</th>
                                <th style="text-align:center">Harga Barang</th>
                                <th style="text-align:center">Sub-Total</th>
                                <th style="text-align:center">Berat (Gr)</th>
                                <th style="text-align:center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1; ?>
                            <?php
                            $total_berat = 0;
                            foreach ($this->cart->contents() as $items) {
                                $barang = $this->m_home->detail_barang($items['id']);
                                $berat = $items['qty'] * $barang->berat;
                                $total_berat = $total_berat + $berat;
                            ?>
                                <tr>
                                    <td><b><?php echo $items['name']; ?></b></td>
                                    <td>
                                        <?php echo form_input(array(
                                            'class' => 'form-control form-control-sm',
                                            'name' => $i . '[qty]',
                                            'value' => $items['qty'],
                                            'maxlength' => '3',
                                            'min' => '0',
                                            'size' => '5',
                                            'type' => 'number',
                                            'style' => 'min-width:20px'
                                        ));
                                        ?>
                                    </td>
                                    <td style="text-align:right">Rp. <?php echo number_format($items['price'], 0); ?></td>
                                    <td style="text-align:right">Rp. <?php echo number_format($items['subtotal'], 0); ?></td>
                                    <td style="text-align:center"><?= $berat ?> (Gr)</td>
                                    <td style="text-align:center">
                                        <a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php } ?>
                        </tbody>
                        <tr>
                            <td colspan="2"> </td>
                            <td style="text-align:right">
                                <h4>Total :</h4>
                            </td>
                            <td style="text-align:right">
                                <h4>Rp. <?php echo number_format($this->cart->total(), 0); ?></h4>
                            </td>
                            <td style="text-align:right">
                                <h4><?= $total_berat ?> (Gr)</h4>
                            </td>
                        </tr>
                    </table>
                    <div style=" text-align:center">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                        <a href="<?= base_url('belanja/clear') ?>" class="btn btn-danger ml-2 mt-2">Delete All</a>
                        <a href="<?= base_url('belanja/cekout') ?>" class="btn btn-success ml-2 mt-2">Check Out</a>
                    </div>
                    <?php echo form_close(); ?>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>