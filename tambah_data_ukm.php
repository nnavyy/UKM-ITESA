<?php

require_once ("connection.php");
require_once ("header.php");
require_once ("nav_nl1.php");


?>
<div class="container">

<div class="col-sm-12 text-center">
    <h2 class="ukm-form-title">Pendaftaran UKM Baru</h2>
</div>


    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="" method="post" enctype="multipart/form-data" class="u
km-form">

                <div class="form-group">
                    <label for="recipient-name" class="control-label">Nama UKM</
label>
                    <input name="nama" type="text" class="form-control" id="reci
pient-name" required>
                </div>

                <div class="form-group">
                    <label for="ukm_image" class="control-label">Logo UKM</label
>
                    <input class="form-control-file" type="file" name="ukm_image
" id="ukm_image" accept="image/*" required>
                </div>

                <div class="form-group text-right">
                    <button type="reset" class="btn btn-secondary">Reset</button
>
                    <button type="submit" class="btn btn-primary">Simpan</button
>
                </div>

                <?php
                include ("connection.php");
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                    $imgFile = $_FILES['ukm_image']['name'];
                    $tmp_dir = $_FILES['ukm_image']['tmp_name'];
                    $imgSize = $_FILES['ukm_image']['size'];

                    $upload_dir = 'user_images/';
                    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION))
;
                    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');

                    $logo = rand(1000,1000000).".".$imgExt;
                    move_uploaded_file($tmp_dir, $upload_dir.$logo);

                    $simpan = mysqli_query($koneksi, "INSERT INTO tb_ukm(nama, l
ogo) VALUES ('$nama', '$logo')");
                    echo "<meta http-equiv='refresh' content='1;url=http://local
host:8080/e-rakyat/profil_ukm.php'>";
                }
                ?>

            </form>
        </div>
    </div>
</div> <!-- This closes the new .container -->
</div> <!-- This is the original extra div -->




<footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-7">

            <p class="footer-title">ukm.itesa.ac.id</p>
                        </p>
          </div> <!-- /col-xs-7 -->


        </div>
      </div>
    </footer>

<?php
require_once ("footer.php");
?>
