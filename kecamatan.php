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
      <td> Provinsi</td>
      <td >:</td>
      <td>
        <select name="kd_prov">
          <?php
          include ("login.php");
          $sql="select * from provinsi";
         $result=$mysql->query($sql);
         while($row=$result->fetch_array()){
          echo "<option value='$row[0]'>$row[1]</option>";
        }?></select></td>
      </tr>
    <tr>
      <td>Kabupaten/Kota</td>
      <td >:</td>
      <td>
        <select name="kd_kab">
          <?php
          include ("login.php");
          $sql="select * from kabupaten";
         $result=$mysql->query($sql);
         while($row=$result->fetch_array()){
          echo "<option value='$row[0]'>$row[1]</option>";
        }?></select></td>
    </tr>
    <tr>
      <td>Kode Kecamatan</td>
      <td >:</td>
      <td ><input type="text" name="kode" id="kode" required /></td>
    </tr>
    <tr>
      <td>Nama Kecamatan</td>
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
$prov=$_POST['kd_prov'];
$kab=$_POST['kd_kab'];
$kode=$_POST['kode'];
$nama=$_POST['nama'];

$sql="insert into kecamatan(provinsi,kabupaten,kode,nama) values ('$prov','$kab','$kode','$nama') ";
$mysql->query($sql);
}
?>

</body>
</html>