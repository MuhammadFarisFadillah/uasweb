<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card header bg-dark text-white">
                <center>Table Data Mahasiswa</center>
            </div>
            
            <div class="card-body">
                <a href="add_mahasiswa.php" class="btn btn-primary">Tambah Data</a>
                <input type="text" name="query" placeholder="Cari Data"/>
                <input type="submit" name="cari" value="Search"/>
                
               <table class="table table-bordered">
                    <tr>
                        <th style="text-align:center;">No</th>
                        <th style="text-align:center;">NPM</th>
                        <th style="text-align:center;">Nama</th>
                        <th style="text-align:center;">Tempat Lahir</th>
                        <th style="text-align:center;">Tanggal Lahir</th>
                        <th style="text-align:center;">Jenis Kelamin</th>
                        <th style="text-align:center;">Alamat</th>
                        <th style="text-align:enter;">Kodepos</th>
                        <th style="text-align:center;">Aksi</th>
                    </tr>
                    <?php
                            include "db_connect.php";
                            $no = 1;
                            $tampil = mysqli_query($sambungan, "SELECT * FROM mahasiswa");
                            while($data=mysqli_fetch_array($tampil))
                            { 
                    ?>
                    <tr>
                        <td> <?php echo $no++ ?></td>
                        <td> <?php echo $data['NPM']; ?></td>
                        <td> <?php echo $data['nama']; ?></td>
                        <td> <?php echo $data['tempat_lahir']; ?></td>
                        <td> <?php echo $data['tanggal_lahir']; ?></td>
                        <td> <?php echo $data['jenis_kelamin']; ?></td>
                        <td> <?php echo $data['alamat']; ?></td>
                        <td> <?php echo $data['kodepos']; ?></td>
                        <td>
                        <a href="edit_mahasiswa.php?NPM=<?php echo $data['NPM']; ?>" class= "btn btn-sm btn-dark">Edit &emsp;</a>
                        <a href="delete_mahasiswa.php?NPM=<?php echo $data['NPM']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    
                    <?php } ?>
               </table>

            </div>
        </div>
    </div>



</body>
</html>