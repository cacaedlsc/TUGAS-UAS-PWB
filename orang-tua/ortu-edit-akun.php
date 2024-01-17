<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>ADMINISTRATIF FTII</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to right, #ff9a9e, #fad0c4);
    color: #333;
    padding-top: 120px; /* Adjusted for the navbar height */
    text-align: center;
  }
  .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: maroon;
    padding: 10px 0;
    text-align: center;
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  }
  .section {
    margin-top: 50px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  h2 {
    color: maroon;
    margin-bottom: 20px;
  }
  .customform {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 300px;
    font-size: 16px;
    box-sizing: border-box;
  }
  .submit-form {
    padding: 12px 24px;
    font-size: 18px;
    margin-top: 20px;
    margin-bottom: 50px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: maroon;
    color: #fff;
    transition: background-color 0.3s ease;
  }
  .submit-form:hover {
    background-color: #8b0000;
  }
  .footer {
    width: 100%;
    text-align: center;
    position: fixed; 
    bottom: 0; 
    left: 0; 
  }

  .footer-text {
    float: center;
  }
</style>
</head>
<body>

<div class="navbar">ADMINISTRATIF FTII</div>

<?php
    include "./../koneksi.php";
    $nim = $_GET['id'];
    $sql = "SELECT * FROM orang_tua WHERE nim='$nim'";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>

<form method="POST" action="ortu-aksi-edit.php" class="customform">
        <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>">
        <input name="nama_ayah" class="required" placeholder="Nama Ayah Mahasiswa" title="Nama Ayah" type="text" value="<?php echo $data['nama_ayah']; ?>" required/>
        <input name="agama_ayah" class="required" placeholder="Agama Ayah Mahasiswa" title="Agama Ayah Mahasiswa" type="text" value="<?php echo $data['agama_ayah']; ?>" required/>
        <input name="pendidikan_ayah" class="required" placeholder="Pendidikan Ayah Mahasiswa" title="Pendidikan Ayah Mahasiswa" type="text" value="<?php echo $data['pendidikan_ayah']; ?>" required/>
        <input name="pekerjaan_ayah" class="required" placeholder="Pekerjaan Ayah Mahasiswa" title="Pekerjaan Ayah Mahasiswa" type="text" value="<?php echo $data['pekerjaan_ayah']; ?>" required/>
        <input name="hidup_ayah" class="required" placeholder="Status Hidup Ayah (Hidup / MD)" title="Status Hidup Ayah Mahasiswa" type="text" value="<?php echo $data['hidup_ayah']; ?>" required/>

        <input name="nama_ibu" class="required" placeholder="Nama Ibu Mahasiswa" title="Nama Ibu" type="text" value="<?php echo $data['nama_ibu']; ?>" required/>
        <input name="agama_ibu" class="required" placeholder="Agama Ibu Mahasiswa" title="Agama Ibu Mahasiswa" type="text" value="<?php echo $data['agama_ibu']; ?>" required/>
        <input name="pendidikan_ibu" class="required" placeholder="Pendidikan Ibu Mahasiswa" title="Pendidikan Ibu Mahasiswa" type="text" value="<?php echo $data['pendidikan_ibu']; ?>" required/>
        <input name="pekerjaan_ibu" class="required" placeholder="Pekerjaan Ibu Mahasiswa" title="Pekerjaan Ibu Mahasiswa" type="text" value="<?php echo $data['pekerjaan_ibu']; ?>" required/>
        <input name="hidup_ibu" class="required" placeholder="Status Hidup Ibu (Hidup / MD)" title="Status Hidup Ibu Mahasiswa" type="text" value="<?php echo $data['hidup_ibu']; ?>" required/>

        <input name="alamat_ortu" class="required" placeholder="Alamat Orang Tua" title="Alamat Orang Tua Mahasiswa" type="text" value="<?php echo $data['alamat_ortu']; ?>" required/>
        <input name="no_telp_ortu" class="required" placeholder="No Telp Orang Tua" title="No Telp Orang Tua Mahasiswa" type="text" value="<?php echo $data['no_telp_ortu']; ?>" required/>
        
        <button class="submit-form" type="submit">Simpan Perubahan</button>
    </form>
</section>
<!-- footer -->
<footer class="footer">
  <div class="footer-text">
      <p>Copyright &copy; 2023 by Caca E | All Rights Reserved.</p>
  </div>
</footer>
</body>
</html>
