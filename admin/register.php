<?php
include '../config/koneksi.php';
$sql = "SELECT * FROM tb_admin ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if (empty($row['username'])) {
	

?>

<form action="" method="POST">				
								<input placeholder="Username" name="username" type="text" required="">
								<input placeholder="Email Address" name="email" type="email" required="">						
								<input placeholder="Password" name="password" type="password" required="">	
								<input placeholder="Confirm Password" name="password2" type="password" required="">
								<span class="checkbox1">
									<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I Agree To All Terms And Conditions</label>
								</span>

								<input type="submit" value="Daftar" name="kirim" />
									</form>

<?php 

if (isset($_POST['kirim'])){

	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $password= $_POST['password'];
	 $password2= $_POST['password2'];

	 if ($password == $password2 ){
	 	$encode  = "pknitn2018";    
		$password = md5($encode.$password);  	
		$date = date("Y/m/d h:i:sa");
	 	$sql = "INSERT INTO tb_admin VALUES ('$username','$password','$email','$date')";
	 	$result = mysqli_query($conn, $sql);

	 	$sql1 = "SELECT * FROM tb_admin WHERE username = '$username'";
		$result1 = mysqli_query($conn, $sql1);
		$row = mysqli_fetch_assoc($result1);
		session_start();

		$_SESSION['username'] = $row['username'];
		$_SESSION['email'] = $row['email'];
	 	

	 echo " 

     		<script>
     		alert('Pendaftaran Akun Berhasil !..');
     		</script>
     			<meta http-equiv='refresh' content='0; url=login.php'>	
     	";	
	 }else{
	 		echo "
     		<script>
     			alert('Pendaftaran Akun Gagal !..');
     		
     		</script>
     		<meta http-equiv='refresh' content='0; url=register.php'>			
     	";	
	 }
}else{

	 }

	}else{
	
	

	echo "
     		<script>
     			alert('Pendaftaran Akun Gagal , Akun Admin sudah ada!..');
     		
     		</script>
     		<meta http-equiv='refresh' content='0; url=login.php'>			
     	";	



	}
?>
