<?php
session_start();
require_once 'config.php';
require_once 'includes.php';

// Pastikan user sudah login
if (!isset($_SESSION['user_id'])) {
    header('Location: http://10.10.20.250/dashboard/APPS-ROBOT/GITHUB/LOG-DOWNLOAD/login.php');
    exit;
}

// Ambil data user berdasarkan ID di session
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM robot80_data_anggota WHERE id=$user_id";
$result = $mysqli->query($query);
$user = $result->fetch_assoc();

update_user_activity($user_id);
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="UTF-8">
      <title>Aplikasi RS. Asura</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
       <link href="http://10.10.20.250/dashboard/download.jpeg" rel="icon" type="image/png" />
        <!-- bootstrap 3.0.2 -->
        <link href="css-version/bootstrap.min.css" rel="stylesheet" type="text/css" />

 <link rel="stylesheet" href="http://10.10.20.250/dashboard/APPS-ROBOT/assets/css/vendor.css">
    <link rel="stylesheet" href="http://10.10.20.250/dashboard/APPS-ROBOT/assets/css/style.css">
    <link rel="stylesheet" href="http://10.10.20.250/dashboard/APPS-ROBOT/assets/css/responsive.css">

  <link rel="stylesheet" href="vendors-V80/feather/feather.css">
  <link rel="stylesheet" href="vendors-V80/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors-V80/css/vendor.bundle.base.css">
 <link rel="stylesheet" href="assets-V80/css/vendor.css">
    <link rel="stylesheet" href="assets-V80/css/style.css">
    <link rel="stylesheet" href="assets-V80/css/responsive.css">

</head>
        
    <div class="footer-area">
        <div class="footer-top text-center" style="background-image: url();">
            <div class="container">            </div>
        </div>
<center>Hai : </i><?= $user['nama']; ?></i> (<?= $user['posisi']; ?>)<p>
    <center><h3>Upload File</h3> </center>
    <center><form action="upload-file.php" method="post" enctype="multipart/form-data">
        <label>Pilih File:</label>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>
    <div id="message"></div>
    <div class="footer-area">
        <div class="footer-top text-center" style="background-image: url();">
            <div class="container">            </div>
        </div>

    <p><a href="upload-lihat.php">(====Lihat File yang Sudah Diupload, Klik====)</a></p>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            var fileInput = document.getElementById('fileToUpload');
            if (fileInput.files.length === 0) {
                e.preventDefault();
                document.getElementById('message').innerHTML = 'Pilih file terlebih dahulu!';
                document.getElementById('message').style.color = 'red';
            }
        });
    </script>

<p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
   <p>&nbsp;</p>





</body>
</html>
