CREATE DATABASE IF NOT EXISTS `rekomendasiin`;
USE `rekomendasiin`;

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `soc` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `rom` int(11) DEFAULT NULL,
  `kamera` int(11) DEFAULT NULL,
  `layar` int(11) DEFAULT NULL,
  `nfc` int(11) DEFAULT NULL,
  `jaringan` int(11) DEFAULT NULL,
  `battre` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `berat` int(11) DEFAULT NULL
);

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_kategori`, `soc`, `ram`, `rom`, `kamera`, `layar`, `nfc`, `jaringan`, `battre`, `harga`, `gambar`, `berat`) VALUES
(1, 'Realme 8 Pro', 1, 171415, 8, 128, 89, 6, 0, 4, 4500, 4499000, 'realme-8-pro-ofic-3.jpg', 500),
(2, 'Vivo V19 ', 1, 117743, 8, 256, 90, 6, 0, 4, 4500, 4200000, 'vivo-v20-2.jpg', 500),
(3, 'Realme 7 Pro', 1, 171415, 8, 128, 79, 6, 0, 4, 4500, 4000000, 'realme-7-pro-11.jpg', 500),
(4, 'Oppo Reno 5', 1, 171415, 8, 128, 88, 6, 0, 4, 4310, 4200000, 'oppo-reno-5-4g-.jpg', 500),
(5, 'Samsung Galaxy A51', 1, 104687, 8, 128, 87, 6, 0, 4, 4000, 4399000, 'gsmarena_001.jpg', 500),
(55, 'Samsung Galaxy M30', 1, 69078, 4, 64, 64, 6, 0, 4, 5000, 3100000, 'samsung-galaxy-m30-sm-m305f-1.jpg', 500),
(56, 'Samsung Galaxy A21s', 1, 67883, 6, 128, 76, 6, 0, 4, 5000, 2600000, 'samsung-galaxy-a21s-0.jpg', 500),
(57, 'Samsung Galaxy M31', 1, 104687, 6, 128, 84, 6, 0, 4, 6000, 2800000, 'samsung-galaxy-m31-sm-m315f-red.jpg', 500),
(58, 'Samsung Galaxy S9', 1, 228312, 4, 64, 100, 6, 0, 4, 3000, 5300000, 'samsung-galaxy-s9-1.jpg', 500),
(59, 'Samsung Galaxy S10 Plus', 1, 284546, 8, 512, 116, 6, 0, 4, 4100, 9400000, 'samsung-galaxy-s10-plus-2-ceramic.jpg', 500),
(60, 'Samsung Galaxy S10', 1, 284546, 8, 128, 113, 6, 0, 4, 3400, 7100000, 'samsung-galaxy-s10-1.jpg', 500),
(61, 'Samsung Galaxy S20 Plus', 1, 370815, 8, 128, 118, 6, 1, 4, 4500, 9200000, 'samsung-galaxy-s20-11.jpg', 500),
(62, 'Samsung Galaxy S20 ', 1, 370815, 8, 128, 115, 6, 0, 4, 4000, 8300000, 'samsung-galaxy-s20-2.jpg', 500),
(63, 'Realme C11', 1, 58843, 3, 32, 98, 6, 0, 4, 5000, 1400000, 'realme-c11-2.jpg', 500),
(64, 'Xiaomi Redmi 9C ', 1, 58843, 4, 64, 64, 6, 0, 4, 5000, 1300000, 'xiaomi-redmi-note-9-pro-global-01.jpg', 500),
(65, 'Xiaomi Redmi 9C ', 1, 58843, 4, 64, 64, 6, 0, 4, 5000, 1500000, 'gsmarena_002.jpg', 500),
(66, 'Realme C15', 1, 58843, 4, 64, 64, 6, 0, 4, 6000, 1700000, 'realme-c15-1.jpg', 500),
(67, 'Xiaomi Redmi 9', 1, 119093, 4, 64, 64, 6, 0, 4, 5020, 1600000, 'xiaomi-redmi-9c-1.jpg', 500),
(68, 'Realme Nazro 30A', 1, 108560, 4, 64, 64, 6, 0, 4, 6000, 1800000, 'realme-narzo-30a-1.jpg', 500),
(69, 'Xiaomi Poco M3', 1, 108560, 4, 64, 86, 6, 0, 4, 5020, 1700000, 'xiaomi-poco-m3-31.jpg', 500),
(70, 'Realme 8', 1, 184478, 8, 128, 98, 6, 0, 4, 5000, 3500000, 'realme-8-1.jpg', 500),
(71, 'Vivo Y12', 1, 44874, 8, 128, 72, 6, 0, 4, 5000, 1600000, 'vivo-y15-01.jpg', 500),
(72, 'Xiaomi Redmi Note 7 ', 1, 94297, 4, 64, 79, 6, 0, 4, 4000, 2100000, 'xiaomi-redmi-note-7-2.jpg', 500),
(73, 'Xiaomi MI 6X', 1, 94297, 4, 64, 86, 6, 0, 4, 3000, 3200000, 'xiaomi-mi-a2-1.jpg', 500),
(74, 'realme 7i', 1, 103969, 8, 128, 76, 6, 0, 4, 5000, 2800000, 'realme-7i-1.jpg', 500),
(75, 'Xiaomi Redmi 9T', 1, 103969, 4, 64, 76, 6, 0, 4, 5020, 1800000, 'xiaomi-redmi-9-power-0.jpg', 500),
(76, 'Xiaomi Mi 11 Ultra', 1, 103969, 12, 256, 143, 6, 0, 4, 5000, 16900000, 'xiaomi-mi11-ultra-5g-k1-11.jpg', 500),
(77, 'Xiaomi Poco M3 ', 1, 103969, 4, 64, 86, 6, 0, 4, 6000, 1700000, 'gsmarena_003.jpg', 500),
(78, 'Xiaomi poco M3 ', 1, 103969, 6, 128, 84, 6, 0, 4, 6000, 2100000, 'xiaomi-poco-m3-3.jpg', 500),
(79, 'Xiaomi Redmi Note 8', 1, 105355, 4, 64, 80, 6, 0, 4, 4000, 2300000, 'xiaomi-redmi-note-8-1.jpg', 500),
(81, 'Realme 5i', 1, 105355, 4, 64, 66, 6, 0, 4, 5000, 2100000, 'realme-5i-3.jpg', 500),
(82, 'Xiaomi Redmi Note 10', 1, 138560, 4, 64, 98, 6, 0, 4, 5000, 2300000, 'xiaomi-redmi-note10-11.jpg', 500),
(83, 'Realme 6 Pro', 1, 171415, 8, 128, 109, 6, 0, 4, 4300, 3300000, 'realme-6-pro-1.jpg', 500),
(84, 'Xiaomi Redmi Note 9 Pro', 1, 171415, 6, 64, 89, 6, 0, 4, 5020, 2800000, 'xiaomi-redmi-note-9-pro-global-0.jpg', 500),
(85, 'Oppo Reno4', 1, 171415, 8, 128, 112, 6, 0, 4, 4015, 3600000, 'oppo-reno4-2.jpg', 500),
(86, 'Oppo Reno4 Pro', 1, 171415, 8, 256, 110, 6, 0, 4, 4000, 5600000, 'oppo-reno4-pro-2.jpg', 500),
(87, 'Realme 7 Pro', 1, 171415, 8, 128, 98, 6, 0, 4, 4500, 3800000, 'realme-7-pro-1.jpg', 500),
(88, 'Oppo Reno5', 1, 171415, 8, 128, 98, 6, 0, 4, 4310, 4300000, 'oppo-reno5-5g-1.jpg', 500),
(89, 'Vivo V20', 1, 171415, 8, 128, 98, 6, 0, 4, 4000, 3800000, 'vivo-v20-1.jpg', 500),
(90, 'Xiaomi Mi 11 Lite ', 1, 177806, 6, 64, 98, 6, 0, 4, 4250, 3700000, 'xiaomi-mi-11-lite-4g-11.jpg', 500),
(91, 'Xiaomi Mi 11', 1, 177806, 8, 256, 100, 6, 0, 4, 4600, 9700000, 'xiaomi-mi11-ultra-5g-k1-1.jpg', 500),
(92, 'Xiaomi X3 NFC', 1, 177806, 6, 64, 103, 6, 0, 4, 5160, 2800000, 'xiaomi-poco-x3-nfc-1.jpg', 500),
(93, 'Realme X3 Super Zoom', 1, 342211, 12, 256, 102, 6, 0, 4, 4200, 6400000, 'realme-x3-superzoom-1.jpg', 500),
(94, 'Xiaomi Mi 10T Pro 5G', 1, 403331, 8, 128, 118, 6, 0, 4, 5000, 6300000, 'xiaomi-mi-10t-pro-02.jpg', 500),
(95, 'Xiaomi Mi 10T 5G', 1, 403331, 8, 128, 98, 6, 0, 4, 5000, 5700000, 'xiaomi-mi-10t-5g-1.jpg', 500);

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
);

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'handphone'),
(2, 'laptop'),
(3, 'kamera'),
(4, 'sepeda'),
(5, 'motor'),
(6, 'mobil');

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL
);

INSERT INTO `kriteria` (`id_kriteria`, `id_kategori`, `nama_kriteria`) VALUES
(18, 1, 'Gaming'),
(19, 1, 'Selfie'),
(20, 1, 'Kamera');

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto` text DEFAULT NULL
);

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(30) DEFAULT NULL,
  `no_rek` varchar(30) DEFAULT NULL,
  `atas_nama` varchar(30) DEFAULT NULL
);

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(2, 'Bank Baru', '00000000', 'Rekomendasiin');

CREATE TABLE `rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` varchar(30) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
);

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `alamat_toko` varchar(255) DEFAULT NULL,
  `no_tlfn` text DEFAULT NULL
);

INSERT INTO `setting` (`id`, `nama_toko`, `lokasi`, `alamat_toko`, `no_tlfn`) VALUES
(1, 'Rekomendasiin', '  151', '-', '0');

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_order` varchar(50) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_penerima` varchar(25) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `provinsi` varchar(25) DEFAULT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `expedisi` varchar(225) DEFAULT NULL,
  `paket` varchar(225) DEFAULT NULL,
  `estimasi` varchar(225) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `atas_nama` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `status_order` int(11) DEFAULT NULL,
  `no_resi` varchar(25) DEFAULT NULL
);

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rule_id` int(11) DEFAULT NULL
);

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `rule_id`) VALUES
(1, 'admin', 'admin', 'admin', 1);


ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

ALTER TABLE `rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);


ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

