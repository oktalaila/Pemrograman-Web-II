<?php
require "Koneksi.php";

function getMember() {
    $conn = koneksi();
    $sql = "SELECT * FROM member";
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    mysqli_close($conn);
    return $rows;
}

function getMemberById($id) {
    $conn = koneksi();
    $sql = "SELECT * FROM member WHERE id_member = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $row;
}

function tambahMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = koneksi();
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) 
            VALUES ('$nama', '$nomor', '$alamat', '$tgl_daftar', '$tgl_bayar')";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function editMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = koneksi();
    $sql = "UPDATE member SET 
            nama_member = '$nama', nomor_member = '$nomor', alamat = '$alamat', 
            tgl_mendaftar = '$tgl_daftar', tgl_terakhir_bayar = '$tgl_bayar' 
            WHERE id_member = $id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function hapusMember($id) {
    $conn = koneksi();
    $sql = "DELETE FROM member WHERE id_member = $id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}


function getBuku() {
    $conn = koneksi();
    $sql = "SELECT * FROM buku";
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    mysqli_close($conn);
    return $rows;
}

function getBukuById($id) {
    $conn = koneksi();
    $sql = "SELECT * FROM buku WHERE id_buku = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $row;
}

function tambahBuku($judul, $penulis, $penerbit, $tahun) {
    $conn = koneksi();
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) 
            VALUES ('$judul', '$penulis', '$penerbit', $tahun)";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function editBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $conn = koneksi();
    $sql = "UPDATE buku SET 
            judul_buku = '$judul', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = $tahun 
            WHERE id_buku = $id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function hapusBuku($id) {
    $conn = koneksi();
    $sql = "DELETE FROM buku WHERE id_buku = $id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}


function getPeminjaman() {
    $conn = koneksi();
    $sql = "SELECT * FROM peminjaman";
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    mysqli_close($conn);
    return $rows;
}

function getPeminjamanById($id) {
    $conn = koneksi();
    $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $row;
}

function tambahPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $conn = koneksi();
    $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) 
            VALUES ('$id_member', '$id_buku', '$tgl_pinjam', '$tgl_kembali')";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function editPeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $conn = koneksi();
    $sql = "UPDATE peminjaman SET 
            id_member = '$id_member', id_buku = '$id_buku', 
            tgl_pinjam = '$tgl_pinjam', tgl_kembali = '$tgl_kembali' 
            WHERE id_peminjaman = $id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function hapusPeminjaman($id) {
    $conn = koneksi();
    $sql = "DELETE FROM peminjaman WHERE id_peminjaman = $id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
?>