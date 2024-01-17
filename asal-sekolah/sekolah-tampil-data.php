<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>ADMINISTRATIF FTII</title>
    <link rel="icon" href="https://drive.google.com/uc?export=view&id=1wAy7j2uB-QI6Mkg8iDYlUnjCYAXCGk_j">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            color: #333;
            padding-top: 120px;
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
        .content {
            margin-top: 160px;
        }
        .dashboard {
            font-size: 28px;
            color: maroon;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 12px;
            font-size: 16px;
            margin: 5px;
            border: 2px solid maroon;
            border-radius: 10px;
            cursor: pointer;
            background-color: maroon;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #8b0000;
        }
        .add-button {
            float: right;
            margin-top: 35px;
            margin-right: 20px;
            margin-bottom:100px;
            background-color: #E36414; 
            border: #5F8670;  
        }

        .back-dashboard-button {
            float: left;
            margin-top: 35px;
            margin-right: 50px;
            margin-bottom:100px;
            background-color: #5F8670; 
            border: #5F8670;  
        }


        .search-container {
            margin-bottom: 20px;
        }

        .search-container input[type="text"] {
            padding: 10px;
            font-size: 18px;
            border-radius: 8px;
            border: 2px solid maroon;
        }

        .search-container input[type="submit"] {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #ffff;
            border: 2px solid maroon;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: maroon;
        }

        .search-container input[type="submit"]:hover {
            background-color: #8b0000;
            background-color: maroon;
            color: #ffff;
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

<div class="content">
    <h1 class="dashboard">Data Asal Sekolah Mahasiswa</h1>
    <?php 
    include './../koneksi.php';
    $searchKeyword = "";
    if(isset($_GET['search']) && !empty($_GET['search'])) {
        $searchKeyword = $_GET['search'];
        $sql = "SELECT * FROM asal_sekolah WHERE nim LIKE '%$searchKeyword%' OR sekolah_asal LIKE '%$searchKeyword%' OR jurusan LIKE '%$searchKeyword%' OR tahun_lulus LIKE '%$searchKeyword%' OR nilai_sekolah LIKE '%$searchKeyword%'";
    } else {
        $sql = "SELECT * FROM asal_sekolah";
    }
    $result = mysqli_query($link, $sql);
    ?>

    <div class="search-container">
    <form action="" method="GET">
        <input type="text" name="search" placeholder="Cari Data...">
        <input type="submit" value="Cari" class="btn">
    </form>
    </div>

    <table>
    <thead>
            <tr>
                <th>NIM</th>
                <th>Sekolah Asal</th>
                <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>Nilai Sekolah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['sekolah_asal']; ?></td>
                <td><?php echo $row['jurusan']; ?></td>
                <td><?php echo $row['tahun_lulus']; ?></td>
                <td><?php echo $row['nilai_sekolah']; ?></td>
                
                <td>
                    <a href="sekolah-edit-akun.php?id=<?php echo $row['nim']; ?>" class="btn">Edit</a>
                    <a href="sekolah-delete.php?id=<?php echo $row['nim']; ?>" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>


                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="./../home.html" class="btn back-dashboard-button">Dashboard</a>
    <a href="sekolah-buat-akun.html" class="btn add-button">Create Data Asal Sekolah</a>
</div>
<!-- footer -->
<footer class="footer">
  <div class="footer-text">
      <p>Copyright &copy; 2023 by Caca E | All Rights Reserved.</p>
  </div>
</footer>
</body>
</html>
