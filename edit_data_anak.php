<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM data_anak WHERE id = $id";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
    }
}

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alergi = $_POST['alergi'];
    $umur = $_POST['umur'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $nama_wali = $_POST['nama_wali'];

    $query = "UPDATE data_anak SET 
              nama = '$nama', 
              alergi = '$alergi', 
              umur = '$umur', 
              tmpt_lahir = '$tmpt_lahir', 
              tgl_lahir = '$tgl_lahir', 
              jenis_kelamin = '$jenis_kelamin', 
              agama = '$agama', 
              nama_wali = '$nama_wali' 
              WHERE id = $id";
    
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "<script>alert('Data berhasil disimpan'); window.location='output_anak.php';</script>";
    } else {
        echo "Failed to update data.";
    }
}
    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anak</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include 'navbar1.php' ?>

    <div class="container p-3 border" style="margin-bottom:282px; margin-top:20px;">
        <h1 class="text-center">Edit Data Anak</h1>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="form-group">
                <label>Nama Anak</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="form-group">
                <label>Alergi</label>
                <input type="text" name="alergi" class="form-control" value="<?php echo $data['alergi']; ?>">
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input type="number" name="umur" class="form-control" value="<?php echo $data['umur']; ?>">
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tmpt_lahir" class="form-control" value="<?php echo $data['tmpt_lahir']; ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $data['tgl_lahir']; ?>">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="L" <?php if($data['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
                    <option value="P" <?php if($data['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input type="text" name="agama" class="form-control" value="<?php echo $data['agama']; ?>">
            </div>
            <div class="form-group">
                <label>Nama Wali</label>
                <input type="text" name="nama_wali" class="form-control" value="<?php echo $data['nama_wali']; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
