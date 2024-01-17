<?php
include "./../koneksi.php";

// Ambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$RT = $_POST['RT'];
$RW = $_POST['RW'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kode_pos = $_POST['kode_pos'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];

// Query untuk memeriksa apakah id barang sudah ada
$checkSql = "SELECT * FROM pribadi WHERE id = '$id'";
$checkResult = mysqli_query($link, $checkSql);

// Penolakan jika id barang sudah ada
if (mysqli_num_rows($checkResult) > 0) {
    echo "<script>alert('Mahasiswa sudah ada dalam data, penyimpanan gagal dilakukan!'); window.location.href='buat_akun.html';</script>";
    exit;
}

// Jika id barang belum ada maka proses berlanjut
$sql = "INSERT INTO pribadi (nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, RT, RW, kelurahan, kecamatan, kode_pos, telepon, email)
        VALUES ('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$RT', '$RW', '$kelurahan', '$kecamatan', '$kode_pos', '$telepon', '$email')";

if (mysqli_query($link, $sql)) {
    echo "<script>alert('Data Berhasil Disimpan!'); window.location.href='pribadi-tampil-data.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data!'); window.location.href='pribadi-buat-akun.html';</script>";
}

?>