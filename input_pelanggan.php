<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penitipan Anak Bahagia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Style lainnya */

        .contact-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .contact-info,
        .contact-form {
            flex: 1;
            margin: 20px;
        }

        .contact-info {
            text-align: center;
        }

        .contact-info h2 {
            color:  #54C2D3;
        }

        .contact-info p {
            font-size: 18px;
        }

        .contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .contact-form button {
            background-color:  #54C2D3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color:  #54C2D3;
        }
        .contact-form h2{
            text-align: center;
        }
      
    </style>
</head>
<body>

    <a href="index.php">KEMABALI</a>

    <section>
        <div class="container">
            <h2>Hubungi Kami</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Informasi Kontak</h2>
                    <p>
                        Silakan hubungi kami jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut.
                    </p>
                    <p>
                        <strong>Alamat:</strong> Jalan Bahagia No. 123, Kota Bahagia
                    </p>
                    <p>
                        <strong>Email:</strong> info@penitipananakbahagia.com
                    </p>
                    <p>
                        <strong>Telepon:</strong> (0123) 456-789
                    </p>
                </div>

                <div class="contact-form">
                    <h2> Isi Formulir </h2>
                    <form action="#" method="post">
                        <label for="id">ID:</label>
                        <input type="number" id="id" name="id" required>

                        <label for="nama">NAMA:</label>
                        <input type="nama" id="nama" name="nama" required>
                       
                        <label for="alamat">ALAMAT:</label>
                        <input type="alamat" id="alamat" name="alamat" required>

                        <label for="no_telepon">NO.TELEPON:</label>
                        <input type="no_telepon" id="no_telepon" name="no_telepon" required>

                        <label for="no_telepon">NO.TELEPON:</label>
                        <input type="no_telepon" id="no_telepon" name="no_telepon" required>

                        <label for="no_telepon">NO.TELEPON:</label>
                        <input type="no_telepon" id="no_telepon" name="no_telepon" required>

                        <label for="no_telepon">NO.TELEPON:</label>
                        <input type="no_telepon" id="no_telepon" name="no_telepon" required>

                       

                        

                        

                


                        
                        <button type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur HTML lainnya -->

</body>
</html>
