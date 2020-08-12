<?php
include_once("./conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
    /* .form-control:invalid{
       color:red;
   } */
</style>

<body>
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-9 offset-md-2 mt-5">
                <h3 class="text-info">Register here</h3>
                <p class="text-muted mt-5">Add your personal details in the following section. </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 offset-md-2">
                <form id="registerForm" method="post">
                    <div class="form-group">
                        <label for="name" class="font-weight-light text-muted">Name</label>
                        <input name="name" type="text" id="name" class="form-control" placeholder="Enter your Full Name" maxlength="15" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="Username" class="font-weight-light text-muted">User Name</label>
                        <input name="username" type="text" id="username" class="form-control" placeholder="Enter your User Name" maxlength="15" autofocus>
                    </div>
                    <div class="form-group ">
                        <label for="password" class="font-weight-light text-muted">Password</label>
                        <div class="input-group ">
                            <input name="password" type="password" id="password" class="form-control" placeholder="Enter your Password">
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-eye" id="eye"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="userid" class="font-weight-light text-muted">NIC-Id</label>
                        <input name="userid" type="text" id="Userid" class="form-control" placeholder="Enter your Id">
                    </div>
                    <div class="form-group">
                        <label for="usercity" class="font-weight-light text-muted">City</label>
                        <select name="city" type="text" id="Usercity" class="form-control" form="registerForm">
                            <option selected value="">Select City</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Peshawar">Peshawar</option>
                            <option value="Quetta">Quetta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Address" class="font-weight-light text-muted">Address</label>
                        <textarea form="registerForm" name="address" id="Address" class="form-control" rows="5" placeholder="Enter your Address"></textarea>
                    </div>

                    <div class="float-left">
                        <button type="submit" name="submit" class="btn btn-info mt-2 mb-4">Register</button>
                    </div>

                </form>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $uname = test_input($_POST['name']);
                $usrname = test_input($_POST['username']);
                $pass = test_input($_POST['password']);
                $id = test_input($_POST['userid']);
                $city = test_input($_POST['city']);
                $address = test_input($_POST['address']);
                $flag = 0;
                $sql = "select username from users";
                $result1 = mysqli_query($conn, $sql);
                $numrows = mysqli_num_rows($result1);
                if ($numrows > 0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        $usr = $row1['username'];
                        if ($usr == $usrname) {
                            echo '<script>
                            swal({
                                title:"Error",   
                                text:"This Username is already registered.",
                                icon:"warning",
                                type: "error",
                                confirmButtonText: "Ok"
                            });
                            </script>';
                            $flag = 1;
                        }
                    }
                }
                if ($flag == 0) {
                    $sql1 = "INSERT INTO `shopping cart`.`users` (`user_id`, `name`, `user_name`, `password`, `nic`, `city`, `address`) VALUES (NULL, '" . $uname . "', '" . $usrname . "', '" . $pass . "', '" . $id . "', '" . $city . "', '".$address."');";
                    if(mysqli_query($conn, $sql1)){
                        sleep(2);
                        echo'
                            <script type="text/javascript">
                            window.location.href = "./login.php";
                            </script>
                        ';
                    }
                }
            }
            ?>
            <div class="col-12 col-md-4 offset-md-1 mt-2">
                <h5 class="text-danger">Note</h5>
                <hr>
                <p class="text-muted">By Registering you are agreeing on terms and conditions</p>
                <hr>
                <p class="text-muted">Your privacy is our first concern</p>
                <hr>
                <p class="text-info">
                    <a href="login.php" class="text-decoration-none">Click to go on login page</a>
                </p>
                <hr>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php include_once "footer.html"; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./Js/register.js"></script>

</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>