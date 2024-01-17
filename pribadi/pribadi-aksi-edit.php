<?php
include "./../koneksi.php";

$id = $_POST['id'];
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

// Tambahkan tanda kutip untuk menutup query Anda
$sql = "UPDATE pribadi SET nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', RT='$RT', RW='$RW', kelurahan='$kelurahan', kecamatan='$kecamatan', kode_pos='$kode_pos', telepon='$telepon', email='$email' WHERE id='$id'";

if (mysqli_query($link, $sql)) {
    header("location:pribadi-tampil-data.php");
} else {
    echo "Error: " . mysqli_error($link);
}

mysqli_close($link);

?>