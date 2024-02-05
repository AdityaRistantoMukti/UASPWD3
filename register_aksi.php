<?php 
 
 include 'koneksi.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

     // Validasi apakah email sudah terdaftar
     $cek = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
     if (mysqli_fetch_assoc($cek)) {
         header('location:register.php?pesan=sudah_terdaftar');
         exit(); // Menghentikan eksekusi script setelah header di-redirect
     }
 
     // Simpan data pengguna ke database
     $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$hashedPassword')";
     if ($conn->query($insertQuery) === TRUE) {
         header('location: register.php?pesan=berhasil');
         exit(); // Menghentikan eksekusi script setelah header di-redirect
     } else {
         echo "Error: " . $insertQuery . "<br>" . $conn->error;
     }
}
// Tutup koneksi database
$conn->close();
?>