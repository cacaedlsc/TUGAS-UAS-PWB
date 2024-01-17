<?php
include "./../koneksi.php";

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



// Tambahkan tanda kutip untuk menutup query 
$sql = "UPDATE orang_tua SET nama_ayah='$nama_ayah', agama_ayah='$agama_ayah', pendidikan_ayah='$pendidikan_ayah', pekerjaan_ayah='$pekerjaan_ayah', hidup_ayah='$hidup_ayah',
nama_ibu='$nama_ibu', agama_ibu='$agama_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', hidup_ibu='$hidup_ibu', alamat_ortu='$alamat_ortu', no_telp_ortu='$no_telp_ortu' WHERE nim='$nim'";

if(mysqli_query($link, $sql)){
    header("location:ortu-tampil-data.php");
} else {
    echo "Error: " . mysqli_error($link);
}

mysqli_close($link);
?>
