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
                        <a  href="index.php"><i class="fa fa-dashboard "></i>DASHBOARD</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask "></i>PRODUK <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse " style="">
                            <li>
                                <a href="input_produk.php" ><i class="fa fa-plus"></i>Input Data</a>
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
                        <ul class="nav nav-second-level collapse in" style="">
                            <li>
                                <a href="input_galeri.php"  class="active-menu"><i class="fa fa-plus"></i>Input Data</a>
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
                        <a href="pemesanan.php"><i class="fa fa-bicycle "></i>PEMESANAN</a>
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
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PEMASUKKAN GALERI FOTO DAN VIDEO BARU</h1>
                        <h1 class="page-subhead-line">Harap di isi secara menyeluruh dan harap cek kembali data anda. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                            FORM KELENGKAPAN INFORMASI
                        </div>
                        <div class="panel-body">
                 <form action="" method="POST" enctype="multipart/form-data" >
                                       <div class="form-group">
                                            <label>Judul Konten</label>
                                            <input class="form-control" type="text" name="nama" required>
                                            <p class="help-block">Masukkan judul konten yang akan anda upload</p>
                                        </div>
                                      
                                          
                                        <div class="form-group">
                                            <label>Keterangan Event</label>
                                           <textarea class="form-control" rows="3" name="keterangan" required></textarea>
                                            <p class="help-block">Masukkan keterangan event ini.</p>
                                        </div>                                                                
                            </div>
                        </div>
                            </div>
             <!--/.ROW-->
             <div class="row">
                 <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           FORM UPLOAD FILE GAMBAR / VIDEO
                        </div>
                        <div class="panel-body">
              
                                          <div class="form-group">
                                            <label class="control-label col-lg-4">Tampilan Upload</label>
                                            <div class="">
                                                
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail" style="width: 4cm; height: 6cm;"></div>
                                                    <div>

                                                        <span class="btn btn-file btn-success"><span class="fileupload-new" value="">Pilih File</span><span class="fileupload-exists">Change</span>
                                                        <input type="file"  name="file" id="file" value="" required></span>
                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                            </div>
                        </div>

              </div>
                            </div>
  
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                <div class="panel-body">
                      <div class="form-group">
                             <input type="submit" class="btn btn-lg btn-success" value="Tambah" name="kirim" style="float: right;">
                                
                        
             </form>
         </div>
        
         </div>
     </div>
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


</body>
</html>
<?php 



if (isset($_POST['kirim'])){

$target_dir = "../upload/";
$target_file = $target_dir  .date("hisa") . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["file"]["tmp_name"]);
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
if ($_FILES["file"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   
    $name=$_FILES['file']['name'];
    $type=$_FILES['file']['type'];
    $size=$_FILES['file']['size'];
    //replace tanda spasi pada nama file dengan _
    $nama_file=str_replace(" ","_",$name);
    $tmp_name=$_FILES['file']['tmp_name'];
    $nama_folder="../upload/";
    $file = basename($nama_file);
    $nama_file_baru=$nama_folder.basename($nama_file);
    //Filter jenis file video dan ukuran file
    if ((($type == "video/mp4") || ($type == "video/3gpp")  || ($type == "video/x-flv")) && ($size < 50000000 ))
    {
        //cek jika nama dile sudah ada
        if (file_exists($nama_file_baru))
        {
            $msg="File dengan nama $nama_file sudah ada!\n";
        }
        else
        {  
            //pindah file dari temporari ke alamat tujuan
            if(move_uploaded_file($tmp_name,$nama_file_baru))
            {
                $nama   = $_POST['nama'];
                $isi   = $_POST['keterangan'];
                $tanggal = date("Y/m/d");
                $sql = "INSERT INTO tb_galeri VALUES ('','$nama','$isi','$file','$tanggal','0','video')";
                 $result = mysqli_query($conn, $sql);
                 if ($result) 
                 {  

                    echo "
                        <script>
                              alert('Galeri Berhasil Disimpan');
                              window.location = 'data_galeri.php';
                        </script>
                     

                                
                    ";  
                 } 
                 else 
                 {
                    echo "
                        <script>

                            alert('Data Gagal Disimpan');
                             window.history.back(); 
                        </script>
                    ";          
                 }
            }
        }
    }
    else
    {
        $msg="Jenis file tidak sesuai atau ukuran file terlalu besar!";
    }





}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {


    if (move_uploaded_file($_FILES["file"]["tmp_name"],  $target_file )) {
    $file = date("hisa"). basename( $_FILES["file"]["name"]);
      
    $nama   = $_POST['nama'];
    $isi   = $_POST['keterangan'];
    $tanggal = date("Y/m/d");
    $sql = "INSERT INTO tb_galeri VALUES ('','$nama','$isi','$file','$tanggal','0','foto')";
     $result = mysqli_query($conn, $sql);
     if ($result) 
     {  

        echo "
            <script>
                 alert('Galeri Berhasil Disimpan');
                 header('Refresh:0');
            </script>
         

                    
        ";  
     } 
     else 
     {
        echo "
            <script>

                alert('Data Gagal Disimpan');
                 window.history.back(); 
            </script>
        ";          
     }
    

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}else{ 



}
   
 

}
 ?>