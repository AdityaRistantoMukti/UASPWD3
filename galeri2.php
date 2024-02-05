<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penitipan Anak Bahagia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Style lainnya */

        .gallery {
            display: block;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .gallery-item {
            flex: 1;
            margin: 10px;
            overflow: hidden;
            position: relative;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .gallery-item:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }

        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            border-radius: 8px;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .overlay-content {
            text-align: center;
            color: #fff;
        }
        h2{
            font-family: 'Times New Roman', Times, serif;
            font-size: 40px;
            text-align: center;
            padding: 0;
            margin: 0;
        }
        p{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            margin:0;
            padding: 0;
            margin-bottom: 50px;
            
        }
    </style>
</head>
<body>
  <?php include 'navbar6.php' ?>

    <section>
        <div class="container">
            <h2>Galeri Penitipan Anak Bahagia</h2>
            <p>
                Jelajahi momen-momen bahagia anak-anak di Penitipan Anak Bahagia melalui galeri foto kami.
            </p>

            <div class="gallery">
                <div class="gallery-item">
                    <img src="img/galery2.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-content">Deskripsi Foto 1</div>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="img/galery3.jpg" alt="Galeri 2">
                    <div class="overlay">
                        <div class="overlay-content">Deskripsi Foto 2</div>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="img/galery10.jpg" alt="Galeri 3">
                    <div class="overlay">
                        <div class="overlay-content">Deskripsi Foto 3</div>
                    </div>
                </div>

                
                <div class="gallery-item">
                    <img src="img/galery5.jpg" alt="Galeri 3">
                    <div class="overlay">
                        <div class="overlay-content">Deskripsi Foto 3</div>
                    </div>
                </div>

                
                <div class="gallery-item">
                    <img src="img/galery6.jpg" alt="Galeri 3">
                    <div class="overlay">
                        <div class="overlay-content">Deskripsi Foto 3</div>
                    </div>
                </div>

                
                <div class="gallery-item">
                    <img src="img/galery7.jpg" alt="Galeri 3">
                    <div class="overlay">
                        <div class="overlay-content">Deskripsi Foto 3</div>
                    </div>
                </div>

                
                <div class="gallery-item">
                    <img src="img/galery8.jpg" alt="Galeri 3">
                    <div class="overlay">
                        <div class="overlay-content">Deskripsi Foto 3</div>
                    </div>
                </div>

                
                <div class="gallery-item">
                    <img src="img/galery9.jpg" alt="Galeri 3">
                    <div class="overlay">
                        <div class="overlay-content">Deskripsi Foto 3</div>
                    </div>
                </div>

                
                
                
                
                
            </div>
        </div>
    </section>

  

</body>
</html>
