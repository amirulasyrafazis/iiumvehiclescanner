<?php
DEFINE('DATABASE_USER','root');
DEFINE('DATABASE_PASSWORD','');
DEFINE('DATABASE_HOST','localhost');
DEFINE('DATABASE_NAME','record');

$dbc=@mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD,DATABASE_NAME);

if (!$dbc){

	trigger_error('Could not connect to MySQL: '.mysqli_connect.error());
	
	}
	
	?>