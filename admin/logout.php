<?php


include '../config/koneksi.php';
session_start();
$username = $_SESSION['username'];
				$last_activity = date("Y/m/d h:i:sa");
				$update = mysqli_query($conn,"UPDATE tb_admin SET  `last_activity` = '$last_activity' WHERE username = '$username'");
     			
session_destroy();
header("Location: login.php");
?>