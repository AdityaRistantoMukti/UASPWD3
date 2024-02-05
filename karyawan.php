<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan Pengasuh Anak</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow-x: hidden;
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
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        nav a:hover {
            color: #54C2D3;
        }

        section {
            padding: 20px;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .employee-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .employee-card {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        img {
            max-width:50%;
            height:auto;
        }
    </style>
</head>
<body>

    <header>
        <h1>Daftar Karyawan Pengasuh Anak</h1>
    </header>
    <?php include 'navbar_karyawan.php'; ?>

    <section>
        <div class="container">
            <div class="employee-list mb-3">
                <!-- Contoh karyawan 1 -->
                <div class="employee-card">
                    <img src="img/galery1.jpg" alt="Foto Karyawan">
                    <h3>Nama Pengasuh 1</h3>
                    <p>Jabatan: Pengasuh Anak</p>
                    <p>Deskripsi: Pengasuh berpengalaman dalam merawat anak-anak.</p>
                </div>

                <!-- Contoh karyawan 2 -->
                <div class="employee-card">
                    <img src="img/galery2.jpg" alt="Foto Karyawan">
                    <h3>Nama Pengasuh 2</h3>
                    <p>Jabatan: Pengasuh Anak</p>
                    <p>Deskripsi: Menyukai aktivitas kreatif dan perhatian terhadap perkembangan anak.</p>
                </div>

                <!-- Anda dapat menambahkan lebih banyak karyawan sesuai kebutuhan -->
            </div>

            <div class="employee-list mb-3">
                <!-- Contoh karyawan 1 -->
                <div class="employee-card">
                    <img src="img/galery3.jpg" alt="Foto Karyawan">
                    <h3>Nama Pengasuh 1</h3>
                    <p>Jabatan: Pengasuh Anak</p>
                    <p>Deskripsi: Pengasuh berpengalaman dalam merawat anak-anak.</p>
                </div>

                <!-- Contoh karyawan 2 -->
                <div class="employee-card">
                    <img src="img/galery5.jpg" alt="Foto Karyawan">
                    <h3>Nama Pengasuh 2</h3>
                    <p>Jabatan: Pengasuh Anak</p>
                    <p>Deskripsi: Menyukai aktivitas kreatif dan perhatian terhadap perkembangan anak.</p>
                </div>

                <!-- Anda dapat menambahkan lebih banyak karyawan sesuai kebutuhan -->
            </div>

            <div class="employee-list mb-3">
                <!-- Contoh karyawan 1 -->
                <div class="employee-card">
                    <img src="img/galery6.jpg" alt="Foto Karyawan">
                    <h3>Nama Pengasuh 1</h3>
                    <p>Jabatan: Pengasuh Anak</p>
                    <p>Deskripsi: Pengasuh berpengalaman dalam merawat anak-anak.</p>
                </div>

                <!-- Contoh karyawan 2 -->
                <div class="employee-card">
                    <img src="img/galery7.jpg" alt="Foto Karyawan">
                    <h3>Nama Pengasuh 2</h3>
                    <p>Jabatan: Pengasuh Anak</p>
                    <p>Deskripsi: Menyukai aktivitas kreatif dan perhatian terhadap perkembangan anak.</p>
                </div>

                <!-- Anda dapat menambahkan lebih banyak karyawan sesuai kebutuhan -->
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

</body>
</html>
