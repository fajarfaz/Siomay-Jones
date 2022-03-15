<?php

function send_sms($notujuan,$pesan) {
    $userkey = "pwk2t4";
    $passkey = "siomayjones";
    $url = "https://reguler.zenziva.net/apps/smsapi.php";
    $curlHandle = curl_init();
    curl_setopt($curlHandle, CURLOPT_URL, $url);
    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey=' . $userkey . '&passkey=' . $passkey . '&nohp=' . $notujuan . '&pesan=' . urlencode($pesan));
    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
    curl_setopt($curlHandle, CURLOPT_POST, 1);
    $results = curl_exec($curlHandle);
    curl_close($curlHandle);
}

include '../config/koneksi.php';
$id =  $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tb_pemesanan WHERE id='$id' ");
$row = mysqli_fetch_assoc($result);
$telp = $row['telp'];
send_sms("$telp",'Pemesanan Anda Sudah di Tanggapi, Terima Kasih sudah memesan di Outlet Kami. Siomay Jones Grup');

$reord = "UPDATE tb_pemesanan SET status = '2' WHERE id = '$id'";
 $result2 = $conn->query($reord) or die(mysqli_error());
 echo "
		<script>
	     			alert('Order Diterima !..');
	     		 window.history.back();
	     		</script>";
     ?>