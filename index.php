<?php
require_once("header.php");
require_once("nav_nl1.php");
?>
<div class="jumbotron jumbg" >> 
    <h1 class="teksdw">Selamat datang</h1> 
    <p class="teksdw">di web UKM ITESA!</p> 
</div> 

    <div class="container"> 
         <div class="row demo-tiles"> 

    <div class="col-sm-4"> 
          <div class="tile"> 
            <img src="asset/img/icons/png/school.png" class="title-image big illustration">
            <h3 class="tile-title">Profil UKM ITESA</h3> 
            <p>Untuk melihat beberapa profil UKM ITESA dapat dilihat disini.</p>
            <a class="btn btn-primary btn-large btn-block" href="profil_ukm.php">Lihat</a>
           </div> 
         </div>

    <div class="col-sm-4"> 
          <div class="tile"> 
            <img src="asset/img/icons/png/mouse.png" class="title-image big illustration">
            <h3 class="tile-title">mendaftar UKM ITESA</h3> 
            <p>Untuk melihat beberapa mendaftar UKM ITESA dapat dilihat disini.</p>
            <a class="btn btn-primary btn-large btn-block" href="daftar_anggota_ukm.php">Lihat</a>
           </div> 
         </div>

    <div class="col-sm-4"> 
          <div class="tile"> 
            <img src="asset/img/icons/png/megaphone.png" class="title-image big illustration">
            <h3 class="tile-title">hasil daftar UKM ITESA</h3> 
            <p>Hasil daftar anggota UKM ITESA yang diterima dapat dilihat disini.</p>
            <a class="btn btn-primary btn-large btn-block" href="hpu.php">Lihat</a>
           </div> 
         </div> 
    </div> 
</div>

<?php
require_once("footer.php");
?>