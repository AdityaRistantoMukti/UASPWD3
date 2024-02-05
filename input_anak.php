<?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
        $nama_anak = $_POST['nama_anak'];
        $nama_wali=$_POST['nama_wali'];
        $tempat_lahir=$_POST['tempat_lahir'];
        $tanggal_lahir=$_POST['tanggal_lahir'];
        $kewarganegaraan=$_POST['kewarganegaraan'];
        $agama=$_POST['agama'];
        $nama_ibu=$_POST['nama_ibu'];        
        $no_telp=$_POST['no_telp'];
        $alamat=$_POST['alamat'];
        $jk=$_POST['jk'];
        $umur=$_POST['umur'];
        $alergi=$_POST['alergi'];


        //Query input menginput data kedalam tabel pendaftaraan
        $data_anak= mysqli_query($conn,"INSERT INTO data_anak(nama,alergi,umur,tmpt_lahir,tgl_lahir,jenis_kelamin,warga_negara,agama,ibu_kandung,nama_wali,alamat,no_telp) VALUES ('$nama_anak','$alergi','$umur','$tempat_lahir','$tanggal_lahir','$jk','$kewarganegaraan','$agama','$nama_ibu','$nama_wali','$alamat','$no_telp')");

        header("location:bayar.php");
    }
    ?>