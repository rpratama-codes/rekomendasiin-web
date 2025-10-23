    <?php
    // Deklarasi Variable Kriteria SAW
    // line dibawah ini untuk memproses kriteria & kisaran harga di UNCOMMENT SETELAH PROGRAM BERJALAN

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $bobotSawHP = $_GET['sawKriteriaHP'];
        $hargaBasic = $_GET['rangeHarga'];
        $banyakHasil = $_GET['banyakBarang'];
    }

    // if (isset($_GET['sawKriteriaHP']) and isset($_GET['rangeHarga']) and isset($_GET['banyakBarang'])) {
    // $bobotSawHP = $_GET['sawKriteriaHP'];
    // $hargaBasic = $_GET['rangeHarga'];
    // $banyakHasil = $_GET['banyakBarang'];

    //     //write to json file
    //     $xfp = fopen('system/bobot.json', 'w');
    //     fwrite($xfp, json_encode($bobotSawHP, JSON_PRETTY_PRINT));
    //     fclose($xfp);

    //     //write to json file
    //     $yfp = fopen('system/harga.json', 'w');
    //     fwrite($yfp, json_encode($hargaBasic, JSON_PRETTY_PRINT));
    //     fclose($yfp);

    //     //write to json file
    //     $zfp = fopen('system/banyakBarang.json', 'w');
    //     fwrite($zfp, json_encode($banyakHasil, JSON_PRETTY_PRINT));
    //     fclose($zfp);

    // } else {
    //     // Read the JSON file
    //     $xjson = file_get_contents('system/bobot.json');
    //     $bobotSawHP = json_decode($xjson, true);

    //     // Read the JSON file
    //     $yjson = file_get_contents('system/harga.json');
    //     $hargaBasic = json_decode($yjson, true);

    //     // Read the JSON file
    //     $zjson = file_get_contents('system/banyakBarang.json');
    //     $banyakHasil = json_decode($zjson, true);
    // }

    // // HANYA untuk VERBOSE memilih Kriteria dan Rentan Harga
    // // Line dibawah ini di komen setelah program berjalan

    // $bobotSawHP = "Gaming";
    // $hargaBasic = 2000000;
    // $banyakHasil = 3;

    switch ($bobotSawHP) {
        case "Gaming":
            $bobotHarga = 0.500;
            $bobotSoc = 0.200;
            $bobotRam = 0.125;
            $bobotRom = 0.050;
            $bobotKamera = 0.025;
            $bobotBattre = 0.100;
            break;
        case "Fotografi":
            $bobotHarga = 0.500;
            $bobotSoc = 0.050;
            $bobotRam = 0.050;
            $bobotRom = 0.125;
            $bobotKamera = 0.175;
            $bobotBattre = 0.100;
            break;
        default:
            redirect("error_null_kriteria");
    }

    // Konek ke database
    $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB_NAME'));
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Sorting by range harga
    $min_harga = $hargaBasic - 500000;
    $max_harga = $hargaBasic + 250000;
    $sql = "SELECT * FROM barang WHERE harga BETWEEN $min_harga AND $max_harga ORDER BY harga desc LIMIT $banyakHasil;";
    $result = mysqli_query($conn, $sql);

    $dbBarang = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $dbBarang[] = $row;
    }

    // //write to json file
    // $fp = fopen('system/data.json', 'w');
    // fwrite($fp, json_encode($emparray, JSON_PRETTY_PRINT));
    // fclose($fp);

    // // Read the JSON file
    // $json = file_get_contents('system/data.json');
    // $json_data = json_decode($json, true);

    // Gak tau ini dibutuhin atau enggak tapi disimpen aja
    // Start Index from 0
    // array_unshift($json_data,"");
    // unset($json_data[0]);

    // line dibawah buat lihat data json nya
    // dipakai hanya untuk VERBOSE
    // print_r($json_data); // <--- Untuk lihat Array JSON

    // --------------------------------//
    // Deklarasi Variable Atribut yang digunakan dalam Rumus SPK SAW

    $listIdBarang = array_column($dbBarang, 'id_barang');
    $listBarang = array_column($dbBarang, 'nama_barang');
    $listHarga = array_column($dbBarang, 'harga');
    $listSoc = array_column($dbBarang, 'soc');
    $listRam = array_column($dbBarang, 'ram');
    $listRom = array_column($dbBarang, 'rom');
    $listKamera = array_column($dbBarang, 'kamera');
    $listBattre = array_column($dbBarang, 'battre');
    $listGambar = array_column($dbBarang, 'gambar');

    // print_r($listRom); // <--- untuk VERBOSE Salah satu atribut SPK SAW

    // --------------------------------//
    // Deklarasi Deklarasi Cost dan Benefit yang digunakan dalam Rumus SPK SAW

    $cekBarangAdaApaEnggak = count($listBarang);

    if ($cekBarangAdaApaEnggak == 0) {
        redirect("tes/error_null_barang");
    } else {
        $minHargaCost = min($listHarga);
        $maxSocBenefit = max($listSoc);
        $maxRamBenefit = max($listRam);
        $maxRomBenefit = max($listRom);
        $maxKameraBenefit = max($listKamera);
        $maxBattreBenefit = max($listBattre);
    }

    // --------------------------------//
    // Rumus Normalisasi yang digunakan dalam Rumus SPK SAW

    $normalisasiHarga = array();
    foreach ($listHarga as $dummyHarga) {
        $normalisasiHarga[] = $minHargaCost / $dummyHarga;
    }
    $normalisasiSoc = array();
    foreach ($listSoc as $dummySoc) {
        $normalisasiSoc[] = $dummySoc / $maxSocBenefit;
    }
    $normalisasiRam = array();
    foreach ($listRam as $dummyRam) {
        $normalisasiRam[] = $dummyRam / $maxRamBenefit;
    }
    $normalisasiRom = array();
    foreach ($listRom as $dummyRom) {
        $normalisasiRom[] = $dummyRom / $maxRomBenefit;
    }
    $normalisasiBattre = array();
    foreach ($listBattre as $dummyBattre) {
        $normalisasiBattre[] = $dummyBattre / $maxBattreBenefit;
    }
    $normalisasiKamera = array();
    foreach ($listKamera as $dummyKamera) {
        $normalisasiKamera[] = $dummyKamera / $maxKameraBenefit;
    }

    // print_r($normalisasiHarga);     //  <----- untuk VERBOSE variable yang disebutkan
    // print_r($normalisasiSoc);       //  <----- untuk VERBOSE variable yang disebutkan
    // print_r($normalisasiRam);       //  <----- untuk VERBOSE variable yang disebutkan
    // print_r($normalisasiRom);       //  <----- untuk VERBOSE variable yang disebutkan
    // print_r($normalisasiKamera);    //  <----- untuk VERBOSE variable yang disebutkan
    // print_r($normalisasiBattre);    //  <----- untuk VERBOSE variable yang disebutkan

    // --------------------------------//
    // Rumus pembobotan yang digunakan dalam Rumus SPK SAW

    $pembobotanHarga = array();
    foreach ($normalisasiHarga as $nDummyHarga) {
        $pembobotanHarga[] = $nDummyHarga * $bobotHarga;
    }
    $pembobotanSoc = array();
    foreach ($normalisasiSoc as $nDummySoc) {
        $pembobotanSoc[] = $nDummySoc * $bobotSoc;
    }
    $pembobotanRam = array();
    foreach ($normalisasiRam as $nDummyRam) {
        $pembobotanRam[] = $nDummyRam * $bobotRam;
    }
    $pembobotanRom = array();
    foreach ($normalisasiRom as $nDummyRom) {
        $pembobotanRom[] = $nDummyRom * $bobotRom;
    }
    $pembobotanKamera = array();
    foreach ($normalisasiKamera as $nDummyKamera) {
        $pembobotanKamera[] = $nDummyKamera * $bobotKamera;
    }
    $pembobotanBattre = array();
    foreach ($normalisasiBattre as $nDummyBattre) {
        $pembobotanBattre[] = $nDummyBattre * $bobotBattre;
    }

    // print_r($pembobotanHarga);
    // print_r($pembobotanSoc);
    // print_r($pembobotanRam);
    // print_r($pembobotanRom);
    // print_r($pembobotanKamera);
    // print_r($pembobotanBattre);

    $pointSPK = array();
    for ($n = 0; $n < count($listBarang); $n++) {
        $pointSPK[] =
            $pembobotanHarga[$n]
            + $pembobotanSoc[$n]
            + $pembobotanRam[$n]
            + $pembobotanRom[$n]
            + $pembobotanKamera[$n]
            + $pembobotanBattre[$n];
    }
    // print_r($pointSPK); // <----- Untuk Verbose PointSPK
    //
    // $hasilRekomendasiinVERBOSE = array();
    // for ($z=0; $z<count($listBarang); $z++) {
    //     $hasilRekomendasiinVERBOSE[] =$listIdBarang[$z]. " ". $listBarang[$z]. " ". $pointSPK[$z]; }
    // print_r($hasilRekomendasiinVERBOSE);
    //
    // Yang Hal yang dibutuhkan
    // Dibawah ini adalah output dari skrip diatas
    //
    // $listIdBarang
    // $listBarang
    // $listHarga
    // $pointSPK
    //
    ?>

    <div class="col-lg-8 card-solid  mt-4 ">
        <h1 class="text-center"><b>HANDPHONE</b></h1>
        <h3 class="text-center"> Ini dia hasil yang kamu mau, sesuai pokoknya sama yang kamu mau. </h3>

        <?php
        for ($a = 0; $a < count($listBarang); $a++) {

            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div  id="checkboxesArea" class="checkboxesArea border-bottom-0"> <div class="singleCheckbox"> <div hidden>';
            print_r($pointSPK[$a]);
            echo '</div>';
            echo form_open('belanja/addkeranjang');
            echo form_hidden('id', $listIdBarang[$a]);
            echo form_hidden('qty', 1);
            echo form_hidden('price', $listHarga[$a]);
            echo form_hidden('name', $listBarang[$a]);
            echo form_hidden('redirect_page', str_replace('index.php/', '', current_url() . '?' . $_SERVER['QUERY_STRING']));
            echo '<img src="' . site_url() . './gambar/' . $listGambar[$a] . '" alt="' . $listBarang[$a] . '" width="150px"> <br>';
            echo $listBarang[$a] . '<br>';
            echo 'Harga Rp.' . $listHarga[$a] . '<br>';
            echo 'Point Rekomendasi ' . $pointSPK[$a];
            echo '<br><button type="submit" class=" mb-2 btn btn-sm btn-primary swalDefaultSuccess"><i class="fas fa-cart-plus"> Add</i></button>';
            echo form_close();
            echo '<a href="' . site_url() . 'home/detail_barang/' . $listIdBarang[$a] . '" class="btn btn-success btn-sm"><b>Detail Produk</b></a> <br><br>';
            echo '</div> </div> </div> </div>';
        }
        ?>
    </div>

    <script>
        function myFunction() {
            var sort_by_name = function(a, b) {
                a = a.textContent.toLowerCase();
                b = b.textContent.toLowerCase();
                if (a > b) {
                    return -1;
                } else if (a < b) {
                    return 1;
                } else {
                    // a must be equal to b
                    return 0;
                }
            }
            var bigList = document.getElementById('checkboxesArea');
            var list = [];
            list = document.getElementsByClassName("singleCheckbox");
            var arr = [].slice.call(list);
            console.log(arr);

            function sortTheHellOutOfIt() {
                arr.sort(sort_by_name);
            };
            sortTheHellOutOfIt();
            console.log(arr);
            bigList.innerHTML = "";
            console.log(arr[1]);

            function loop() {
                for (i = 0; i < arr.length; i++) {
                    bigList.append(arr[i]);
                }
            }
            loop();
            /* bigList.html(arr); */
        }
        myFunction();
    </script>
