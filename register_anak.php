
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Penitipan anak</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
    font-family: "Times New Roman", serif;
    line-height: 1.25;
    padding: 40px 0px;
  }
  .header{
    text-align: center;
    border-bottom: 1px solid #ddd;
  }
  table {
    border: 1px solid green;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;
  }
  table caption {
    font-size: 1.5em;
    margin: .25em 0 .75em;
  }
  table tr {
    background: #FFEBCD;
    border: 1px solid green;
    padding: .35em;
  }
  table th,
  table td {
    padding: .625em;
    text-align: center;
  }
  table th {
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
    background: #483D8B;
    color: white;
  }
  table td img {
    text-align: center;
  }
  @media screen and (max-width: 600px) {
    table {
      border: 0;
    }
    table caption {
      font-size: 1.3em;
    }
    table thead {
      display: none;
    }
    table tr {
      border-bottom: 3px solid green;
      display: block;
      margin-bottom: .725em;
    }
    table td {
      border-bottom: 1px solid green;
      display: block;
      font-size: .8em;
      text-align: right;
    }
    table td:before {
      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }
    table td:last-child {
      border-bottom: 0;
    }
}
 </style>

</head>
<body>
<?php include 'navbar.php'; ?>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Form register Penitipan Anak</h1>    
    
    <form action="input_anak.php" method="post">
       
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Lengkap Anak:</label>
                        <input type="text" name="nama_anak" class="form-control" placeholder="Masukan Nama Lengkap" required="required">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Alergi:</label>
                        <input type="text" name="alergi" class="form-control" placeholder="Masukan Alergi" required="required">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Umur:</label>
                        <input type="text" name="umur" class="form-control" placeholder="Masukan Umur" required="required">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir" required="required">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required="required">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk" required="required">
                            <option>Pilih</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan" required="required">
                            <option>Pilih</option>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama" required="required">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Ibu Kandung:</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung" required="required">
                    </div>
                </div>
                </div>
                <br/>
            </div>

        <div class="container py-3 my-3 border">
            <div class="alert alert-primary">
                <strong>Data Wali</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_wali" class="form-control" placeholder="Masukan Nama Lengkap Anda" required="required">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required="required">
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukan Nomor Telepon" required="required">
                    </div>
                </div>                
            </div>

            </br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-outline-secondary">Batal</button>
              
    </div>           
    </form> 
       
    <?php include 'footer.php'; ?>
</body>
</html>