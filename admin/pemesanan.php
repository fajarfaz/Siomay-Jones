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
    <link href="../css/bootstrap-fileupload.min.css" rel="stylesheet" />


<style type="text/css">
    * {
  box-sizing: border-box;
}

#myInput {
  background-image: url('../images/icons/icon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
     font-size: 15px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

h2 {
    float: left;
    -webkit-margin-before: 0;
    -webkit-margin-after: 13px;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-size: 2.5em;
    font-weight: 400;
    margin-left: 15px;
}
a{
    color: #2c3e50;
}
.hox {
    transition: 0.5 all;
    cursor: pointer;

}
.hox:hover {
    background: black;
}
.row {
    margin-left:  0px;
    margin-right: 0px; 
}
.dropdown-menu {
        min-width: 139px;
}

.count {
      background: #2ecc71;
  
    font-size: 13px;
 
    position: absolute;
    text-align: center;
    padding: 2px 7px;
    border-radius: 5px;
    margin-top: -7px;
    font-weight: 200;
    color: white;
  }

#etc{
 white-space: nowrap; 
     width: 6em;
    overflow: hidden;
    text-overflow: ellipsis; 
}
img{
      max-height: 90px;
}
</style>
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
                <a class="navbar-brand" href=".index.php">SIOMAY JONES</a>
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
                        <a  href="index.php"><i class="fa fa-dashboard "></i>DASHBOARD</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask "></i>PRODUK <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse" style="">
                            <li>
                                <a href="input_produk.php" ><i class="fa fa-plus"></i>Input Data</a>
                            </li>
                            <li>
                                <a href="data_produk.php" ><i class="fa fa-edit "></i>Edit Data</a>
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
                        <ul class="nav nav-second-level collapse " style="">
                            <li>
                                <a href="input_galeri.php"><i class="fa fa-plus"></i>Input Data</a>
                            </li>
                            <li>
                                <a href="data_galeri.php" ><i class="fa fa-edit "></i>Edit Data</a>
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
                        <a href="testimoni.php" ><i class="fa fa-comments-o "></i>TESTIMONI</a>
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
        <!-- /. NAV SIDE  -->
        <?php
        $jml=mysqli_query($conn,"SELECT COUNT(id) FROM tb_pemesanan ");
         $jml=mysqli_fetch_row($jml);
                ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DATA PEMESANAN<span class="count" ><?php echo $jml[0];?></span></h1>
                        <h1 class="page-subhead-line">Semua data berdasarkan database. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
<div class="row" style="padding-bottom: 100px ;    overflow: overlay;">                 
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pencarian Berdasarkan Nama ..." title="Tulis Dengan Huruf..." >
<table id="myTable">
  <tr class="header">
    
    <th style="width:20%;">Nama</th>
    <th style="width:20%;">Email</th>
    <th style="width:20%;">Telepon</th>
    <th style="width:20%;">Alamat</th>
    <th style="width:50%;">Pesanan</th>
    <th style="width:20%;">Untuk Tanggal</th>
    <th style="width:20%;">Status</th>
    <th style="width:20%;">Pengaturan</th>
  </tr>
<?php 
    $qu=mysqli_query($conn,"SELECT * FROM tb_pemesanan ORDER BY tgl_pesan DESC");
    while($has=mysqli_fetch_row($qu)){
      if ($has[8]=='0') {
        $status = "<font style='color:#d35400;'>Belum Dibuka <font>";
      }
      else if($has[8]=='1'){
        $status = "<font style='color:#2980b9;'>Belum Ditanggapi <font>";
      }
      else{
       $status = "<font style='color:#27ae60;'>Diterima <font>";
      }
echo "
  <tr>
    <td><div id='etc'>$has[1]</div></td>
    <td><div id='etc'>$has[2]</div></td>
    <td><div id='etc'>$has[3]</div></td>
    <td><div id='etc'>$has[4]</div></td>
    <td><div id='etc'>$has[5]</div></td>
    <td><div id='etc'>$has[6]</div></td>
    <td>$status</td>
   
    <td>"?> <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                          <li><a href="baca_pesanan.php?id=<?php echo $has[0];?>">Baca</a></li>
                                           <li class="divider"></li>
                                            <li><a href="setuju_pesanan.php?id=<?php echo $has[0];?>">Setuju</a></li>
                                           
                                            
                                        </ul>
                                    </div>
    <?php "</td>
  </tr>";

 } ?>
 </table>
             
                <!--/.ROW-->

            </div>
 
  
           </div>

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
    <script src="../js/bootstrap-fileupload.js"></script> 


<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script type="text/javascript">
  
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

</script>
</body>
</html>
<?php 
 

}
 ?>