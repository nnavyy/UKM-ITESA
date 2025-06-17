<?php
require_once("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $ukm = $_POST['ukm'];
    $angkatan = $_POST['angkatan'];
    $nomor_whatsapp = $_POST['nomor_whatsapp'];

    $simpan = mysqli_query($koneksi, "INSERT INTO tb_peserta (nama, nim, prodi, ukm, angkatan, nomor_whatsapp)
            VALUES ('$nama', '$nim', '$prodi', '$ukm', $angkatan, '$nomor_whatsapp')");

    if ($simpan) {
        $_SESSION['success'] = "Data berhasil disimpan!";
        header("Location: http://localhost:8080/E-Rakyat/daftar_anggota_ukm.php");
    } else {
        $_SESSION['error'] = "Gagal menyimpan data: " . mysqli_error($koneksi);
        header("Location: tambah_anggota_ukm.php");
    }
    exit;
}
?>

<?php
require_once("header.php");
require_once("nav_nl1.php");

if (isset($_SESSION['success'])) {
    echo "<script>alert('" . $_SESSION['success'] . "');</script>";
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
}
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

<div class="container">
    <form method="post" action="">
        <fieldset>
            <legend>Formulir Pendaftaran</legend>

            <label for="fname">Nama Mahasiswa:</label>
            <input type="text" id="fname" name="nama" placeholder="Isi dengan nama lengkap" required>

            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" placeholder="Mohon isi NIM anda" required>

            <label for="prodi">Prodi:</label>
            <select name="prodi" required>
                <option value="" disabled selected>-- Pilih Prodi --</option>
                <option value="RPL">RPL</option>
                <option value="MR">MR</option>
                <option value="SA">SA</option>
                <option value="Statistik">Statistik</option>
            </select><br>

            <label for="ukm">UKM:</label>
            <select name="ukm" required>
                <option value="" disabled selected>-- Pilih UKM --</option>
                <option value="Eng Club">Eng Club</option>
                <option value="Mapor">Mapor</option>
                <option value="Bem">Bem</option>
                <option value="Statistik">Statistik</option>
            </select><br>

            <label for="angkatan">Angkatan:</label>
            <input type="text" id="angkatan" name="angkatan" pattern="20\d{2}" maxlength="4" placeholder="Contoh: 2022"
            required title="Angkatan harus 4 digit dan dimulai dengan 20"
            oninput="this.value = this.value.replace(/[^0-9+]/g, '')"
><br>

            <label for="nomor_whatsapp">Nomor WA:</label>
            <input type="text" id="nomor_whatsapp" name="nomor_whatsapp" pattern="^\+62\d{9,11}$" maxlength="14" placeholder="+62xxxxxxxxxxx" 
            required title="Harus dimulai dengan +62 dan maksimal 13 digit setelahnya"
            oninput="this.value = this.value.replace(/[^0-9+]/g, '')"
><br>
            
            <button type="submit">Daftar</button>
            <a href="daftar_anggota_ukm.php" class="back-button">← Kembali ke Lihat anggota</a>
        </fieldset>
    </form>
</div>

</body>
</html>
