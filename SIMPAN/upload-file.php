 <meta charset="UTF-8">
      <title>Aplikasi RS. Asura</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
       <link href="http://10.10.20.250/dashboard/download.jpeg" rel="icon" type="image/png" />
        <!-- bootstrap 3.0.2 -->
        <link href="css-version/bootstrap.min.css" rel="stylesheet" type="text/css" />


<style>
    .progress {
        width: 100%;
        background-color: #f1f1f1;
        border-radius: 5px;
        margin-top: 10px;
    }

    .progress-bar {
        width: 0%;
        height: 20px;
        background-color: #4CAF50;
        border-radius: 5px;
        text-align: center;
        color: #fff;
        font-size: 12px;
        line-height: 20px;
        transition: width 0.5s;
    }

    .loading {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    .loading-spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 5px solid #f3f3f3;
        border-top: 5px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<div class="loading" id="loading">
    <div class="loading-spinner"></div>
</div>








 <link rel="stylesheet" href="http://10.10.20.250/dashboard/APPS-ROBOT/assets/css/vendor.css">
    <link rel="stylesheet" href="http://10.10.20.250/dashboard/APPS-ROBOT/assets/css/style.css">
    <link rel="stylesheet" href="http://10.10.20.250/dashboard/APPS-ROBOT/assets/css/responsive.css">

  <link rel="stylesheet" href="vendors-V80/feather/feather.css">
  <link rel="stylesheet" href="vendors-V80/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors-V80/css/vendor.bundle.base.css">
 <link rel="stylesheet" href="assets-V80/css/vendor.css">
    <link rel="stylesheet" href="assets-V80/css/style.css">
    <link rel="stylesheet" href="assets-V80/css/responsive.css">
<h4><center>

    <div class="footer-area">
        <div class="footer-top text-center" style="background-image: url();">
            <div class="container">            </div>
        </div>


    <div class="footer-area">
        <div class="footer-top text-center" style="background-image: url();">
            <div class="container">            </div>
        </div>





<?php
$target_dir = "uploads/"; // Direktori untuk simpan file upload
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// Cek apakah direktori upload ada, jika tidak buat
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if(isset($_POST["submit"])) {
    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        echo "File dengan nama sama sudah ada.<br>";
        $uploadOk = 0;
    }

    // Cek ukuran file (contoh batas 5MB)
    if ($_FILES["fileToUpload"]["size"] > 999999999) {
        echo "File Terlalu Besar.<br>";
        $uploadOk = 0;
    }

    // Izinkan format file tertentu (contoh: jpg, png, pdf)
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $allowedTypes = array('jpg', 'jpeg','gif', 'jar','apk','mp3','png', 'pdf', 'docx', 'excel','ppt','xlsx','rar','zip','txt','exe','bat','msi');
    if(!in_array($fileType, $allowedTypes)) {
        echo "Hanya file " . implode(', ', $allowedTypes) . " yang diizinkan.<br>";
        $uploadOk = 0;
    }

    // Cek apakah $uploadOk = 0 karena error
    if ($uploadOk == 0) {
        echo "File tidak diupload.<br>";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " Berhasil diupload.<br>";
            echo "<a href='upload-lihat.php'>(====Lihat File Upload, Klik====)</a>";
        } else {
            echo "Terjadi kesalahan saat upload file.<br>";
        }
    }
} else {
    echo "Tidak ada file dikirim.";
}
?>

<div class="progress">
        <div class="progress-bar" id="progress-bar">0%</div>
    </div>
<script>
    const form = document.getElementById('upload-form');
    const progressBar = document.getElementById('progress-bar');
    const loading = document.getElementById('loading');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        loading.style.display = 'block';
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '', true);
        xhr.upload.addEventListener('progress', (e) => {
            const percent = (e.loaded / e.total) * 100;
            progressBar.style.width = `${percent}%`;
            progressBar.textContent = `${Math.round(percent)}%`;
        });
        xhr.onload = () => {
            loading.style.display = 'none';
        };
        xhr.send(new FormData(form));
    });
</script>



<p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
   <p>&nbsp;</p>







