<?php
include('connect.php');	

$idnum = $_POST['idnum'];
$app_type = $_POST['app_type'];
$name = $_POST['name'];
$v_type = $_POST['v_type'];
$session = $_POST['session'];
$platenumber = $_POST['platenumber'];
$reg_date = $_POST ['day']. "/" .$_POST ['month']. "/" .$_POST ['year'];
$department = $_POST['department'];

// query
$sql = "INSERT INTO transaction (idnum,app_type,name,v_type,session,platenumber,reg_date,department) VALUES (:sas,:asas,:asafs,:offff,:statttt,:dot,:rd,:ft)";
$q = $db->prepare($sql);
$q->execute(array(':sas'=>$idnum,':asas'=>$app_type,':asafs'=>$name,':offff'=>$v_type,':statttt'=>$session,':dot'=>$platenumber,':rd'=>$reg_date,':ft'=>$department));
header("location: index.php");


?>