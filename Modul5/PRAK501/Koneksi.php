<?php
date_default_timezone_set('Asia/Makassar');

function koneksi() {
    $host = "sql307.infinityfree.com"; 
    $user = "if0_41974193"; 
    $pass = "aVLMx37Pog6XXy6"; 
    $db   = "if0_41974193_prak501"; 
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if (!$conn) {
        die("<div style='color:red; font-family:sans-serif; padding:20px;'>Koneksi ke database gagal: " . mysqli_connect_error() . "</div>");
    }
    
    return $conn;
}
?>