<?php
include "./../koneksi.php";

$nim = $_POST['nim'];
$sekolah_asal = $_POST['sekolah_asal'];
$jurusan = $_POST['jurusan'];
$tahun_lulus = $_POST['tahun_lulus'];
$nilai_sekolah = $_POST['nilai_sekolah'];

// Tambahkan tanda kutip untuk menutup query Anda
$sql = "UPDATE asal_sekolah SET sekolah_asal='$sekolah_asal', jurusan='$jurusan', tahun_lulus='$tahun_lulus', nilai_sekolah='$nilai_sekolah' WHERE nim='$nim'";

if(mysqli_query($link, $sql)){
    header("location:sekolah-tampil-data.php");
} else {
    echo "Error: " . mysqli_error($link);
}

mysqli_close($link);
?>
