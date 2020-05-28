<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM transaction WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
ID Number<br>
<input type="text" name="idnum" value="<?php echo $rows['idnum']; ?>" /><br><br>
Plate Number<br>
<input type="text" name="platenumber" value="<?php echo $rows['platenumber']; ?>" /><br><br>
Registration Date<br>
<input type="text" name="reg_date" value="<?php echo $rows['reg_date']; ?>" /><br><br>
Document Type<br>
<select name="app_type" class="ed">
	<?php
	echo '<option value="'.$rows['app_type'].'">'.$rows['app_type'].'</option>';
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM doc_type ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Full Name<br>
<textarea name="name"><?php echo $rows['name']; ?></textarea><br><br>
Vehicle Type<br>
<select name="office" class="ed">
	<?php
	echo '<option value="'.$rows['v_type'].'">'.$rows['v_type'].'</option>';
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM offices ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Session<br>
<input type="text" name="session" value="<?php echo $rows['session']; ?>" /><br><br>
Kuliyyah/Department<br>
<input type="text" name="department" value="<?php echo $rows['department']; ?>" /><br><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>