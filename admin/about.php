 <?php 
include "../config/koneksi.php";
session_start(); 
                   if (empty($_SESSION['username'])){
                    echo "<meta http-equiv='refresh' content='0; url=login.php'> ";
                   }else{
                  
    $username =  $_SESSION['username'];
  $last_activity = date_create($_SESSION['last_activity'] ) ;
    $last_login = date_format($last_activity,'jS F g:ia ' );
     $email =  $_SESSION['email'];
     $sql = "SELECT * FROM tb_setting ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - Siomay Jones</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="../css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SIOMAY JONES</a>
            </div>

            <div class="header-right">

<?php  
$sql =  mysqli_query($conn, "SELECT COUNT(id) FROM tb_pemesanan WHERE status='0'");
$sql = mysqli_fetch_row($sql);
?>
                <a href="pemesanan.php" class="btn btn-info" title="Pesanan Baru"><b><?php echo $sql[0];?> </b><i class="fa fa-envelope-o fa-2x"></i></a>
<?php  
$sql =  mysqli_query($conn, "SELECT COUNT(id) FROM tb_testimoni WHERE status='0'");
$sql = mysqli_fetch_row($sql);
?>
                <a href="testimoni.php" class="btn btn-primary" title="Kiriman Testimoni Baru"><b><?php echo $sql[0];?> </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="saran.php" class="btn btn-danger" title="Kritik Dan Saran"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                             <img src="../images/admin.png" class="img-thumbnail" />
                            
                            <div class="inner-text">
                                <?php echo $_SESSION['username']; ?>
                            <br />
                                <small>Terakhir Login : <font style="color: #00ca79;"><?php echo  $last_login ;?> </font></small>
                            </div>
                        </div>
color: #00ca79;
                    </li>


                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard "></i>DASHBOARD</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask "></i>PRODUK <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse" style="">
                            <li>
                                <a href="input_produk.php"><i class="fa fa-plus"></i>Input Data</a>
                            </li>
                            <li>
                                <a href="data_produk.php"><i class="fa fa-edit "></i>Edit Data</a>
                            </li>
                           </ul>
                     <li>
                        <a href="#"><i class="fa fa-coffee "></i>EVENT  <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level collapse" style="">
                            <li>
                                <a href="input_event.php"><i class="fa fa-plus"></i>Input Data</a>
                            </li>
                            <li>
                                <a href="data_event.php"><i class="fa fa-edit "></i>Edit Data</a>
                            </li>
                           <!--   <li>
                                <a href="setting_waktu.php"><i class="fa fa-bell "></i>Jangka Waktu</a>
                            </li> -->
                           </ul>
                       
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>GALERI <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse" style="">
                            <li>
                                <a href="input_galeri.php"><i class="fa fa-plus"></i>Input Data</a>
                            </li>
                            <li>
                                <a href="data_galeri.php"><i class="fa fa-edit "></i>Edit Data</a>
                            </li>
                           </ul>
                     <li>
                     	<li>
                        <a href="#"><i class="fa fa-send "></i>PEGAWAI <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse" style="">
                            <li>
                                <a href="input_pegawai.php"><i class="fa fa-plus"></i>Input Data</a>
                            </li>
                            <li>
                                <a href="data_pegawai.php"><i class="fa fa-edit "></i>Edit Data</a>
                            </li>
                           </ul>
                     <li>
                    <li>
                        <a href="testimoni.php"><i class="fa fa-comments-o "></i>TESTIMONI</a>
                    </li>
                      <li>
                        <a href="pemesanan.php" class="active-menu"><i class="fa fa-bicycle "></i>PEMESANAN</a>
                    </li>
                    <li>
                        <a href="pendaftaran.php"><i class="fa fa-yelp "></i>PENGATURAN<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in" style="">
                            <li>
                                <a href="about.php" class="active-menu"><i class="fa fa-edit "></i>Edit tampilan</a>
                            </li>
                          
                           </ul>
                        
                    </li>
                     
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-in "></i>LOGOUT</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PENGATURAN TAMPILAN WEBSITE</h1>
                        <h1 class="page-subhead-line">Anda bisa mengatur tampilan website disini . </h1>

                    </div>
                </div>
               
                <!-- /. ROW  -->

              
                   

                
                <!--/.Row-->
                <hr />
               
                <!--/.Row-->
                <hr />
                <div class="row" style="padding-bottom: 100px; `">
                    <div class="col-md-6">
                        <div id="comments-sec">
                             <form action="" method="POST" enctype="multipart/form-data" >
                            <h4><strong>Judul Website </strong></h4>
                            <input type="text" class="form-control" required="required" placeholder="Masukkan Nama Website" value="<?php echo $row['judul']; ?>" name="judul" />
                            <hr />
                            <div class="form-group ">
                                <label>Motto</label>
                            <input type="text" class="form-control" required="required" placeholder="Masukkan Motto " value="<?php echo $row['motto']; ?>" name="motto"/>
                             </div>
                              <div class="form-group ">
                                <label>Rincian Singkat Usaha</label>
                                <textarea class="form-control" rows="8" name="rincian"><?php echo $row['rincian']; ?></textarea>
                            </div>
                             <div class="form-group  ">
                                <label>Event</label>
                                <textarea class="form-control" rows="8" name="event" ><?php echo $row['event']; ?></textarea>
                            </div>
                             <div class="form-group ">
                                <label>Today's Menu</label>
                                <textarea class="form-control" rows="8" name="promosi"><?php echo $row['promosi']; ?></textarea>
                            </div>
                            <div class="form-group  ">
                                <label>Our Best Menu</label>
                                <textarea class="form-control" rows="8" name="best" ><?php echo $row['best']; ?></textarea>
                            </div>
                            <div class="form-group ">
                                <label>About</label>
                                <textarea class="form-control" rows="8" name="sejarah"><?php echo $row['sejarah']; ?></textarea>
                            </div>
                             <div class="form-group ">
                                <label>Testimoni</label>
                                <textarea class="form-control" rows="8" name="testimoni"><?php echo $row['testimoni']; ?></textarea>
                            </div>
                            <div class="form-group ">
                                <label>Lokasi</label>
                                <textarea class="form-control" rows="8" name="lokasi"><?php echo $row['lokasi']; ?></textarea>
                            </div>
                            <div class="form-group ">
                                <label>Pemesanan Katering</label>
                                <textarea class="form-control" rows="8" name="katering"><?php echo $row['katering']; ?></textarea>
                            </div>
                             <div class="form-group ">
                                <label>Kontak</label>
                                <textarea class="form-control" rows="8" name="kontak"><?php echo $row['kontak']; ?></textarea>
                            </div>
                             <div class="form-group ">
                                <label>Galeri</label>
                                <textarea class="form-control" rows="8" name="galeri"><?php echo $row['galeri']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="kirim" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>

                    </div>
                   <!--  <div class="col-md-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-black">
                                <i class="fa fa-bicycle"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">52 Important Issues to Fix </p>
                                <p>Please fix these issues to work smooth</p>
                                <p>Time Left: 30 mins</p>
                                <hr />
                                <p>
                                    <span class=" color-bottom-txt"><i class="fa fa-edit"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                             
                                    </span>


                                </p>
                                <hr />
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                            </div>
                        </div>
                    </div> -->
                </div>
                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2018 SIOMAY JONES MALANG | Design By : <a href="#" target="_blank">PKN ITN</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>
    


</body>
</html>
<?php 

if (isset($_POST['kirim'])){
      $judul   = $_POST['judul'];
      $motto   = $_POST['motto'];
      $promosi   = $_POST['promosi'];
      $event   = $_POST['event'];
      $best   = $_POST['best'];
      $testimoni   = $_POST['testimoni'];
      $sejarah   = $_POST['sejarah'];
      $lokasi   = $_POST['lokasi'];
      $katering   = $_POST['katering'];
      $rincian   = $_POST['rincian'];
      $kontak   = $_POST['kontak'];
      $galeri   = $_POST['galeri'];
      $sql = "UPDATE tb_setting SET  `judul` = '$judul',`motto` = '$motto', `promosi`='$promosi', `event` = '$event',`best` = '$best',`testimoni` = '$testimoni',`sejarah` = '$sejarah',`lokasi` = '$lokasi',`katering` = '$katering',`kontak` = '$kontak',`rincian` = '$rincian',`galeri` = '$galeri' WHERE id = '1'";
                 $result = mysqli_query($conn, $sql);
                 if ($result) 
                 {  

                    echo "
                        <script>
                         
                              window.location = 'about.php';
                        </script>
                     

                                
                    ";  
                 } 
                 else 
                 {
                    echo "  $sql
                        <script>
                            
                            alert('Data Gagal Disimpan');
                            
                        </script>
                    ";          
                 }
}else{

}



}
 ?>