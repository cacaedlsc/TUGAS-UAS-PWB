<?php
include "./../koneksi.php";

// Ambil data dari form
$nim = $_POST['nim'];
$nama_ayah = $_POST['nama_ayah'];
$agama_ayah = $_POST['agama_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$hidup_ayah = $_POST['hidup_ayah'];

$nama_ibu = $_POST['nama_ibu'];
$agama_ibu = $_POST['agama_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$hidup_ibu = $_POST['hidup_ibu'];

$alamat_ortu = $_POST['alamat_ortu'];
$no_telp_ortu = $_POST['no_telp_ortu'];

// Query untuk memeriksa apakah id plg sudah ada
$checkSql = "SELECT * FROM orang_tua WHERE nim = '$nim'";
$checkResult = mysqli_query($link, $checkSql);

// Penolakan jika id plg sudah ada
if (mysqli_num_rows($checkResult) > 0) {
    echo "<script>alert('Data sudah ada dalam data, penyimpanan gagal dilakukan!'); window.location.href='ortu-buat-akun.html';</script>";
    exit; 
}

// Jika id plg belum ada maka proses berlanjut
$sql = "INSERT INTO orang_tua (nim, nama_ayah, agama_ayah, pendidikan_ayah, pekerjaan_ayah, hidup_ayah,
        nama_ibu, agama_ibu, pendidikan_ibu, pekerjaan_ibu, hidup_ibu,
        alamat_ortu, no_telp_ortu)
        VALUES ('$nim', '$nama_ayah', '$agama_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$hidup_ayah',
        '$nama_ibu', '$agama_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$hidup_ibu',
        '$alamat_ortu', '$no_telp_ortu')";

if(mysqli_query($link, $sql)){
    echo "<script>alert('Data Berhasil Disimpan!'); window.location.href='ortu-tampil-data.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data!'); window.location.href='ortu-buat-akun.html';</script>";
}

?>
