<?php
require_once ("connection.php");
require_once("header.php");
require_once("nav_nl1.php");

require_once ("connection.php");

?>
<head>
    <meta charset="UTF-8">
    <title>Profil UKM ITESA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="profil_ukm.css"> 
</head>

	<div class="jumbotron jumbg2" >
	  <h1 class="teksdw">Profil UKM ITESA</h1>
	  <p>ayo daftar menjadi anggota UKM ITESA!</p>
	</div>

<div class="col-md-12">
                <h6 class="teks"><button> <a href="tambah_data_ukm.php">Tambah Data UKM </a></button></h6>
            <hr>
				<br/>
<div class="row demo-tiles">
	<div class="container">
			<div class="col-md-12">
                <h2 class="tekstit">Profil UKM ITESA</h2>
            <hr>
				<br/>
				<div class="row demo-tiles">
<?php $view = mysqli_query($koneksi, "SELECT * FROM tb_ukm");

					if(mysqli_num_rows($view) > 0)
					{
						while ($row = mysqli_fetch_object($view)) 
						{
							?>
							<div class="col-sm-4">
							  <div class="tile">
								<img src="user_images/<?php echo $row->Logo ;?>"  class="tile-image big-illustration">
								<h3 class="tile-title"><?php echo $row->Nama ;?></h3>
								<a class="btn btn-primary btn-large btn-block" href="pud.php?id=<?php echo $row->id;?>">Lihat Selengkapnya</a>
							  </div>
							</div>
							<?php
						}
					}

					?>
				</div>
					
				</div>
			</div>
    </div>
		<br/>


	<footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
        
            <p class="footer-title">
			ukm.itesa.ac.id
			</p>
          </div> <!-- /col-xs-7 -->

          
        </div>
      </div>
    </footer>


<?php
require_once ("footer.php");
?>
