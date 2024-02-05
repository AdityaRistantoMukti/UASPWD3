<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Data Anak</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
   
    .button{
        gap :10px;
        float:right;
        margin:2px;
    }

</style>
<body>
    <?php include 'navbar1.php' ?>

    <div class="container p-3  border" style="margin-bottom:282px; margin-top:20px;">
        <h1 class="text-center">Data Anak</h1>

        <?php
        include 'koneksi.php';

      $no=1;
            $tampil = mysqli_query($conn, "SELECT * FROM data_anak order by id desc");
            while($data = mysqli_fetch_array($tampil)) :

        ?>

                <table class="table  table-striped">
                 
                        <tr>
                            
                            <th scope="col">ID</th>
                            <th scope="col">Nama Anak</th>
                            <th scope="col">Alergi</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Nama Wali</th>
                            <th scope="col" style="text-align:center">Aksi</th>
                       
                        </tr>
                    
                        <tr>
                        
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['alergi']; ?></td>
                            <td><?php echo $data['umur']; ?></td>
                            <td><?php echo $data['tmpt_lahir']; ?></td>
                            <td><?php echo $data['tgl_lahir']; ?></td>
                            <td><?php echo $data['jenis_kelamin']; ?></td>
                            <td><?php echo $data['agama']; ?></td>
                            <td><?php echo $data['nama_wali']; ?></td>

                            <td>
                            <div class="button">
                                <a href="#" class="btn btn-sm btn-secondary ">Detail</a>
                                <a href="edit_data_anak.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning " onclick="confirm('Apakah kamu yakin Melakukan edit ?')">Edit</a>

                                <a href="hapus_output.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger " onclick="confirm('Apakah kamu yakin ?')">Hapus </a>
                            </div>
                            </td>
                          
                        </tr>
                </table>

        <?php endwhile;?>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>