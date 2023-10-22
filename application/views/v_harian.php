<div class="col-12">
    <!-- Main content -->
    <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-shopping-cart"></i> <?= $title ?>
                    <small class="float-right">Tangal:<?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></small>
                </h4>
            </div>
        </div>

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Order</th>
                            <th>Nama Barang</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        $grand_total = 0;
                        foreach ($laporan as $key => $value) {
                            $total_harga = $value->qty * $value->harga;
                            $grand_total = $grand_total + $total_harga;
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->no_order ?></td>
                                <td><?= $value->nama_barang ?></td>
                                <td><?= $value->qty ?></td>
                                <td>Rp. <?= number_format($value->harga, 0) ?></td>
                                <td>Rp. <?= number_format($total_harga, 0) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h5> <b> Grand Total : Rp. <?= number_format($grand_total, 0) ?></b></h5><br>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-12">
                <button class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
            </div>
        </div>
    </div>
</div><!-- /.col -->
</div><!-- /.row -->