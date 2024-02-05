<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #54C2D3;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        section {
           
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .payment-form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .payment-form .title {
            background: #6e6b64;
            color:#fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .payment-form label {
            display: block;
            margin: 10px 0;
        }

        .payment-form select, .payment-form input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        
        .payment-form button {
            background-color: #54C2D3;
            color: #fff;
            width: 100%;
            padding:10px 0px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .payment-form button:hover {
            background-color: #428b9e;
        }

    
    </style>
  
</head>
<body>
    <header>
        <h1>Selamat Datang di Penitipan Anak</h1>
        <p>Hanya dengan biaya Rp. 200.000 perhari, anak Anda dijamin aman dan bahagia!</p>
    </header>
    <?php include 'navbar1.php' ?>

    <section>
        <div class="container">
            <div class="payment-form">
                <div class="title">
                <h2><p>Deskripsi Pembayaran</p></h2>
                <p>Kami hanya menyedikan dengan biaya Rp.200.000 perhari, dengan waktu 1 hari.</p>
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Harga</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>1 Hari</td>
                        <td>24 jam</td>
                        <td>200.000,00</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
    </div>
    <hr>
    <div class="container">
    <?php 
        include 'koneksi.php';
        ?>
    <div class="payment-form">
        <div class="title">
            <h2>Lakukan Pembayaran Dibawah Ini</h2> 
            <p>No Rekening Bank: 88292183812 a/n AnakBahagia</p>
        </div>
                <form action="bayar_aksi.php" method="post">
                    <div class="mb-3">
                        <label  class="form-label"><b>NAMA</b></label>
                        <input type="text" class="form-control" name="nama">
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>JUMLAH BAYAR</b></label>
                        <input type="text" class="form-control" name="bayar">
                    </div>


                    <div class="mb-3 ">
                        <label class="form-label" ><b>PILIH METODE BAYAR</b></label>
                    <select style="height: 50px; " name="pilih" class="form-select form-control ">
                        <option class="form-control">--pilih--</option>
                        <option value="DANA" style="text-align:center;">DANA</option>
                        <option value="BRI" style="text-align:center;">BRI</option>
                        <option value="BSI" style="text-align:center;">BSI</option>
                    </select>
    </div>
                 
                    
                    <button type="submit" name="simpan" >Bayar</button>
                    
                </form>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
