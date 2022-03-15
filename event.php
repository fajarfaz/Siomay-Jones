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
.etc{
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;
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
    </style>
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
							<li class="has-dropdown" >
								<a href="gallery.php">Gallery</a>
								<ul class="dropdown">
									<li><a href="gallery.php">Foto</a></li>
									<li><a href="gallery-vid.php">Videos</a></li>
								</ul>
							</li>
							<li><a href="reservation.php">Reservation</a></li>
							<li  class="has-dropdown active" >
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
							<h1>See <em>Our</em> Event</h1>
							<h2><?php echo $row['motto']; ?>.</h2>
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

					     $event=mysqli_query($conn,"SELECT * FROM tb_event ORDER BY tanggal ");
   						 while($eventhas=mysqli_fetch_row($event)){
   						 	$tanggal = date_create($eventhas['6']) ;
   						 	$tanggal = date_format($tanggal,'jS F ' );
   						 	
						      
						      ?>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						
						<a href="#" class="blog-bg" style="background-image: url(upload/<?php echo $eventhas['2'];?>);"></a>
						<div class="blog-text">
							<span class="posted_on"><?php echo $tanggal ?></span>
							<h3><a href="#"><?php echo $eventhas['1'];?></a></h3>
							<p><div class="etc" style="    text-align: justify;"><?php echo $eventhas['4'];?></div></p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>1.2K</li>
								<li><i class="icon-eye2"></i><?php echo $eventhas['7'];?></li>
								<li><a href="event-read.php?id=<?php echo $eventhas[0];?>">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>

				</div>

						      <?php
						   
						 } ?>

				
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
							<p><?php echo $row['testimoni']; ?>.</p>
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
						<p>  &ldquo; <?php echo $eventhas[2]; ?>  &rdquo; </p>
						<p class="author"><cite>&mdash; <?php echo $eventhas[1]; ?></cite></p>
					</blockquote>
				</div>
			
				<?php } ?>

			</div><p style="float: right;"><a href="#" class="btn btn-primary btn-outline" id="myBtn">Kirim Testimoni Anda</a></p>
		</div>

	</div>
	
	
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

	</body>
</html>

