<?php 

session_start();
 include 'koneksi.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Simpan data pengguna ke database
    $DataQuery = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

    if ($check = mysqli_num_rows($DataQuery) === 1) {
        $row = mysqli_fetch_assoc($DataQuery);
        if (password_verify($password, $row["password"])) {
            header("location:index.php");
            exit;
        }
    }
    header("location:login.php?pesan=gagal");
    
        
}

?>