<?php
// configuration
include('connect.php');

// new data
$idnum = $_POST['idnum'];
$app_type = $_POST['app_type'];
$name = $_POST['name'];
$v_type = $_POST['v_type'];
$session = $_POST['session'];
$id = $_POST['id'];
$platenumber = $_POST['platenumber'];
$reg_date = $_POST['reg_date'];
$department = $_POST['department'];
// query
$sql = "UPDATE transaction 
        SET idnum=?, app_type=?, name=?, v_type=?, session=?, platenumber=?, reg_date=?, department=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($idnum,$app_type,$name,$v_type,$session,$platenumber,$reg_date,$ft,$department));
header("location: index.php");

?>