<!DOCTYPE  html>
<html>
<head>
<title>Input Data Mahasiswa</title>
<link  rel="stylesheet"  type="text/css"  href="style.css">
<script  type="text/javascript"  src="jquery.js"></script>
</head>
<body>

<div  class="content">
<header>
<h1  class="judul">INPUT DATABASE MAHASISWA</h1>
</header>
<?php if(isset($_GET['page'])){
$page  =  $_GET['page'];

switch  ($page)  { 

    case  'mahasiswa':
    include  "form_mahasiswa.php"; break;
    default:
    echo  "<center><h3>Maaf.  Halaman  tidak  di  temukan  !</h3></center>";
    break;
    }
    }else{
    include  "form_mahasiswa.php";
    }
    
    ?>
    <div  class="badan">

    </div>
    </div>
    </body>
    </html>
    