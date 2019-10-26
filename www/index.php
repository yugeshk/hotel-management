<?php
include_once "db.php";
session_start();
if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $userQuery = "SELECT * FROM user WHERE id = '$user_id'";
    $result = mysqli_query($connection, $userQuery);
    $user = mysqli_fetch_assoc($result);
}else{
    header('Location:login.php');
}
include_once "header.php";
include_once "sidebar.php";


if (isset($_GET['room_mang'])){
    include_once "room_mang.php";
}
elseif (isset($_GET['reservation'])){
    include_once "reservation.php";
}
elseif (isset($_GET['staff_mang']) && ($_SESSION['user_type'] == 1)){
    include_once "staff_mang.php";
}
elseif (isset($_GET['add_emp']) && ($_SESSION['user_type'] == 1)){
    include_once "add_emp.php";
}
elseif (isset($_GET['complain'])){
    include_once "complain.php";
}
elseif (isset($_GET['statistics']) && ($_SESSION['user_type'] == 1)){
    include_once "statistics.php";
}
elseif (isset($_GET['emp_history'])){
    include_once "emp_history.php";
}
elseif (isset($_GET['emp_home'])){
    include_once "emp_home.php";
}
else{
    include_once "room_mang.php";
}

include_once "footer.php";