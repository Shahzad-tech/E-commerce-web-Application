<?php
if(session_id() == '' || !isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['user_id'])){
  echo "<script>window.location='./index.php'</script>";
}
//error_reporting(0);
include_once("./conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<style>
    /* div,p{
        border: 1px solid black;
    } d */
    .bg-image {
        background-image: url("./Images/blueorganic.jpg");
        background-size: cover;
        background-position: center;
    }

    .bg-image,
    .login {
        min-height: 100vh;
    }

    .form-label-group input {
        border-radius: 2rem;
        padding: 1.3rem;
    }

    .btn-login {
        border-radius: 2rem;

    }
</style>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-12 col-md-4 col-lg-6 bg-image d-flex align-items-center">
                <h1 class="text-muted mx-auto font-weight-light">Online Cart System <i style='font-size:30px' class='fas'>&#xf07a;</i></h1>
            </div>

            <div class="col-md-8 col-lg-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row align-middle">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h1 class="mb-4 font-weight-light text-info">Login Here</h1>
                                <form class="mt-5" id="loginForm" method="post">
                                    <div class="form-label-group border-radius">
                                        <input type="text" id="logname" class="form-control" placeholder="Enter User Name" name="username" autofocus>
                                        <label for="logname" style="color:transparent">User Name</label>
                                    </div>
                                    <div class="form-label-group  border-radius">
                                        <input type="password" id="logpassword" class="form-control" placeholder="Enter Password" name="password">
                                        <label for="logpassword" style="color: transparent;">Password</label>
                                    </div>

                                    <button name="submit" type="submit" class="btn btn-login btn-block btn-lg btn-primary text-center" Value="submit" id="submit">Login</button>

                                </form>
                                <p class="text-info mt-5 text-center">
                                    <a href="register.php" class="text-decoration-none">Click to go on registration
                                        page</a>
                                </p>
                                <p class="text-muted mx-auto font-weight-light text-center" id="time"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $username = test_input($_POST['username']);
        $passw = test_input($_POST['password']);
        $sql1 = "select * from users where user_name = '" . $username . "'";
        $result1 = mysqli_query($conn, $sql1);
        $numrows = mysqli_num_rows($result1);
        if ($numrows > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $pass = $row1['password'];
                if ($pass == $passw) {
                    $_SESSION['user_name']= $row1["user_name"];
	      			$_SESSION['user_id']= $row1["user_id"];
                    sleep(2);
                    $query = "INSERT INTO `session` (`id`, `user_id`, `money_spent`) VALUES (NULL, '".$_SESSION['user_id']."', '0')";
                    mysqli_query($conn, $query);
                    echo'
                            <script type="text/javascript">
                            window.location.href = "./index.php";
                            </script>
                        ';
                } else {
                    echo '<script>
                        swal({
                            title:"Error",   
                            text:"Wrong Password.",
                            icon:"warning",
                            type: "error",
                            confirmButtonText: "Ok"
                        });
                        </script>';
                }
            }
        } else {
            echo '<script>
                swal({
                    title:"Error",   
                    text:"No Username Found",
                    icon:"warning",
                    type: "error",
                    confirmButtonText: "Ok"
                });
                </script>';
        }
    }
    ?>
</body>
<script src="./Js/loginjavascript.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>