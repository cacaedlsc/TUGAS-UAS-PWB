<?php
include "./../koneksi.php";

$nim = $_GET['id'];

$sql="DELETE FROM asal_sekolah where nim='$nim'";

if(mysqli_query($link, $sql)){
    header("location: sekolah-tampil-data.php");
}
?>