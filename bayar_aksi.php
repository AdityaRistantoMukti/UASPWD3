<?php include 'koneksi.php'


?>
<?php

$query  = mysqli_query  ($conn,"INSERT INTO bayar (nama, jumlah_bayar, metode) 
        VALUE ('$_POST[nama]','$_POST[bayar]','$_POST[pilih]')");
                                  
                                            
if($query){
    echo "<script>
    alert ('bayar berhasil');
    document.location='kamu.php';
    </script>";
}else{

}
?>
