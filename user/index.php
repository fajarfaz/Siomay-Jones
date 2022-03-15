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
  <style type="text/css">
        
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9000; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
input[type="text"],input[type="email"]{
margin: 4px;
	height: 32px;
	}
textarea {
	height: 90px;
    width: 100%;
    margin: 4px;
    }
input[type="submit"]{
	width: 200px;
	margin: 20px 4px 5px 4px;
}
input[type="file"] {
	margin: 4px 4px 5px 4px;
}
.module{
	 width: 100%;
  overflow: hidden;
 
}
.line-clamp {
      position: relative;
     height: 16.6em; /* exactly three lines */
    }
.line-clamp:after {
      content: "";
      text-align: right;
      position: absolute;
      bottom: 0;
      right: 0;
      width: 70%;
      height: 1.2em;
     
 }

@supports (-webkit-line-clamp: 7) {
    .line-clamp {
           display: -webkit-box;
    -webkit-line-clamp: 9;
    -webkit-box-orient: vertical;
    max-height: 18.6em;
    height: auto;
    }
    .line-clamp:after {
        display: none;
    }
}
    </style>
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
							<li  class="active"><a href="index.php">Home</a></li>
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
							<li class="has-dropdown">
								<a href="about.php">About</a>
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
							
							<h1>The Best Siomay <em>&amp;</em> Diner <em>in</em> Malang</h1>
							<h2>"<?php echo $row['motto']; ?>."</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

<div id="fh5co-blog" class="fh5co-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Events</h2>
					<p><?php echo $row['event']; ?></p>
				</div>
			</div>
			<div class="row">
				<?php

					     $event=mysqli_query($conn,"SELECT * FROM tb_event ORDER BY tanggal DESC LIMIT 4");
   						 while($eventhas=mysqli_fetch_row($event)){
   						 	$tanggal = date_create($eventhas['6']) ;
   						 	$tanggal = date_format($tanggal,'jS F ' );
   						 	$paymentDate = date('Y-m-d');
    						$paymentDate=date('Y-m-d', strtotime($paymentDate));;
    						$contractDateBegin = date('Y-m-d', strtotime($eventhas['3']));
   							$contractDateEnd = date('Y-m-d', strtotime($eventhas['5']));
   						 	if (($paymentDate >= $contractDateBegin) && ($paymentDate <= $contractDateEnd))
   						 	
						    {
						      $last_event = date_create($eventhas['5']) ;
    						$last_event = date_format($last_event,'d,M y ' );
						      ?>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						
						<a href="event-read.php?id=<?php echo $eventhas[0];?>#lokasi" class="blog-bg" style="background-image: url(upload/<?php echo $eventhas['2'];?>);" ></a>
						<div class="blog-text">
							<span class="posted_on"><?php echo $tanggal ?></span>
							<h3><a href="event-read.php?id=<?php echo $eventhas[0];?>#lokasi"><?php echo $eventhas['1'];?></a></h3>
							<p><div class="module line-clamp" style="text-align: justify;  height:6.6em;-webkit-line-clamp: 4;"><?php echo $eventhas['4'];?></div></p>
							<ul class="stuff">
								<li><i class="icon-eye2"></i><?php echo $last_event;?></li>
								<li><i class="icon-heart2"></i><?php echo $eventhas['7'];?></li>
								<li><a href="event-read.php?id=<?php echo $eventhas[0];?>#lokasi">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>

				</div>

						      <?php
						    }
						    else
						    {
						     
						    }
						 } ?>

				
			</div>
		</div>
	</div>


	<div id="fh5co-featured-menu" class="fh5co-section" style="background: #352c2c59;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Today's Menu</h2>
					<div class="row">
						<div class="col-md-6">
							<p><?php echo $row['promosi']; ?> </p>
						</div>
					</div>
				</div>
				<?php
				 function rupiah($angka){
				    $hasil_rupiah = "Rp " . number_format($angka);
				    return $hasil_rupiah;
				}
					$top =1 ;
					     $event=mysqli_query($conn,"SELECT * FROM tb_produk ORDER BY tanggal DESC limit 4 ");
   						 while($eventhas=mysqli_fetch_row($event)){
   						 	$rp =rupiah($eventhas[2]);
   						 	$top = $top+1;
						?>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box" >
				<?php
			if($top % 2 == 0) {

				?>	<div class="fh5co-item margin_top">
					<?php
				} else{  ?>
					<div class="fh5co-item ">
					<?php
				}  ?>
						<img src="upload/<?php echo $eventhas[7]; ?>" class="img-responsive" alt="<?php echo $eventhas[1]; ?>" data-trigger="zoomerang">
						<h3><?php echo $eventhas[1]; ?></h3>
						<span class="fh5co-price" style="margin-bottom: 0px;"><?php echo $rp; ?><sup>.00</sup></span>
						<font style="color: #95a5a6;"><?php echo $eventhas[3]; ?></font>
						<div class="module line-clamp" style=" -webkit-line-clamp: 4;height: 6.6em;"><?php echo $eventhas[4]; ?></div>
					</div>
				</div>

				<?php 
				 
				} ?>
				
			</div>
		</div><p style="    text-align: center;
    margin-top: 2em;
    margin-bottom: -2em;"><a href="menu.php" class="btn btn-primary btn-outline" style="font-size: 20px !important;">Lihat Semua Menu</a></p>
	</div>


<div id="fh5co-slider" class="fh5co-section animate-box">
		<div class="container">
			<div class="row">
				<div id="lokasi"></div>
				<div class="col-md-6 animate-box">
					<div class="fh5co-heading">
						<h2>Our Best <em>&amp;</em> Unique Menu</h2>
						<p><?php echo $row['best']; ?></p>
					</div>
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<aside id="fh5co-slider-wrwap">
					<div class="flexslider">
						<ul class="slides">
							<?php
							$event=mysqli_query($conn,"SELECT * FROM tb_produk WHERE unik='1' ORDER BY tanggal  DESC limit 5 ");
   						 while($eventhas=mysqli_fetch_row($event)){
   						 	$rp =rupiah($eventhas[2]);
   						 	
						?>
					   	<li style="background-image: url(upload/<?php echo $eventhas[7]; ?>);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2><?php echo $eventhas[1]; ?> <em>Special</em> Siomay Jones</h2>
													<span class="fh5co-price" style=" color: #dcdc08;font-size: 1.5em;"><?php echo $rp; ?><sup>.00</sup></span>
													<font style="color: #95a5a6;"><?php echo $eventhas[3]; ?></font>
													<p><?php echo $eventhas[4]; ?>.</p>
													<p><a href="menu.php" class="btn btn-primary btn-outline">Learn More</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	   	<?php } ?>
					  	</ul>
				  	</div>
				</aside>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
					<img src="images/hero_1.jpeg" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="section-heading">
						<?php ?>
						<h2>The Restaurant</h2>
						<p>
							<div class="module line-clamp"><?php echo $row['sejarah']; ?></div>
						</p>
						<p><a href="about.php" class="btn btn-primary btn-outline">Our History</a></p>
						<?php ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Testimony</h2>
					<div class="row">
						<div class="col-md-6">
							<p><?php echo $row['testimoni']; ?></p>
						</div>
					</div>
				</div>
				<?php 
				$top =1 ;
				$event=mysqli_query($conn,"SELECT * FROM tb_testimoni WHERE status='1' ORDER BY tanggal DESC limit 4 ");
   			    while($eventhas=mysqli_fetch_row($event)){
   			    	$top = $top+1;
   							if($top % 2 == 0) {

   						  ?>
				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="upload/<?php echo $eventhas[3]; ?>" alt="" style="">
				</div>
					<?php
				} else{  ?>
				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft" style="width: 220px;">
						<img src="upload/<?php echo $eventhas[3]; ?>" alt="" style="float: left;">
				</div>
					<?php
				}  ?>

				<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
					<blockquote>
						<p>  &ldquo; <?php echo $eventhas[2]; ?> &rdquo; </p>
						<p class="author"><cite>&mdash; <?php echo $eventhas[1]; ?></cite></p>
					</blockquote>
				</div>
			
				<?php } ?>

			</div><p style="float: right;"><a href="#" class="btn btn-primary btn-outline" id="myBtn">Kirim Testimoni Anda</a></p>
			<p style="float: left;"><a href="testimoni.php#lokasi" class="btn btn-primary btn-outline" id="myBtn">Lihat Semua Testimoni</a></p>
		</div>

	</div>
    



<div id="fh5co-featured-testimony" class="fh5co-section" style="padding: 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Lokasi</h2>
					<div class="row">
						<div class="col-md-6">
							<p><?php echo $row['lokasi']; ?></p>
						</div>
					</div>
				</div>
						
				
				
			</div>

		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15806.234512565403!2d112.6234414!3d-7.9410781!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f2c0ffb1f55e1c0!2sSiomay+Jones!5e0!3m2!1sid!2sid!4v1518715398008" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
	
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Pemesanan Katering</h2>
					<p><?php echo $row['katering']; ?></p>
				
					<p><a href="reservation.php" class="btn btn-primary btn-outline" >Pesan Sekarang</a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1><center>TESTIMONIAL</center></h1>
    <p ><table style="color : black; ">
    	   <form action="" method="POST" enctype="multipart/form-data" >
    	<tr><td>Nama  </td><td><input type="text" name="nama" required><br></td></tr>
    	<tr><td>Email </td><td><input type="email" name="email" required><br></td></tr>
    	<tr><td>Testimoni  </td><td><textarea minlength=100 rows="3" name="testimoni"  required></textarea></td></tr>
    	<tr><td>Foto </td><td><input type="file" name="foto" required></td></tr><br><br>
    	<tr><td></td><td><input type="submit" name="kirim" value="Kirim"></td></tr>
    	</form>
    	</table>
    </p>
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

$target_dir = "upload/";
$target_file = $target_dir  .date("hisa") . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["foto"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {

 $testimoni   = $_POST['testimoni'];
 $hasil=strlen($testimoni);
 if($hasil<=100){
 	 echo "
            <script>
            	  alert('Testimoni Gagal dikirim karena testimoni kurang');
                 window.history.back(); 
            </script>
         
                    
        ";  
 }else{
 
    if (move_uploaded_file($_FILES["foto"]["tmp_name"],  $target_file )) {
        $foto = date("hisa"). basename( $_FILES["foto"]["name"]);
      
    $nama   = $_POST['nama'];
    $email   = $_POST['email'];

    $tanggal = date("Y/m/d");
     $sql = "INSERT INTO tb_testimoni VALUES ('','$nama','$testimoni','$foto','0','$email','$tanggal')";
     $result = mysqli_query($conn, $sql);
     if ($result) 
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

                alert('Testimoni Gagal dikirim');
                 window.history.back(); 
            </script>
        ";          
     }
    


    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}

}else{ 



}

?>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/zoomerang.js"></script>
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
		<script src="js/jquery.flexslider-min.js"></script>
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

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
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

