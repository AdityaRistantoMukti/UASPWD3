<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        body {
            margin: 0px;
            padding: 0px;
            margin:20px auto;
        }
        nav {
            margin:0px;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: sticky;
            top: 0;
            z-index: 1;
            margin:20px auto;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            display: inline-block;
            position: relative;
            transition: 0.5s;
            margin:20px auto;
        }

        nav a i {
            margin-right: 5px;
        }

        nav a:hover {
            color: #54C2D3;
        }
    </style>
</head>
<body>



    <nav>




        <a href="index.php"><i class="fas fa-home"></i>Beranda</a>
        <a href="fasilitas.php"><i class="fas fa-cogs"></i>Fasilitas</a>
        <a href="karyawan.php"><i class="fas fa-images"></i>Galeri</a>
        <a href="kontak.php"><i class="fas fa-envelope"></i>Kontak</a>
        <a href="register_anak.php"><i class="fas fa-solid fa-users"></i>Daftar</a>
        <a href="halaman_utama.php" class="logout-btn">Keluar</a>

        

    </nav>
</body>
</html>