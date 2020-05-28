<?php 
 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 

$platenumber = $_GET['platenumber'];
 
 require_once('dbConnectLogin.php');
 
 $sql = "SELECT * FROM transaction WHERE platenumber ='".$platenumber."'";
 
 $r = mysqli_query($con,$sql);
 
 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array(
 "name"=>$res['name'],
 "app_type"=>$res['app_type'],
 "v_type"=>$res['v_type'],
 "platenumber"=>$res['platenumber'],
 "idnum"=>$res['idnum'],
 "session"=>$res['session'],
 "reg_date"=>$res['reg_date'],
 "department"=>$res['department'],
 )
 );
 if($result==null){
	 echo "no data found";
 }
 else{
 echo json_encode(array("result"=>$result));
 }
 
 mysqli_close($con);
 
 }
 
 