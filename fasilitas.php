<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Penitipan Anak</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        header {
            background-color: #54C2D3;
            padding: 20px;
            text-align: center;
            color: white;
        }

    

        section {
            padding: 20px;
        }

        h2 {
            color: #4CAF50;
        }

        .facility-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
     

        .facility {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom:20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .facility-rio {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
         
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .facility-ri {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
         
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        
        .facility-r {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 70px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }


        
        img {
            width: 100%; 
            height: 500px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        
    </style>
</head>
<body>

<header>
    <h1>Penitipan Anak Bahagia</h1>
</header>


<?php include 'navbar.php' ?>

<section>
   

    <div class="facility-card">
        <img src="img/fasilitas2.jpg" alt="Ruangan Bermain">
        <h3>Ruangan Bermain</h3>
        <p>Tempat bermain yang aman dan menyenangkan bagi anak-anak.</p>
    </div>

    
    <div class="facility-card">
        <img src="img/fasilitas4.jpg" alt="Makanan Bergizi">
        <h3>Ruang Belajar</h3>
        <p>Ruang khusus untuk belajar dengan meja, kursi, dan lampu yang baik <br>
        Penyediaan buku, alat tulis, dan sumber belajar lainnya</p>
    </div>

    <div class="facility-card">
        <img src="img/fasilitas5.jpg" alt="Makanan Bergizi">
        <h3>Studio Seni</h3>
        <p>Area di rumah untuk kegiatan seni, seperti melukis, membuat kerajinan tangan, atau bermain musik <br>
        Menyediakan berbagai peralatan seni dan kertas.</p>
    </div>


    
    <div class="facility-card">
        <img src="img/fasilitas3.jpg" alt="Makanan Bergizi">
        <h3>Area Berkebun</h3>
        <p>Memiliki kebun mini di halaman belakang untuk belajar tentang tanaman dan pertanian <br>
        Memberikan anak-anak tanggung jawab untuk merawat tanaman mereka sendiri.</p>
    </div>



 


   
  

  
   

    <!-- Tambahkan fasilitas lainnya sesuai kebutuhan -->

</section>

<?php include 'footer.php'; ?>

</body>
</html>
