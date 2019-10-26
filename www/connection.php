<?php
if(isset($_SESSION['user_type'])){
if($_SESSION['user_type'] == 1){
$connection = mysqli_connect("172.19.0.1","root","tiger","mis");
}
else if($_SESSION['user_type'] == 2){
	$connection = mysqli_connect("172.19.0.1","dev","dev","mis");
}
else if($_SESSION['user_type'] == 3){
	$connection = mysqli_connect("172.19.0.1","cust","cust","mis");
}
else{
	echo "Invalid user type, cannot authenticate!";
}
}
else{
	$connection = mysqli_connect("172.19.0.1","user","user","mis");
}