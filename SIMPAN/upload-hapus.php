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

 <td>&nbsp;</td>
<h4>

<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $file_path = "uploads/" . $file;

    if (file_exists($file_path) && is_file($file_path)) {
        if (unlink($file_path)) {
            echo "File '$file' Berhasil dihapus.<br>";
        } else {
            echo "Gagal menghapus file '$file'.<br>";
        }
    } else {
        echo "File '$file' tidak ditemukan.<br>";
    }
} else {
    echo "Nama file tidak diberikan.<br>";
}

echo "<p><a href='upload-lihat.php'>(====Kembali ke Daftar File, Klik====)</a></p>";
?><p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
   <p>&nbsp;</p>






