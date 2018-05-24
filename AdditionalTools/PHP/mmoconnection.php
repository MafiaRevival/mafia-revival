<?php
	
$servername = 'localhost'; 
$username = 'corpreviv2';  
$password = 'GreedIsGood95';
$dbname = 'corpreviv2';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo(json_encode(array('status'=>"Connection failed: " . $conn->connect_error)));
	die;
} 



?>
