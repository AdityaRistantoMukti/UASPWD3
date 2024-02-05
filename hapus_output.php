<?php 

    include 'koneksi.php';

    mysqli_query($conn, "DELETE from data_anak where id='$_GET[id]'");

    header("location:output_anak.php");
?>