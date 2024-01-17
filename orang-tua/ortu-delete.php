<?php
include "./../koneksi.php";

$nim = $_GET['id'];

$sql="DELETE FROM orang_tua where nim='$nim'";

if(mysqli_query($link, $sql)){
    header("location: ortu-tampil-data.php");
}
?>