 <html> 
<body>
<style>
body{
	background-color:white;
}
</style>


<?php
include("dbconn.php");
$idnum=$_POST['StudentID'];

//Collects data from table
//Selects record from table where it equals form input
$query = "SELECT * from transaction WHERE idnum = '$idnum'";
$result = mysqli_query($dbc,$query);

if (mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {


$datatoencode = $row['name']. '-' .$row['platenumber'];

$name = $row['name'];

$platenumber = $row['platenumber'];



$app_type = $row['app_type'];
  }
} else {
	exit ("Sorry, ID number you entered is not available");
	
}

$cht = "qr";
// CHart Size
$chs = "150x150";
$choe = "UTF-8";


$qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $datatoencode . '&choe=' . $choe;


?>
	




<!--Creates sticker stub--> 
<br>
<center><div style="background-image: url(scene3.jpg); width:900px;height:600px;border:8px solid #000;align="center"><center>
<div align="center">

 


<img src="iiumbanner (2).png">
<br>
<h3><font style="color:#200677" size="8"> IIUM VEHICLE STICKER </font></h3>

<h3><font size="6"> Session 2016/2017 </font></h4>

<font style="color:#C70039" size="6" face="Stencil Std, fantasy">PLATE NUMBER: <?php echo $platenumber?></font>
<br>
<font style="color:#C70039" size="6" face="Stencil Std, fantasy">OWNER NAME: <?php echo $name?></font>
<br>
<img src ="<?php echo $qrcode?>">
<br>
<font size="10" color="black" face="verdana"><?php echo $app_type?></font>
</div> 
</div>

<br>

<center><input type="button" value="Print Sticker" 
onClick="window.print()"/><center>
<br>
<form action="index.php" method="post">
<input type="submit" value="Home">
</form>



</form> 
</html> 
</body>