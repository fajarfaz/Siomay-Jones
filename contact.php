<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIOMAY JONES</title>
	<link rel="icon" href="images/icons/logo.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

<?php
	include 'config/koneksi.php';
	$sql = "SELECT * FROM tb_setting ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
	?>

	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
				<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.php">SIOMAY JONES<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li ><a href="index.php">Home</a></li>
							<li class="has-dropdown" >
								<a href="menu.php">Menu</a>
								<ul class="dropdown">
									<li><a href="paket.php">Paket</a></li>
									<li><a href="makanan.php">Makanan</a></li>
									<li><a href="minuman.php">Minuman</a></li>
									<li><a href="snack.php">Snack</a></li>
								</ul>
							</li>
							<li class="has-dropdown" class="active">
								<a href="gallery.php">Gallery</a>
								<ul class="dropdown">
									<li><a href="gallery.php">Foto</a></li>
									<li><a href="gallery-vid.php">Videos</a></li>
								</ul>
							</li>
							<li><a href="reservation.php">Reservation</a></li>
							<li  class="has-dropdown" >
								<a href="about.php">About</a>
								<ul class="dropdown">
									<li ><a href="event.php">Event</a></li>	
									<li ><a href="testimoni.php">Testimoni</a></li>					
								</ul>
							</li>
							<li class="active"><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/bk.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>Berikan Saran <em>dan</em> Kritik Anda..</h1>
							<h2>"<?php echo $row['motto']; ?>."</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Don't be shy, let's chat.</h2>
					<p><?php echo $row['kontak']; ?></p>

	<?php
	$sql = "SELECT * FROM tb_admin ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
	?>
					<p><a href="mailto:<?php echo $row['email']; ?>" class="btn btn-primary btn-outline">Contact Us</a></p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6" style="    left: 25%;">
					 <form action="" method="POST" enctype="multipart/form-data" id="form-wrap">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Nama</label>
								<input type="text" class="form-control" id="name" name="nama">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Pesan</label>
								<textarea id="message" cols="30" rows="10" class="form-control" name="pesan"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Kirim" name="kirim">
							</div>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	<?php
	include 'footer.php';

?>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
<?php

if (isset($_POST['kirim'])){

      
    $nama   = $_POST['nama'];
    $email   = $_POST['email'];
    $pesanan   = $_POST['pesan'];
  	ini_set( 'display_errors', 1 );   
    error_reporting(0);
    $from = $email;    
    $to = $row['email'];    
    $subject = "Kritik / Saran Dari ". $nama;    
    $message = $pesanan;   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
   
    
    echo "
            <script>
            	 alert('Pesan Berhasil Dikirim!');
                 <meta http-equiv='refresh' content='0; url=contact.php'> ;
            </script>
         
                    
        ";  
     
    

}else{ 



}

?>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

