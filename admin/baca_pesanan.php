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
     $id =  $_GET['id'];

include 'sms.php';

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
                <a class="navbar-brand" href="index.php">SIOMAY JONES</a>
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

                    </li>


                    <li>
                        <a href="index.php"><i class="fa fa-dashboard "></i>DASHBOARD</a>
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
                        <ul class="nav nav-second-level collapse" style="">
                            <li>
                                <a href="about.php"><i class="fa fa-edit "></i>Edit tampilan</a>
                            </li>
                            
                           </ul>
                        
                    </li>
                     
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-in "></i>LOGOUT</a>
                    </li>
                </ul>

            </div>

        </nav>
              <?php

  $sql = "SELECT * FROM tb_pemesanan WHERE id = '$id'"; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['status'] == '2'){
        $status="<font style='color:#27ae60;'>SUDAH DI TANGGAPI</font>";
    }else{
        $status="<font style='color:#c0392b;'>BELUM DI TANGGAPI</font>";
        $reord = "UPDATE tb_pemesanan SET status = '1' WHERE id = '$id'";
        $result2 = $conn->query($reord) or die(mysqli_error());
    }
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PEMESANAN <?php echo $status ?></h1>
                        <h1 class="page-subhead-line">Isi Pemesanan Cathering Siomay Jones. </h1>

                    </div>
                </div>
               
               
        
            
               
                 <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                            PEMESANAN DARI : <font style="color: #2c3e50;"><?php echo $row['nama']; ?></font><br>
                            KODE PEMESANAN : <font style="color: #2c3e50;">SJ0<?php echo $row['id']; ?></font><br>
                            TANGGAL PEMESANAN : <font style="color: #2c3e50;"><?php echo $row['tgl']; ?></font>                        
                        </div>
                        <div class="panel-body">
                 <form action="" method="POST" enctype="multipart/form-data" >
                                       <div class="form-group">
                                            <label>Nama Pemesan</label>
                                            <input class="form-control" type="text" name="nama" value="<?php echo $row['nama']; ?>" readonly>
                                            <p class="help-block">Data Diri Pemesan</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="nama" value="<?php echo $row['email']; ?>" readonly>
                                            <p class="help-block">Data Diri Pemesan</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomer Telepon Pemesan</label>
                                            <input class="form-control" type="text" name="nama" value="<?php echo $row['telp']; ?>" readonly>
                                            <p class="help-block">Data Diri Pemesan</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Tujuan</label>
                                            <input class="form-control" type="text" name="nama" value="<?php echo $row['alamat']; ?>" readonly>
                                            <p class="help-block">Alamat Tujuan Pengiriman / Pemesanan</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Untuk Tanggal</label>
                                            <input class="form-control" type="text" name="nama" value="<?php echo $row['tgl_pesan'];?>" readonly >
                                            <p class="help-block">Data Diri Pemesan</p>
                                        </di>
                                        
                                        <div class="form-group">
                                            <label>Isi Pesanan</label>
                                           <textarea class="form-control" rows="3" name="keterangan" readonly><?php echo $row['pesanan']; ?>"</textarea>
                                            <p class="help-block">Keterangan apa saja yang dipesan.</p>
                                        </div>   
                                        <div class="form-group" style="float: right;">
                                <button type="submit" class="btn btn-success" name="kirim">TERIMA PESANAN</button>
                            </div>                                                             
                            </div>
                        </div>
                            </div>


<!-- Print framework -->
               <!--  <div class="row" style="padding-bottom: 100px; `">
                   
                    <div class="col-md-6">
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
                         <div class="form-group" style="float: right;">
                                <button type="submit" class="btn btn-success" name="kirim">Compose &amp; Send Ticket</button>
                            </div>
                    </div>
                </div>
                 -->
                        
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
$reord = "UPDATE tb_pemesanan SET status = '1' WHERE id = '$id'";
    $result2 = $conn->query($reord) or die(mysqli_error());
if (isset($_POST['kirim'])){
    $telp = $row['telp'];
    send_sms("$telp",'Pemesanan Anda Sudah di Tanggapi, Terima Kasih sudah memesan di Outlet Kami. Siomay Jones Grup');
 $reord = "UPDATE tb_pemesanan SET status = '2' WHERE id = '$id'";
    $result2 = $conn->query($reord) or die(mysqli_error());

        echo "
            <script>
               window.location = 'pemesanan.php';
            </script>
         
                    
        ";  
    }else{

    }
}
 ?>