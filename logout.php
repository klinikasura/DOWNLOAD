<?php
session_start();
if (isset($_SESSION['user_id'])) {
    require_once 'config.php';
    $mysqli->query("UPDATE robot80_user_sessions SET is_active=0 WHERE user_id={$_SESSION['user_id']}");
    session_destroy();
}
header('Location: http://10.10.20.250/dashboard/APPS-ROBOT/GITHUB/LOG-DOWNLOAD/login.php');
exit;
?>
