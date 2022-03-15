	<?php
	include 'config/koneksi.php';
	$sql = "SELECT * FROM tb_setting ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
	?>

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>Siomay Jones</h4>
					<p><?php echo $row['rincian']; ?></p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="reservation.php">Reservation</a></li>
						<li><a href="about.php">About</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Categories</h4>
					<ul class="fh5co-footer-links">
						<li><a href="makanan.php">Makanan</a></li>
						<li><a href="minuman.php">Minuman</a></li>
						<li><a href="paket.php">Paket</a></li>
						<li><a href="snack.php">Snack</a></li>
						<li><a href="index.php#lokasi">Best & Unique Menu</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>Jl. Soekarno - Hatta, <br> No. D-413 Malang, Jawa Timur </li>
						<li><a href="tel://0812-1458-2842">+62 898 0321 123</a></li>
						<li><a href="mailto:info@yoursite.com">siomayjones@gmail.com</a></li>
						<li>Open Everyday 11AM - 10PM</li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2018 PKN Institut Teknologi Nasional Malang & Siomay Jones</small> 
						 All Rights Reserved.
						<!-- <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small> -->
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://twitter.com/siomayjones?lang=en"><i class="icon-twitter2"></i></a></li>
							<li><a href="https://id-id.facebook.com/siomayjones/"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="https://www.instagram.com/siomayjones"><i class="icon-instagram2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>
	