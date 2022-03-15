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
	<!-- Date Time -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

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
							<li class="active"><a href="reservation.php">Reservation</a></li>
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
							<h1>Pemesanan Katering</h1>
							<h2>"<?php echo $row['motto']; ?>."</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-reservation-form" class="fh5co-section" >
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Reservation</h2>
					<div class="row">
						<div class="col-md-6">
							<p><?php echo $row['katering']; ?></p>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6" style="left: 0;">
					 <form action="" method="POST" enctype="multipart/form-data" id="form-wrap">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Nama Pemesan</label>
								<input type="text" class="form-control" id="name" name="nama" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="many">Email (Jika Ada)</label>
								<input type="email" class="form-control" id="name" name="email" >
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="many">Nomer Telepon</label>
								<input type="text" class="form-control" id="name" name="telp" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="many">Alamat Pengiriman / Tujuan Pengiriman </label>
								<input type="text" class="form-control" id="name" name="alamat" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="many">Keterangan Pesanan</label>
								<textarea rows="3" name="pesanan" class="form-control" required></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="taskdatetime">Untuk Pemesanan Pada Tanggal</label>
								<input type="text" name="tanggal" id="taskdatetime" class="form-control" required/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" name="kirim" value="Pesan">
							</div>
						</div>

					</form>
				</div>
				
				
			</div>
		</div>
	</div>
	<div id="fh5co-timeline">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Langkah-Langkah Pemesanan</h3></div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-genius"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Pertama</h3>
								
								</div>
								<div class="timeline-body">
									<p>Buka halaman reservation pada website Siomay Jones. Isikan data dan pesanan anda pada form yang sudah disediakan pada halaman tersebut.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-genius"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Kedua</h3>
								</div>
								<div class="timeline-body">
									<p>Setelah mengisikan data pemesanan dan klik tombol pesan, anda akan diarahkan pada halaman baru yang berisi bukti pemesanan. Anda diminta untuk menyimpan bukti pemesanan yang nantinya akan ditunjukkan pada pihak Siomay Jones</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-genius"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Ketiga</h3>
								</div>
								<div class="timeline-body">
									<p>Setelah anda mendapat bukti pemesanan, anda diminta untuk menghubungi pihak siomay jones untuk konfirmasi pesanan dan informasi pembayaran</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-genius"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Keempat</h3>
								</div>
								<div class="timeline-body">
									<p>Setelah anda melakukan konfirmasi dan pembayaran, pihak Siomay Jones akan mempersiapkan pesanan anda dan pesanan anda akan diantarkan pada tanggal yang sudah tertera pada bukti pemesanan anda.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-genius"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Kelima</h3>
								</div>
								<div class="timeline-body">
									<p>Setelah pesanan anda sampai ditempat, anda diminta untuk menyerahkan bukti pemesanan yang bisa berupa screenshot/foto/print yang sudah anda simpan sebelumnya untuk mengkonfirmasi pemesan.</p>
								</div>
							</div>

						
			    	</ul>
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
    $telp   = $_POST['telp'];
    $alamat   = $_POST['alamat'];
    $pesanan   = $_POST['pesanan'];
    $tgl_pesan   = $_POST['tanggal'];
    $tanggal = date("Y/m/d h:i:sa");
     $sql = "INSERT INTO tb_pemesanan VALUES ('','$nama','$email','$telp','$alamat','$pesanan','$tgl_pesan','$tanggal','0')";
     $result = mysqli_query($conn, $sql);
     if ($result) 
     {  
  	ini_set( 'display_errors', 1 );   
    error_reporting(0);
    $sql = mysqli_query($conn, "SELECT email FROM tb_admin");
    $sql = mysqli_fetch_row($sql);
    $from = $email;    
    $to = $sql[0];    
    $subject = "Pemesanan Cathering Dari ". $nama;    
    $message = $pesanan;   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
   
    
    echo "
            <script>
            
                
                 window.location = 'print-reservation.php';
            </script>
         
                    
        ";  
     } 
     else 
     {
        echo "
            <script>
                alert('Pemesanan Gagal!');
                 window.history.back(); 
            </script>
        ";          
     }
    


   



}else{ 



}

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

	<!-- Date Time -->
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>
	

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

