<?php
include_once("./conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!--for chart-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    if (session_status() == PHP_SESSION_NONE || !isset($_SESSION) || !isset($_SESSION['user_id'])) {
        echo '<script>
        $(document).ready(function () {
            $("#dashboard").attr("style", "display:none");
            $("#myorder").attr("style", "display:none");
            $("#logout").attr("style", "display:none");
        });
        </script>';
    }
    if (isset($_SESSION['user_id'])) {
        echo '<script>
        $(document).ready(function () {
            $("#register").attr("style", "display:none");
            $("#login").attr("style", "display:none");
        });
        </script>';
    }
    ?>
</head>
<style>
    input,
    textarea {
        display: none;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success static-top">

        <a class="navbar-brand" href="#">Dashboard <i style="font-size:24px" class="fa">&#xf0e4;</i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav offset-4">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li id="dashboard" class="nav-item">
                    <a class="nav-link active" href="Dashboard.php">Dashboard</a>
                </li>
                <li id="myorder" class="nav-item">
                    <a class="nav-link" href="myorder.php">Myorder
                    </a>
                </li>
                <li id="register" class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li id="login" class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact us</a>
                </li>
                <li id="logout" class="nav-item">
                    <a class="nav-link" href="destroy_session.php">Logout</a>
                </li>
            </ul>
        </div>

    </nav>
    <?php
    $sql = "select * from users where user_id = '" . $_SESSION['user_id'] . "'";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
        while ($row1 = mysqli_fetch_assoc($result)) {
            $name = $row1['name'];
            $nic = $row1['nic'];
            $city = $row1['city'];
            $address = $row1['address'];
        }
    }
    ?>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12  col-md-2" style="border-right: 1px solid coral">
                <form id="form-1 mb-3 mb-md-0" method="post" action="">
                    <h3 class="font-weight-light text-danger">
                        User Profile <i class='fas fa-user ml-1' style='font-size:24px'></i>
                    </h3>
                    <hr>
                    <h4 class="text-muted font-weight-light mt-3 mt-md-1">
                        Name
                    </h4>
                    <input form="editform" class="mt-1" type="text " name="namee" placeholder="<?php echo $name; ?>" autofocus>
                    <p class="font-weight-light" id="namee"><?php echo $name; ?></p>
                    </p>
                    <h4 class="text-muted font-weight-light mt-3" id="id">
                        ID
                    </h4>
                    <p class="font-weight-light" id="idee">
                        <?php echo $nic; ?>
                    </p>
                    <h4 class="text-muted font-weight-light mt-3">
                        City
                    </h4>
                    <input form="editform" class="mt-1" type="text" name="city" placeholder="<?php echo $city; ?>">
                    <p class="font-weight-light" id="city"><?php echo $city; ?></p>

                    <h4 class="text-muted font-weight-light mt-3">
                        Address
                    </h4>
                    <textarea form="editform" class="mt-1 w-100" type="text" name="address" placeholder="<?php echo $address; ?>"></textarea>
                    <p class="font-weight-light" id="address" style="word-wrap: break-word;">
                        <?php echo $address; ?>
                    </p>
                    <hr>
                    <input id="confirmeditbutton" name="submit" type="submit" class="btn btn-danger" value="Confirm Edit" hidden="true">
                </form>
                <p class="text-info" id="para1"><button class="btn text-info">Click to edit user details</button></p>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $sql = "UPDATE users SET name ='".$_POST['namee']."', city='".$_POST['city']."', address='".$_POST['address']."'";
                mysqli_query($conn, $sql);
            }
            ?>
            <div class="col-12 col-md-9 mt-2 mt-md-0 bg-light ml-md-5">
                <h3 class="text-info font-weight-light mt-4 mt-md-1">
                    Sessions
                    <!--div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div-->
                </h3>
                <?php
                $query = "SELECT COUNT(id) as sessions FROM session where user_id='" . $_SESSION['user_id'] . "' ";
                $result = mysqli_query($conn, $query);
                $row1 = mysqli_fetch_assoc($result);
                $sessions = $row1['sessions'];
                ?>
                <p class="text-muted">You have been logged in <span><?php echo $sessions; ?></span> time.</p>
                <hr>
                <h3 class="text-info font-weight-light mt-1">
                    Money Spent
                </h3>
                <div class="chart">
                    <canvas id="myChart"></canvas>
                </div>
                <hr>
                <!-- <br> -->
                <h3 class="text-info font-weight-light">
                    Liked Items
                </h3>
                <!-- <hr> -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-9 offset-md-1 mt-3">
                        <ul class="list-group">
                            <?php
                            $sql = "select item_id from liked where user_id = '" . $_SESSION['user_id'] . "'";
                            $result = mysqli_query($conn, $sql);
                            $num_rows = mysqli_num_rows($result);
                            $items = array();
                            $sql1 = "SELECT item_id from cart WHERE user_id = '" . $_SESSION['user_id'] . "' ";
                            $result1 = mysqli_query($conn, $sql1);
                            $num_rows1 = mysqli_num_rows($result1);
                            if ($num_rows1 > 0) {
                                while ($row2 = mysqli_fetch_assoc($result1)) {
                                    $lid = $row2['item_id'];
                                    array_push($items, $lid);
                                }
                            }
                            if ($num_rows > 0) {
                                while ($row1 = mysqli_fetch_assoc($result)) {
                                    $item_id = $row1['item_id'];
                                    $sql1 = "select item_name from items where id = '" . $item_id . "'";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $row = mysqli_fetch_assoc($result1);
                                    $item_name = $row['item_name'];
                                    if (in_array($item_id, $items)) {
                                        $input = '<button class="btn btn-danger float-right mr-sm-3" style="background-color:green">Added to Cart</button>';
                                    } else {
                                        $input = '<button onClick="Order(' . $item_id . ',' . $_SESSION['user_id'] . ')" class="btn btn-danger float-right mr-sm-3">Add to Cart</button>';
                                    }
                                    echo '
                                    <li class="list-group-item"><span>' . $item_name . '</span>
                                        <button onClick="remove(' . $item_id . ',' . $_SESSION['user_id'] . ')" class="btn btn-info float-right ">Remove</button> 
                                        ' . $input . '
                                    </li>
                                    ';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <br>
                <hr>
            </div>


        </div>
        <div class="row text-muted text-center bg-light mt-5 mb-3">
            <div class="col-4 offset-4 text-muted text-center mt-2">

                Created by Shahzad Javed &amp; Faraz Haider <br>
                SP18-BCS-149 | SP18-BCS-103<br>
                Islamabad.
            </div>
            <div class="col-2 offset-2 mt-2">
                <i style="font-size:24px" class="fa" aria-hidden="true"></i>
                <i style="font-size:24px" class="fa" aria-hidden="true"></i>
                <i style="font-size:24px" class="fa" aria-hidden="true"></i>
                <!-- <i style="font-size:24px" class="fa">&#xf0e1;</i> -->
                <i style="font-size:24px" class="fa" aria-hidden="true"></i>
            </div>

        </div>
    </div>
    <script src="./Js/DashboardJavaScript.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    $sql = "SELECT money_spent from session where user_id = '" . $_SESSION['user_id'] . "' ";
    $result1 = mysqli_query($conn, $sql);
    $num_rows1 = mysqli_num_rows($result1);
    $data = "[";
    $labels = "[";
    $counts = 1;
    if ($num_rows1 > 0) {
        while ($row2 = mysqli_fetch_assoc($result1)) {
            $data = $data . $row2['money_spent'] . ",";
            $labels = $labels . "Login" . strval($counts) . ",";
            $counts++;
        }
        $data = $data . "]";
        $labels = $labels . "]";
    }
    $data = substr($data, 0, strlen($data) - 2) . "]";
    $labels = substr($labels, 0, strlen($labels) - 2) . "]";
    ?>
    <script>
        var ctx = $('#myChart')[0].getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Login1', 'Login2', 'Login3', 'Login4', 'Login5', 'Login6'], // login details chart.js ['Login1', 'Login2', 'Login3', 'Login4', 'Login5', 'Login6'] 
                datasets: [{
                    label: 'Money Spent',

                    data: <?php echo $data; ?>, //Data [400, 600, 900, 200, 450, 560]
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        function remove(itemid, userid) {
            $.ajax({
                    type: 'POST',
                    url: 'update.php',
                    data: {
                        delete_like_item: itemid,
                        delete_like_user: userid
                    },
                })
                .done(function(data) {
                    //alert(data);
                    window.reload();
                });

        }

        function Order(itemid, userid) {
            $.ajax({
                type: 'POST',
                url: 'update.php',
                data: {
                    add_cart_item: itemid,
                    add_cart_user: userid
                },
            }).done(function(data) {
                //alert(data);
                window.location.reload();
            });
        }
    </script>
</body>

</html>