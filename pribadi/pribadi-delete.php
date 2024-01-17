<?php
include "./../koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM pribadi where id='$id'";

if (mysqli_query($link, $sql)) {
    header("location: pribadi-tampil-data.php");
}
?>