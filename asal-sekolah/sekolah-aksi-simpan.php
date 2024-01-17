<?php
include "./../koneksi.php";

// Ambil data dari form

$nim = $_POST['nim'];
$sekolah_asal = $_POST['sekolah_asal'];
$jurusan = $_POST['jurusan'];
$tahun_lulus = $_POST['tahun_lulus'];
$nilai_sekolah = $_POST['nilai_sekolah'];

$checkSql = "SELECT * FROM asal_sekolah WHERE nim = '$nim'";
$checkResult = mysqli_query($link, $checkSql);


if (mysqli_num_rows($checkResult) > 0) {
    echo "<script>alert('Data sudah ada dalam data, penyimpanan gagal dilakukan!'); window.location.href='sekolah-buat-akun.html';</script>";
    exit; 
}


$sql = "INSERT INTO asal_sekolah (nim, sekolah_asal, jurusan, tahun_lulus, nilai_sekolah)
        VALUES ('$nim', '$sekolah_asal', '$jurusan', '$tahun_lulus', '$nilai_sekolah')";

if(mysqli_query($link, $sql)){
    echo "<script>alert('Data Berhasil Disimpan!'); window.location.href='sekolah-tampil-data.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data!'); window.location.href='sekolah-buat-akun.html';</script>";
}

?>
