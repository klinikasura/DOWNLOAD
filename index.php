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
<html>
<head>
<html xmlns="http://www.w3.org/1999/xhtml">
	  <link href="http://10.10.20.250/dashboard/download.jpeg" rel="icon" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi RS. Asura</title>
	<style>
		.header {
			background-color: #3498db;
			color: #fff;
			padding: 10px;
			text-align: center;
			border-bottom: 1px solid #ddd;
		}
		
		.menu {
			background-color: #fff;
			padding: 10px;
			border-bottom: 1px solid #ddd;
		}
		
		.menu ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}
		
		.menu li {
			display: inline-block;
			margin-right: 20px;
		}
		
		.menu a {
			color: #333;
			text-decoration: none;
		}
		
		.menu a:hover {
			color: #3498db;
		}
		
		.download-icon {
			font-size: 16px;
			margin-right: 5px;
		}
		
		.wallet {
			background-color: #f9f9f9;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		
		.wallet .balance {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		
		.wallet .button {
			background-color: #3498db;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 10px;
			cursor: pointer;
		}
		
		.wallet .button:hover {
			background-color: #2980b9;
		}
		
		.content {
			padding: 20px;
		}
	</style>
</head>
<body>
	<div class="header">
		<h1>AI ROBOT SYSTEM V80</h1>
</i><?= $user['nama']; ?></i> (<?= $user['posisi']; ?>)
	</div>
	<div class="menu">
		<ul>
			<li><a href="FILE/KhanzaHMSLinux.zip"><span class="download-icon">&#128190;</span>SIMRS KHANZA</a></li>
<li><a href="https://robotv80.blogspot.com/" Target="_blank"><span class="download-icon">&#128190;</span> ROBOT V80</a></li>



		</ul>
	</div>

	<div class="content">
		<div class="wallet">
			<h2>CACHE</h2>
				<a href="SIMPAN/upload-lihat.php" Target="_blank"><button class="button">Download</button></a>
			<a href="SIMPAN/upload.php" Target="_blank"><button class="button">Upload</button></a>
<a href="http://10.10.20.250/dashboard/ROBOT-DASHBOARD/"><button class="button">Masuk</button></a>
<a href="logout.php"><button class="button">Logout</button></a>
		</div>

	








</body>
</html>
