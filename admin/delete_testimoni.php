<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM tb_testimoni WHERE id = '$id'";
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
