
<?php 
include '../config/koneksi.php';


// if (isset($_POST['kirim'])){

	$email  = $_POST['email'];
	$password   = $_POST['pass'];
	$encode		= "pknitn2018";
	$sql = "SELECT * FROM tb_admin WHERE email = '$email'";
	$result = mysqli_query($conn, $sql);
	if (empty($id) && empty($password)) 
		{
			echo "
    			<script>
    				alert('Harap isi dengan benar');
    				window.location = 'login.php';
    			</script>
    		";					
		} 
		else 
		{	

			if ($result)
			{	
				
				$row = mysqli_fetch_assoc($result);
				$passcheck = $row["password"];
				if (md5($encode.$password) == $passcheck) 
				{
					//Creating Sessions Variable
					
					if (session_status() == PHP_SESSION_NONE) {
					session_start();
					$_SESSION['last_activity']  = $row['last_activity'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					
					
					header('location:index.php');	
			
						}else{
							echo "
					<script>
    					alert('Harap Logout dahulu');
    					window.location = 'index.php';
    				</script> ";
						}
				} 
				else 
				{
					echo " 
					<script>

    					alert('Masukkan ID dan Password dengan benar');
    					 window.location = 'login.php';
    				</script>
				";
				}
			} 
			else 
			{
				echo " $sql
					<script>
    					alert('ID dan Password tidak Boleh Kosong');
    					 window.location = 'login.php';
    				</script>
				";
			}

}
// }else{ 

// }
	?>