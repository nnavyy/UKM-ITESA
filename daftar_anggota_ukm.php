<?php
require_once ("connection.php");
require_once ("header.php");
require_once ("nav_nl1.php");
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Pendaftaran Anggota UKM</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

</div>


<div

    class="container">
     <legend>Anggota</legend> 
    <table class="table">
            <tr>    
                    <td>Nama</td>
                    <td>Prodi</td>
                    <td>Angkatan</td>
                    <td>Ukm</td>
            </tr>
                  
                <?php
                if(isset($koneksi)){
                    $sql=mysqli_query($koneksi,"select * from tb_peserta");
                    while($tampil=mysqli_fetch_array($sql)){
                        echo "<tr>
                        <td>$tampil[Nama]</td>
                        <td>$tampil[Prodi]</td>
                        <td>$tampil[Angkatan]</td>
                        <td>$tampil[Ukm]</td>
                        </tr>";
                    }
                }
                ?>
               
    </table>

<div class="daftar-button">
    <a href="tambah_anggota_ukm.php">+ Mendaftar Anggota UKM</a>
</div>
</body>
</html>