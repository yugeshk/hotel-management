<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Employee Details</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Employee Details</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Employee Detail:</div>
                <?php 
                    $u = $user['username'];
                    $query = "SELECT * FROM staff WHERE emp_username= '$u'";
                    $result = mysqli_query($connection, $query);
                    if(mysqli_num_rows($result) == 1){
                        $staff = mysqli_fetch_assoc($result);
                        if($staff['staff_type_id'] == 1) {$stafftype = "Manager";} else if($staff['staff_type_id'] == 2) {$stafftype = "Cleaning";} else if($staff['staff_type_id'] == 3) {$stafftype = "Reception";} else if($staff['staff_type_id'] == 4) {$stafftype = "Cook";} else if($staff['staff_type_id'] == 5) {$stafftype = "Waiter";}
                        $s = $staff['shift_id'];
                        $query = "SELECT * FROM shift WHERE shift_id = '$s'";
                        $result = mysqli_query($connection, $query);
                        $shift = mysqli_fetch_assoc($result)['shift_timing'];
                        $names = explode(' ', $staff['emp_name']);
                        $i = $staff['id_card_type'];
                        $query = "SELECT * FROM id_card_type WHERE id_card_type_id = '$i'";
                        $result = mysqli_query($connection, $query);
                        $id_card = mysqli_fetch_assoc($result)['id_card_type'];

                    }?>
                <div class="panel-body">
                    <div class="emp-response"></div>
                    <form role="form" id="addEmployee" data-toggle="validator">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Staff</label>
                                <input type="text" class="form-control" placeholder="<?php echo $stafftype ?>" id="staff_type" disabled="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Shift</label>
                                <input type="text" class="form-control" placeholder="<?php echo $shift ?>" id="shift_type" disabled="">

                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="<?php echo $names['0'] ?>" id="first_name" disabled>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="<?php echo $names['1'] ?>" id="last_name" disabled>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>ID Card Type</label>
                                <input type="text" class="form-control" placeholder="<?php echo $id_card ?>" id="id_card_id" disabled>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>ID Card No</label>
                                <input type="text" class="form-control" placeholder="<?php echo $staff['id_card_no'] ?>" id="id_card_no" disabled>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contact Number</label>
                                <input type="number" class="form-control" placeholder="<?php echo $staff['contact_no'] ?>" id="contact_no" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="<?php echo $staff['address'] ?>" id="address" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Salary</label>
                                <input type="number" class="form-control" placeholder="<?php echo $staff['salary'] ?>" id="salary" data-error="Enter Salary" required disabled>
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-lg btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>


    </div>

</div>    <!--/.main-->




