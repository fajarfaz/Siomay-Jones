<?php
include '../config/koneksi.php';
$id = $_GET['id'];
//kurang unlink
$sql = "DELETE FROM tb_event WHERE id = '$id'";
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
	     			alert('Penghapusan Gagal !..');
	     		 window.history.back();
	     		</script>";
	     		
}

?>
