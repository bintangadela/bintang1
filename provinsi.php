<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
  include ("login.php"); ?>

<form id="form" name="form" method="post" action="" enctype="multipart/form-data">
  <div class="tabel">
  <table>
    <tr>
      <td>Kode Provinsi</td>
      <td >:</td>
      <td ><input type="text" name="kode" id="kode" required /></td>
    </tr>
    <tr>
      <td>NAMA Provinsi</td>
      <td >:</td>
      <td ><input type="text" name="nama" id="nama" required /></td>
    </tr>
   <tr>
      <td><input type="submit" name="simpan" id="Simpan" value="simpan" /></td>
    </tr>
</table>
</form>
<?php
if(isset($_POST['simpan'])){
$kode=$_POST['kode'];
$nama=$_POST['nama'];

$sql="insert into provinsi(Kdprovinsi,NamaProvinsi) values ('$kode','$nama') ";
$mysql->query($sql);
}
?>

</body>
</html>