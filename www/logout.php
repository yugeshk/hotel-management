<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
if($connect)
	mysqli_close($connect);
session_abort();
header('Location:login.php');