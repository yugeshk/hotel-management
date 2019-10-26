<?php if($user['type'] == 1) {$type_name = "Manager";} else if($user['type'] == 2) {$type_name = "Employee";} else if($user['type'] == 3) {$type_name = "Customer";} ?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/64/User-icon.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $user['name'];?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span><?php echo $type_name;?></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
    <?php
    if($_SESSION['user_type'] == 1){

        if (isset($_GET['room_mang'])){ ?>
            <li class="active">
                <a href="index.php?room_mang"><em class="fa fa-dashboard">&nbsp;</em>
                    Room Management
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?room_mang"><em class="fa fa-dashboard">&nbsp;</em>
                    Room Management
                </a>
            </li>
        <?php }
        if (isset($_GET['reservation'])){ ?>
            <li class="active">
                <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php }
        if (isset($_GET['staff_mang'])){ ?>
            <li class="active">
                <a href="index.php?staff_mang"><em class="fa fa-dashboard">&nbsp;</em>
                    Staff Management
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?staff_mang"><em class="fa fa-dashboard">&nbsp;</em>
                    Staff Management
                </a>
            </li>
        <?php }
        if (isset($_GET['add_emp'])){ ?>
            <li class="active">
                <a href="index.php?add_emp"><em class="fa fa-plus">&nbsp;</em>
                    Add Employee
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?add_emp"><em class="fa fa-plus">&nbsp;</em>
                    Add Employee
                </a>
            </li>
        <?php }
        if (isset($_GET['complain'])){ ?>
            <li class="active">
                <a href="index.php?complain"><em class="fa fa-envelope">&nbsp;</em>
                    Complain
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?complain"><em class="fa fa-envelope">&nbsp;</em>
                    Complain
                </a>
            </li>
        <?php }
        ?>

        <?php
        if (isset($_GET['statistics'])){ ?>
            <li class="active">
                <a href="index.php?statistics"><em class="fa fa-eject">&nbsp;</em>
                    Statistics
                </a>
            </li>
        <?php } else{?>
        <li>
            <a href="index.php?statistics"><em class="fa fa-eject">&nbsp;</em>
                Statistics
            </a>
        </li>
<?php }

    } else if($_SESSION['user_type'] == 3) { 

        if (isset($_GET['reservation'])){ ?>
            <li class="active">
                <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php }
        if (isset($_GET['complain'])){ ?>
            <li class="active">
                <a href="index.php?complain"><em class="fa fa-envelope">&nbsp;</em>
                    Complain
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?complain"><em class="fa fa-envelope">&nbsp;</em>
                    Complain
                </a>
            </li>
        <?php }
        ?>

<?php } else if($_SESSION['user_type'] == 2) {
            $u = $user['username'];
            $query = "SELECT * FROM staff WHERE emp_username= '$u'";
            $result = mysqli_query($connection, $query);
            $staff = mysqli_fetch_assoc($result);

            if (isset($_GET['emp_home'])){ ?>
            <li class="active">
                <a href="index.php?emp_home"><em class="fa fa-calendar">&nbsp;</em>
                    Employee Details
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?emp_home"><em class="fa fa-calendar">&nbsp;</em>
                    Employee Details
                </a>
            </li>
        <?php }

        if($staff['staff_type_id'] == 1 || $staff['staff_type_id'] == 3) {

            if (isset($_GET['reservation'])){ ?>
            <li class="active">
                <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php } }

            if (isset($_GET['complain'])){ ?>
            <li class="active">
                <a href="index.php?complain"><em class="fa fa-envelope">&nbsp;</em>
                    Complain Management
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?complain"><em class="fa fa-envelope">&nbsp;</em>
                    Complain Management
                </a>
            </li>
        <?php }
        }

        ?>



        <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div><!--/.sidebar-->