<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
        <script src="js/bootstrap.js"></script>
</head>
<?php 
$nama=$_POST['nama'];
$email=$_POST['email'];
$order = $_POST['order'];
$alasan = $_POST['check'];
$pilihan=$_POST['optionsRadios']; 
$dekripsi =$_POST['deskripsi'];
$kurir =$_POST['Kurir']; 

?>
<body style="background-image: url('pattern.jpg');" >
<div class=" atas col-md-12">
	<h3 style="text-align: center;">Form Pengajuan Komplain Pengembalian Barang</h3>
</div>
<br>

  <div class="container" style="background-color: white;   padding:10px; box-shadow: 0px 0px 50px 5px #888888;">
	 <div class="row">
		<table class=" table table-hover">			
  			<tr>
  				<td style="width: 200px;">Nama</td>
  				<td style="width: 50px;"> : </td>
				  <td><?php echo $nama;?></td>
  			</tr>
  			<tr>
  				<td>Email </td>
  				<td> : </td>
				  <td><?php  echo $email; ?>
				  
				  </td>
  			</tr>
  			<tr>
  				<td>Nomor Order </td>
  				<td> : </td>
  				<td><?php  echo $order;?></td>
  			</tr>
  			<tr>
  				<td> Alasan Pengembalian </td>
  				<td> : </td>
  				<td>
  					<ul>
						  <?php 
						 foreach ($alasan as $key ){
							 echo "<li>".$key."</li>";
						 } 
						  ?>

  					</ul> 
  				</td>
  			</tr>
  			<tr>
  				<td> Pilihan Pengembalian</td>
  				<td> : </td>
  				<td> <?php echo $pilihan; ?> </td>

  			</tr>
  			<tr>
  				<td> Deskripsi Barang diterima :</td>
  				<td> : </td>
  				<td><?php  echo $dekripsi;?></td>
  			</tr>
  			<tr>
  				<td>Pilihan Kurir </td> 
  				<td> : </td>
  				<td> <?php echo $kurir;?></td>
  			</tr>
  			<tr>
  				<td>Gambar Barang</td>
  				<td>:</td>

  				<td> <?php $gambar = $_FILES['upload']['name'];
   						 $tmp  = $_FILES['upload']['tmp_name'];
    					move_uploaded_file($tmp, "./".$gambar); ?>
				  <img id="gambar" src="<?php echo $gambar; ?>"></td>
  				
  			</tr>
	 	 </table>
	 </div>
  </div>

</body>
</html>