<?php
if (isset($_GET['url'])) {
    $url = urldecode($_GET['url']);
    // Anda bisa menambahkan logika verifikasi di sini, seperti memeriksa apakah URL aman
    // Contoh sederhana, langsung redirect ke URL tujuan
    header("Location: $url");
    exit();
} else {
    echo "URL tidak valid.";
}
?>
