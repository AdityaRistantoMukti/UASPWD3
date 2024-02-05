<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
function saveInvoice() {
    alert('Invoice berhasil disimpan!');
}
</script>

<?php
include 'koneksi.php';
session_start();

// Memeriksa apakah data pembayaran telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['bayar'] = $_POST['bayar'];
    $_SESSION['pilih'] = $_POST['pilih'];
}
?>
<button type="button" onclick="saveInvoice()">Simpan Invoice</button>
<a href="download_invoice.php" download><button>Unduh Invoice</button></a>

</body>
</html>