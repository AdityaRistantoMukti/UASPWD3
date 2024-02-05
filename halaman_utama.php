<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,600,700,800" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
   <style>
    /* Reset some default styles */
body,
h1,
h2,
h3,
p,
ul {
    margin: 0;
    padding: 0;
    text-align: center;
   
}


body {
    font-family: 'Open Sans', sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color:#2980b9 ;
}

.container {
    width: 80%;
    max-width: 1200px;
    margin: 0 auto;
}

/* Header Styles */
header {
    background-color: black;
    color: #fff;
    padding: 20px 0;
}

h1 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 2.5em;
}

.login-container {
    float: right;
}

.login-button {
    background-color: black;
    color: #fff;
    background-color:#2980b9;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}

.login-button:hover {
    background-color: black;
}

/* Home Section Styles */
#home {
    padding: 80px 0;
    text-align: center;
}

#home img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 2em;
    color: #333;
}

p {
    font-size: 1.2em;
    color: #777;
}

/* Navigation Styles */
nav {
    background-color: #333;
}

ul {
    list-style: none;
}

li {
    display: inline;
    margin-right: 20px;
}

a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    transition: color 0.3s ease;
}

a:hover {
    color: #3498db;
}

/* Services Section Styles */
#services {
    background-color: #fff;
    padding: 80px 0;
}

.service-item {
    margin-bottom: 40px;
}

.service-item h3 {
    color: black;
    font-size: 1.5em;
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    padding-left: 20px;
    position: relative;
}

ul li::before {
    content: '\2022';
    position: absolute;
    left: 0;
    color: #3498db;
}

/* Contact Section Styles */
#contact {
    padding: 80px 0;
}

form {
    display: flex;
    flex-direction: column;
}

input,
textarea {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #54C2D3;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #54C2D3;
}

/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.social-icons a {
    color: #fff;
    margin-right: 10px;
}

.social-icons i {
    font-size: 24px;
}

/* Popup Styles */
.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

.popup-content {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.popup-close {
    float: right;
    cursor: pointer;
    font-size: 1.2em;
    color: #777;
}

.popup-btn {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}

.popup-btn:hover {
    background-color: #2980b9;
}
/* Gallery Section Styles */
#gallery {
    background-color: #f4f4f4;
    padding: 80px 0;
}

.gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.gallery img {
    width: 100%;
    max-width: 300px;
    height: auto;
    margin: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.gallery img:hover {
    transform: scale(1.1);
}


   </style>
       
    <title>Penitipan Anak Bahagia</title>
</head>

<body>
    <div class="r">
        <header>
            <div class="container">
                <h1>Penitipan Anak Bahagia</h1>
                <div class="login-container">
                    <button class="login-button" onclick="openPopup()">MASUK</button>
                </div>
            </div>
        </header>

        <section id="home">
            <div class="container">
                <img src="path/to/your/banner-image.jpg" alt="">
                <h2>Selamat Datang di Penitipan Anak Bahagia</h2>
                <p>Memberikan perhatian dan pengasuhan yang berkualitas untuk perkembangan bahagia anak Anda.</p>
            </div>
        </section>

        <div class="popup" id="loginPopup">
            <div class="popup-content">
                <span class="popup-close" onclick="closePopup()">&times;</span>
                <p class="popup-text">Pilih jenis login</p>
                <a href="login.php" class="popup-btn">User</a>
                <a href="data_admin.php" class="popup-btn">Admin</a>
            </div>
        </div>

        <nav>
            <div class="container">
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="galeri2.php">Galeri</a></li>
                    <li><a href="tentang_kami.php">Tentang Kami</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <section id="services">
        <div class="container">
            <div class="service-item">
                <h3>Aktivitas Pendidikan</h3>
                <p>Program pendidikan yang dirancang untuk meningkatkan keterampilan dan pengetahuan anak-anak.</p>
                <ul>
                    <li>Kelas pembelajaran kreatif</li>
                    <li>Workshop seni dan kerajinan</li>
                    <li>Stimulasi perkembangan</li>
                </ul>
            </div>

            <div class="service-item">
                <h3>Rekreasi dan Bermain</h3>
                <p>Tempat bermain yang aman dan menyenangkan untuk anak-anak bersosialisasi dan berkembang.</p>
                <ul>
                    <li>Taman bermain interaktif</li>
                    <li>Permainan kelompok</li>
                    <li>Kegiatan luar ruangan</li>
                </ul>
            </div>

            <div class="service-item">
                <h3>Penitipan Anak</h3>
                <p>Penyediaan lingkungan yang aman dan nyaman untuk penitipan anak sepanjang hari.</p>
                <ul>
                    <li>Pengasuhan oleh staf terlatih</li>
                    <li>Kegiatan belajar dan bermain</li>
                    <li>Pemantauan keamanan 24/7</li>
                </ul>
            </div>
        </div>
    </section>


    <section id="gallery">
        <div class="container">
            <h2>Galeri</h2>
            <div class="gallery">
                <img src="img/galeri12.jpg" alt="Gallery Image 1">
                <img src="img/galery11.jpg" alt="Gallery Image 2">
                <!-- Add more images as needed -->
            </div>
        </div>
    </section>
    

    <section id="contact">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <p>Silakan hubungi kami untuk informasi lebih lanjut atau untuk mendaftarkan anak Anda.</p>
            <form id="contact" action="proses_form.php" method="post">
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="message" placeholder="Pesan Anda" required></textarea>
                <input type="submit" value="Kirim">
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Penitipan Anak Bahagia. Hak Cipta Dilindungi.</p>
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <p>Alamat: Jalan Bahagia No. 123, Kota Bahagia</p>
        </div>
    </footer>

    <script>
        function openPopup() {
            var popup = document.getElementById('loginPopup');
            popup.style.display = 'flex';
        }

        function closePopup() {
            var popup = document.getElementById('loginPopup');
            popup.style.display = 'none';
        }
    </script>
</body>

</html>
