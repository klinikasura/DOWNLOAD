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

<audio autoplay>
    <source src="LIHAT-FILE.mp3" type="audio/mpeg">
    </audio>


   <td>&nbsp;</td>
<h4>

Selamat Datang : </i><?= $user['nama']; ?></i> (<?= $user['posisi']; ?>)


<?php
$dir = "uploads/"; // Direktori upload

echo "<h4>Daftar File Upload (AI ROBOT SYSTEM V80)</h4>";

if (is_dir($dir)) {
    $files = scandir($dir);
    if ($files !== false) {
        echo "<ul>";
        foreach ($files as $file) {
            // Skip . dan ..
            if ($file != '.' && $file != '..') {
                $file_path = $dir . $file;
                if (is_file($file_path)) {
                    echo "<li><a href='$file_path' target='_blank'>$file</a> (<a href='upload-hapus.php?file=$file'></a>)</li>";
                }
            }
        }
        echo "</ul>";
    } else {
        echo "Gagal membaca direktori.";
    }
} else {
    echo "Direktori upload tidak ditemukan.";
}

echo "<p><a href='upload.php'>(====Kembali ke Upload File, Klik====)</a></p>";
?>

<p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
   <p>&nbsp;</p>








