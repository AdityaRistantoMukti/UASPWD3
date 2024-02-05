<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
    display: flex;
    align-items: center;
    justify-content: center;
   background-color : #54C2D3;
    height: 100vh;
    background-size :cover;
    background-position: center ; 
    margin: 0;
}

.login-container {
    max-width: 300px;
    padding: 20px;
    border: 1px solid white;
    border-radius: 5px;
    background-color:white;//
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 18px;
}

.btn-submit {
    background-color: #54C2D3;
    color: white;
    padding: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}
a:hover {
    text-decoration: none;
}
.btn-register {
    background-color: grey;
    color: white;    
    padding-top:10px;
    padding-bottom:10px;
    padding-right:111px;
    padding-left:111px;  
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;      
}
h3 {
    margin-bottom: 20px;
}
p {
    margin-top:8px;
    font-size:13px;
    text-align:center;
}
    </style>
</head>
<body>
    <div class="login-container">
        <div>
            <center><h3>Pendaftaran</h3></center>
        </div>
        <?php 
            if (isset($_GET['pesan'])) {
                if($_GET['pesan'] == "sudah_terdaftar"){
                    echo "<div class='alert alert-warning'>Email Sudah Terdaftar !</div>";
                } else if($_GET['pesan'] == "berhasil"){
                    echo "<div class='alert alert-info'> Selamat Anda Berhasil Daftar</div>";
                }
                }
           
        ?>        
        <form action="register_aksi.php" method="post">
            <label for="full_name">Nama Lengkap:</label>
            <input type="text" id="name" name="full_name" placeholder="Nama Lengkap" required="required">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required="required">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Password" required="required">

                        
            <button type="submit" class="btn-register" name="daftar ">Daftar</button>
            <p>Sudah punya akun ? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>
