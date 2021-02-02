<?php
    include "db_connect.php";
    $id = $_GET['NPM'];
    $ambildata = mysqli_query($sambungan, "SELECT * FROM mahasiswa WHERE NPM='$id'");
    $data = mysqli_fetch_array($ambildata);
?>

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
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card header bg-warning text-black">
                <center>Edit Data Mahasiswa</center>
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="NPM">NPM</label>
                        <input type="text" name="NPM" value="<?php echo $data['NPM']?>" class="form-control col-md-9" placeholder="Masukkan Npm">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?php echo $data['nama']?>" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempatlahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']?>" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>
                    
                    <div class="form-group">
                        <label for="tangggallahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']?>" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki&emsp;
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="kodepos">Kode Pos</label>
                        <input type="number" name="kodepos" value="<?php echo $data['kodepos']?>" class="form-control col-md-9" placeholder="Masukkan Kode Pos">
                    </div>


                    <button type="submit" class="btn btn-dark" name="simpan">SIMPAN</button>
                    <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back(-1)" />
                </form>
        
            </div>
        </div>
    </div>



</body>
</html>

<?php

    if(isset($_POST['simpan']))
    {
        $NPM = $_POST['NPM'];
        $nama= $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $kodepos = $_POST['kodepos'];

        mysqli_query($sambungan, "UPDATE mahasiswa 
        SET NPM='$NPM', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', kodepos='$kodepos'
        WHERE NPM='$id'") or die(mysqli_error($sambungan));

        echo "<div align='center'><h5> Updatingg......... </h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/perkuliahan/form_mahasiswa.php'>";
    }

?>