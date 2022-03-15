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
	<body>
	<?php
	include 'config/koneksi.php';

	$sql = "SELECT * FROM tb_setting ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
	?>
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
							<li class="has-dropdown active" >
								<a href="gallery.php">Gallery</a>
								<ul class="dropdown">
									<li><a href="gallery.php">Foto</a></li>
									<li><a href="gallery-vid.php">Videos</a></li>
								</ul>
							</li>
							<li><a href="reservation.php">Reservation</a></li>
							<li  class="has-dropdown" >
								<a href="about.php" >About</a>
								<ul class="dropdown">
									<li ><a href="event.php">Event</a></li>	
									<li ><a href="testimoni.php">Testimoni</a></li>					
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
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
							<h1>See <em>Our</em> Gallery</h1>
							<h2><?php echo $row['motto']; ?>.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-gallery" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Our Gallery</h2>
					<div class="row">
						<div class="col-md-6">
							<p><?php echo $row['galeri']; ?></p>
						</div>
					</div>
				</div>
				<?php
				$top =1 ;
				
					     $event=mysqli_query($conn,"SELECT * FROM tb_galeri WHERE kategori='foto' ORDER BY tanggal DESC  ");
   						 while($eventhas=mysqli_fetch_row($event)){
   						
   				if($top ==1) { 
				?>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
				<?php
			}else if($top==2){
				?>

					<div class="fh5co-bg-img" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
				</div>
				<?php
			}else if($top ==3) { 
				?>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
				<?php
			}else if($top==4){
				?>

					<div class="fh5co-bg-img" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
				</div>
				<?php
			}
			else if($top==5){ ?>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
				</div>
			<?php  
			}else if($top==6){
				?>
					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
			
			<?php 
			}else if($top==7){
				?>

					<div class="fh5co-bg-img" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
				</div>
			<?php
			}else if($top==8){ ?>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
				</div>
			<?php  
			}else if($top==9){
				?>
					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
			
			<?php 
			}else if($top==10){
				?>

					<div class="fh5co-bg-img" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div>
				</div>
			<?php
			 }else{ ?>
			<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(upload/<?php echo $eventhas[3];?>);" data-trigger="zoomerang"></div></div>
				
		<?php	}   $top = $top+1;
			} 
				?>
			</div>
		</div>
	</div></div>

	
	
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Pemesanan Katering</h2>
					<p><?php echo $row['katering']; ?></p>
					<!-- <p><a href="reservation.html" class="btn btn-primary btn-outline" id="myBtn">Book Now</a></p> -->
					<p><a href="reservation.php" class="btn btn-primary btn-outline" >Pesan Sekarang</a></p>
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
	<script src="js/zoomerang.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
		Zoomerang
      .config({
        maxHeight: 600,
        maxWidth: 900,
        bgColor: '#000',
        bgOpacity: .85
      })
      .listen('[data-trigger="zoomerang"]')
	</script>

	</body>
</html>

