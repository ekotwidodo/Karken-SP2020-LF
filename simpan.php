<?php
// set ke jakarta time
date_default_timezone_set('Asia/Jakarta');
// include koneksi
include './koneksi.php';

try {
    // ambil semua isian dari json
    $b1ra = $_POST['b1ra'];
    $b1rb = $_POST['b1rb'];
    $b1rc = $_POST['b1rc'];
    $b1rd = $_POST['b1rd'];
    $b1re = $_POST['b1re'];
    $b1rf = $_POST['b1rf'];
    $b1rg = $_POST['b1rg'];
    $b1rh = $_POST['b1rh'];
    $b3r1 = $_POST['b3r1'];
    $b3r2 = $_POST['b3r2'];
    $b3r3 = $_POST['b3r3'];
    $art = $_POST['art'];
    $created_at = date('Y-m-d H:i:s');

    // INSERT ruta
    $query_ruta = "INSERT INTO ruta(b1ra,b1rb,b1rc,b1rd,b1re,b1rf,b1rg,b1rh,b3r1,b3r2,b3r3,created_at) 
            VALUES('$b1ra','$b1rb','$b1rc','$b1rd','$b1re','$b1rf','$b1rg','$b1rh','$b3r1','$b3r2','$b3r3','$created_at')";
    // query jalankan
    $result_ruta = mysqli_query($link, $query_ruta);
    // ambil id yang sudah diinsert
    $ruta_id = mysqli_insert_id($link);
    // decode ART dalam bentuk array
    $art_decode = json_decode($art, true);
    // jika lebih dari 0 lakukan insert ke tabel ART
    if (count($art_decode) > 0) {
        $idx = 1;
        foreach ($art_decode as $key => $val) {
            $b2ra = $val['b2a_' . ($idx)];
            $b2rb = $val['b2b_' . ($idx)];
            $b2rc = $val['b2c_' . ($idx)];
            $b2rd = $val['b2d_' . ($idx)];
            $b2re = $val['b2e_' . ($idx)];
            $b2rf = $val['b2f_' . ($idx)];
            // INSERT art
            $query_art = "INSERT INTO art(ruta_id,b2ra,b2rb,b2rc,b2rd,b2re,b2rf,created_at) 
                        VALUES('$ruta_id','$b2ra','$b2rb','$b2rc','$b2rd','$b2re','$b2rf','$created_at')";
            // jalankan query
            mysqli_query($link, $query_art);
            $idx = $idx + 1;
        }
    }
    // tutup koneksi
    mysqli_close($link);
    echo json_encode(
        array(
            'status' => TRUE,
            'message' => 'Data berhasil disimpan!'
        )
    );
} catch (Exception $e) {
    echo json_encode(
        array(
            'status' => FALSE,
            'message' => $e->getMessage()
        )
    );
}