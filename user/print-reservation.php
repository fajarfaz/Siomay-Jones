<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Print Reservation</title>
	
	<link rel='stylesheet' type='text/css' href='css/style-print.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>
<?php
include 'config/koneksi.php';

	 $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
    $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
    $waktu   = time(); // 
    // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
    $s = mysqli_query($conn,"SELECT * FROM tb_pengunjung WHERE ip='$ip' AND tanggal='$tanggal'");
    // Kalau belum ada, simpan data user tersebut ke database
    if(mysqli_num_rows($s) == 0){
    mysqli_query($conn,"INSERT INTO tb_pengunjung (ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");

    } 
    else{
    mysqli_query($conn,"UPDATE tb_pengunjung SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
    }
$sql = "SELECT * FROM tb_pemesanan ORDER BY id DESC LIMIT 1 ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $tgl_pesan = date_create( $row['tgl_pesan'] ) ;
    $tgl_pesan = date_format($tgl_pesan,'jS F g:ia ' );
    $tgl = date_create( $row['tgl'] ) ;
    $tgl = date_format($tgl,'jS F g:ia ' );
?>
	<div id="page-wrap">

		<textarea id="header">SIOMAY JONES</textarea>
		
		<div id="identity">
		
            <textarea id="address"><?php echo $row['nama']; ?> .
<?php echo $row['alamat']; ?>

Phone: <?php echo $row['telp']; ?></textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/admin.png" alt="logo" width="150px" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title">Siomay Jones Corp.
</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Kode Pemesanan </td>
                    <td><textarea>SJ0<?php echo $row['id']; ?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Tanggal Pesan</td>
                    <td><textarea id="date"><?php echo $tgl_pesan; ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Untuk Order</td>
                    <td><div class="due"><?php echo $tgl; ?></div></td>
                </tr>
                 <tr>
                    <td class="meta-head">Tujuan Order</td>
                    <td><div class="due"><?php echo $row['alamat'];; ?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea><?php echo $row['pesanan']; ?></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Pesanan Katering</textarea></td>
		      <td><textarea class="cost">--</textarea></td>
		      <td><textarea class="qty">--</textarea></td>
		      <td><span class="price">---</span></td>
		  </tr>
		  
		 
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>Harap Cetak atau Simpan Bukti Pemesanan Ini.
		  Pembayaran Paling Lama 1 hari setelah pemesanan, Silakan hubungi kontak kami dahulu untuk melakukan pembayaran, Terima Kasih</textarea>
		</div>
	
	</div>
	
</body>

</html>