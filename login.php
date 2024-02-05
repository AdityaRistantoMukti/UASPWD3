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
    padding: 10px;
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
    padding: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}
    </style>
</head>
<body>
    <div class="login-container">
    <?php 
            if (isset($_GET['pesan'])) {
                if($_GET['pesan'] == "gagal"){
                    echo "<div class='alert alert-danger'>Email atau Password Salah!</div>";
                }
            }
        ?> 
        <form action="login_aksi.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required="required">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Password" required="required">

            
            <button type="submit" class="btn btn-primary">Masuk</button>
            <a href="register.php" class="btn btn-secondary">Daftar</a>
        </form>
    </div>    
</body>
</html>
