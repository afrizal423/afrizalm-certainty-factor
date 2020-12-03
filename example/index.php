<?php

require '../vendor/autoload.php';

use afrizalmy\CertaintyFactor\Cf\CertaintyFactor;

/**
 * Kita ambil contoh data dan contoh inputan user
 */
$contoh_data = CertaintyFactor::TestData();
$contoh_input = CertaintyFactor::TestDataInput();

/**
 * Lalu hitung CFnya
 */
$hasil = CertaintyFactor::ProsesHitung($contoh_data, $contoh_input);

/**
 * Dalam contoh ini output berupa JSON,
 * silahkan berkreasi sesuai logika aplikasi anda
 */
header('Content-Type: application/json');
echo json_encode($hasil);

?>