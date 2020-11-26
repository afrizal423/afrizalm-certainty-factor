<?php

require '../vendor/autoload.php';

use afrizalmy\CertaintyFactor\Cf\CertaintyFactor;

$cf = new CertaintyFactor();
/**
 * Kita ambil contoh data dan contoh inputan user
 */
$contoh_data = $cf->TestData();
$contoh_input = $cf->TestDataInput();

/**
 * Lalu hitung CFnya
 */
$hasil = $cf->ProsesHitung($contoh_data, $contoh_input);

/**
 * Output berupa JSON,
 * silahkan berkreasi sesuai logika aplikasi anda
 */
header('Content-Type: application/json');
echo json_encode($hasil);

?>