<?php
include  "db_connect.php";
$NPM  =  $_POST['NPM'];
$nama  =  $_POST['nama'];
$tempat_lahir  =  $_POST['tempat_lahir'];
$tanggal_lahir  =  $_POST['tanggal_lahir'];
$jenis_kelamin  =  $_POST['jenis_kelamin'];
$alamat  =  $_POST['alamat'];
$kodepos  =  $_POST['kodepos'];

$query=mysqli_query($sambungan,  "INSERT  INTO  Mahasiswa  (NPM,  nama,  tempat_lahir,  tanggal_lahir,  jenis_kelamin,  alamat,  kodepos)
VALUES  ('$NPM','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin',' $alamat','$kodepos')");

if($query)  {
?>
<script  language="JavaScript"> document.location='form_mahasiswa.php'</script>
<?php
}
?>
