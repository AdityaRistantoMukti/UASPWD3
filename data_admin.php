<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penitipan Anak Bahagia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
      body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    overflow-x: hidden;
    background-size: cover;
    background-image: url('img/rio.jpg');
    background-repeat: no-repeat;
    background-position: center top 110px; /* Mengatur gambar ke tengah atas layar dan 50px dari atas */
}



        header {
            background-color: #54C2D3;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: sticky;
            top: 0;
            /* z-index: 1; */
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        nav a i {
            margin-right: 5px;
        }

        nav a:hover {
            color: #54C2D3;
        }

        .logout-btn {
            background-color: #fff;
            color: #333;
            border: 1px solid #333;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 15px;
            transition: 0.5s;
        }

        .logout-btn:hover {
            background-color: #333;
            color: #fff;
        }

        section {
            padding: 20px;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .featured {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .feature-box {
            flex: 1;
            background: rgba(255, 255, 255, 0.7);
            margin: 10px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            border-radius: 5px;
            transition: 0.5s;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            background-size: cover;
            position: absolute;
            width: 100%;
        }

        .rio {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 500px;
          
            position: relative;
            overflow: hidden;
            text-align: center;
            color: #000;
        }
.rio h2 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 36px;
    white-space: nowrap;
    pointer-events: none;
    background-color: rgba(255, 255, 255, 0.7); /* Ubah nilai alpha (0.7) sesuai kebutuhan transparansi */
    padding: 10px;
    border-radius: 5px; /* Tambahkan nilai sesuai keinginan Anda */
}





        .parallax h2 .year {
            display: inline-block;
        }

           @keyframes footerAnimation {
            0% {
                transform: translateY(20px);
            }
            50% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(20px);
            }
        }

    </style>
</head>
<body>

    <header>
        <h1>PENITIPAN ANAK BAHAGIA</h1>
    </header>

    <nav>
        <a href="data_admin.php"><i class="fas fa-home"></i>Beranda</a>
       
        <a href="bayar.php" class="payment-btn payment-link"><i class="fas fa-money-check"></i>Data Bayar</a>
        <a href="output_anak.php"><i class="fas fa-solid fa-users"></i>Data Pelanggan</a>
       
        <a href="halaman_utama.php" onclick="return confirm('Apakah Anda yakin ingin keluar?')" class="logout-btn"><i class="fas fa-sign-out-alt"></i>Keluar</a>


        
        
    </nav>

    <section class="rio">
        <h2>Selamat Datang di <span class="year">Penitipan Anak Bahagia</span></h2>
    </section>

    <section>
        <div class="container">
            <div class="featured">
                <div class="feature-box">
                    <h3>Fasilitas Terbaik</h3>
                    <p>Kami menyediakan fasilitas terbaik untuk perkembangan anak-anak.</p>
                </div>

                <div class="feature-box">
                    <h3>Staf Profesional</h3>
                    <p>Staf kami terdiri dari para profesional yang berpengalaman dalam merawat anak-anak.</p>
                </div>

                <div class="feature-box">
                    <h3>Aktivitas Kreatif</h3>
                    <p>Kami menyelenggarakan berbagai aktivitas kreatif untuk merangsang perkembangan anak-anak.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Penitipan Anak Bahagia. Hak Cipta Dilindungi.</p>
    </footer>

</body>
</html>
