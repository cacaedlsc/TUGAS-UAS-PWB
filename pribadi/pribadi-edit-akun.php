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
      padding-top: 120px;
      /* Adjusted for the navbar height */
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
  $id = $_GET['id'];
  $sql = "SELECT * FROM pribadi WHERE id='$id'";
  $result = mysqli_query($link, $sql);
  $data = mysqli_fetch_assoc($result);
  ?>

  <form method="POST" action="pribadi-aksi-edit.php" class="customform">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <input name="nim" class="required" placeholder="Masukkan NIM Mahasiswa" title="NIM Mahasiswa" type="text"
      value="<?php echo $data['nim']; ?>" required />
    <input name="status" type="hidden" value="ok" />
    <input name="nama" class="required" placeholder="Masukkan Nama Mahasiswa" title="Nama Mahasiswa" type="text"
      value="<?php echo $data['nama']; ?>" required />
    <input name="tempat_lahir" class="required" placeholder="Masukkan Tempat Lahir" title="Tempat Lahir" type="text"
      value="<?php echo $data['tempat_lahir']; ?>" required />
    <input name="tanggal_lahir" class="required" placeholder="Masukkan Tanggal Lahir" title="Tanggal Lahir" type="date"
      value="<?php echo $data['tanggal_lahir']; ?>" required />
    <input name="jenis_kelamin" class="required" placeholder="Perempuan / Laki Laki" title="Jenis Kelamin" type="text"
      value="<?php echo $data['jenis_kelamin']; ?>" required />
    <input name="alamat" class="required" placeholder="Masukkan Alamat" title="Alamat" type="text"
      value="<?php echo $data['alamat']; ?>" required />
    <input name="RT" class="required" placeholder="Masukkan RT" title="RT" type="text"
      value="<?php echo $data['RT']; ?>" required />
    <input name="RW" class="required" placeholder="Masukkan RW" title="RW" type="text"
      value="<?php echo $data['RW']; ?>" required />
    <input name="kelurahan" class="required" placeholder="Masukkan Kelurahan" title="Kelurahan" type="text"
      value="<?php echo $data['kelurahan']; ?>" required />
    <input name="kecamatan" class="required" placeholder="Masukkan Kecamatan" title="Kecamatan" type="text"
      value="<?php echo $data['kecamatan']; ?>" required />
    <input name="kode_pos" class="required" placeholder="Masukkan Kode Pos" title="Kode Pos" type="text"
      value="<?php echo $data['kode_pos']; ?>" required />
    <input name="telepon" class="required" placeholder="Masukkan No Telp" title="No Telp" type="text"
      value="<?php echo $data['telepon']; ?>" required />
    <input name="email" class="required" placeholder="Masukkan Email" title="Email" type="email"
      value="<?php echo $data['email']; ?>" required />
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