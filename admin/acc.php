<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$sql = "UPDATE tb_testimoni SET status='1' WHERE id = '$id'";
	$exec = mysqli_query($conn, $sql);
	if ($exec)
	 {
		echo "
		
	<script>
    window.history.back();
	</script>
		";
	}
	else
	 {

		echo "
		<script>
	     			alert('Penerimaan Gagal !..');
	     		 window.history.back();
	     		</script>";
	     		
}

?>
