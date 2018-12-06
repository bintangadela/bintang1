
<html>
<head>
	<title></title>
</head>
<body>


<?php
include ("login.php");
?>

<body>
<table align="center" width="80%" border="4" cellspacing=3 cellpadding=5

  >
  <tr>
    <td><b>NO</b></td>
    <td><b>Kode Provinsi</b></td>
    <td><b>Nama Provinsi</b> </td>
</tr>
<?php 

    $i=1;
	$sql="Select * from provinsi ";
	$result=$mysqli->query($sql);
	while ($row=$result->fetch_assoc()):
	
	?>
 
  <tr>
    <td><?php echo $i; $i++;?></td>
    <td><?php echo $row['KodeProvinsi'];?></td>
    <td><?php echo $row['NamaProvinsi'];?></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>