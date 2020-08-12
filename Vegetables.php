<?php
include_once("./conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    img {
        width: auto;
        height: 160px;
    }

    .carousel-inner img {
        background-size: cover;
        min-height: 45vh;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success static-top">

        <a class="navbar-brand" href="#">Home <i style='font-size:24px' class='fas'>&#xf015;</i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav offset-4">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li id="dashboard" class="nav-item">
                    <a class="nav-link" href="Dashboard.php">Dashboard</a>
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
    <div class="container-fluid">
        <div class="row bg-light">
            <div class="container mt-2 mb-2">
                <div class="col-12 text-muted">
                    <h7>
                        <i class="fa fa-envelope mr-3 text-muted"></i>
                        Formore@email.com
                    </h7>

                    <i class="fa fa-facebook offset-2 offset-md-9"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-pinterest-p"></i>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">

        <div class="row mt-1">
            <div class="col-12 col-md-3">
                <div class="dropdown">
                    <button type="button" class="btn btn-lg btn-success dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bars"></i>
                        <span class="ml-2 mr-5">Categories</span>
                    </button>
                    <div class="dropdown-menu">
                        <ul style="list-style-type: none;" class="mr-5">
                            <li> <a class="dropdown-item mt-3" href="index.php">Food</a></li>
                            <li><a class="dropdown-item mt-3" href="Vegetables.php">Vegetables</a></li>
                            <li><a class="dropdown-item mt-3" href="Electronic.php">Electronics</a></li>
                            <li><a class="dropdown-item mt-3" href="clothes.php">Clothes</a></li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-12 col-md-7 mt-1 mt-md-0 offset-md-1">
                <div class="row">
                    <div class="col-12 col-md-12 mt-1 mt-md-0 offset-md-1">

                        <div id="divslider" class="carousel slide" data-ride="carousel">

                            <ul class="carousel-indicators">
                                <li data-target="#demoslider" data-slide-to="0" class="active"></li>
                                <li data-target="#demoslider" data-slide-to="1"></li>
                                <li data-target="#demoslider" data-slide-to="2"></li>
                                <li data-target="#demoslider" data-slide-to="3"></li>
                            </ul>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./Images/covercart3.jpg" alt="cover photo">
                                    <div class="carousel-caption">
                                        <h3 class="bg-danger font-weight-light">Welcome</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./Images/foodcover.jpg" alt="food cover photo">
                                    <div class="carousel-caption">
                                        <h3 class="bg-danger font-weight-light">Continental Food Available</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./Images/vegetablecover.jpg" alt="vegetable cover photo">
                                    <div class="carousel-caption">
                                        <h3 class="bg-danger font-weight-light">Fresh Vegetables</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./Images/clothcover.jpg" alt="cloth cover photo">
                                    <div class="carousel-caption">
                                        <h3 class="bg-danger font-weight-light">20% off on Clothes</h3>
                                    </div>
                                </div>

                            </div>

                            <a class="carousel-control-prev" href="#divslider" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#divslider" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 ml-1">
            <div class="col-12">
                <h3 class="text-muted font-weight-light">Vegetables</h3>
            </div>
        </div>

        <div class="row ml-1 mt-3 mb-3 text-center">
            <?php
            $count = 0;
            $items = array();
            $cart_items = array();
            $sql = "SELECT * from items where category='Vegetables'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
            $sql1 ="SELECT item_id from liked WHERE user_id = '".$_SESSION['user_id']."' ";
            $result1 = mysqli_query($conn, $sql1);
            $num_rows1 = mysqli_num_rows($result1);
            if ($num_rows1 > 0) {
                while ($row2 = mysqli_fetch_assoc($result1)) {
                    $lid = $row2['item_id'];
                    array_push($items,$lid);
                }
            }
            $sql1 ="SELECT item_id from cart WHERE user_id = '".$_SESSION['user_id']."' ";
            $result1 = mysqli_query($conn, $sql1);
            $num_rows1 = mysqli_num_rows($result1);
            if ($num_rows1 > 0) {
                while ($row2 = mysqli_fetch_assoc($result1)) {
                    $cid = $row2['item_id'];
                    array_push($cart_items,$cid);
                }
            }
            //echo $cart_items;
            if ($num_rows > 0) {
                while ($row1 = mysqli_fetch_assoc($result)) {
                    if ($count % 3 == 0) {
                        echo '</div>
                        <div class="row ml-1 mt-3 mb-3 text-center">';
                    }
                    $name = $row1['item_name'];
                    $id = $row1['id'];
                    //$category = $row1['category']; 
                    $img = $row1['picture'];
                    $price = $row1['price'];
                    if (in_array($id, $items)){
                        $input = '<i onClick="Like(' . $id . ','.$_SESSION['user_id'].')" id="'.$id.'like" style="font-size:24px; color:green;" class="fas mt-2 btn">&#xf164;</i>';
                    }
                    else{
                        $input = '<i onClick="Like(' . $id . ','.$_SESSION['user_id'].')" id="'.$id.'like" style="font-size:24px;" class="fas mt-2 btn">&#xf164;</i>';
                    }
                    if (in_array($id, $cart_items)){
                        $input1 = '<button onClick="Order(' . $id . ','.$_SESSION['user_id'].')" class="btn btn-dark btn-block text-light '.$id.'cart" style="background-color:green;" id="btn-1">Added in Cart</button>';
                    }
                    else{
                        $input1 = '<button onClick="Order(' . $id . ','.$_SESSION['user_id'].')" class="btn btn-dark btn-block text-light '.$id.'cart" id="btn-1">Add to My order</button>';
                    }
                    echo '
                    <div class="col-sm">
                        <div class="card border-0 shadow" id="' . $id . '">
                            <img class="card-img-top" src="' . $img . '" alt="Card image">
                            <div class="card-body">
                                <p class="card-title">' . $name . '</p>
                                    <p class="card-text text-muted">' . $price . 'Rs</p>
                                '.$input1.$input.'
                            </div>
                        </div>
                    </div>';
                    $count++;
                }
            }
            ?>
        </div>
        <div class="row bg-light mt-5">
            <div class="col-12 mt-3 text-center">
                <h1 class="mb-3 text-muted display-4">Health Blog</h1>
                <img src="./Images/healthblog1.jpg" style="width: auto; height:300px;">
                <p class="mt-3 text-left">
                    Living a healthier life might seem like a tall order — the nutrition,
                    the exercise, the inner happiness! But having some friendly advice at your disposal,
                    whenever and wherever you need it, makes it easier and more fun. With just a click,
                    these awesome blogs filled with tips, tricks,
                    and personal stories will inspire you on your journey to wellness
                </p>
                <h4 class="text-left text-info"><ins>Delish Knowledge</ins></h4>
                <div class="text-left">
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <img src="./Images/delish.png">
                        </div>
                        <div class="col-10 mt-5">
                            Think of this as healthy vegetarian cooking, made simple. Writer Alex is a registered dietitian,
                            and her ingredient shopping tips and cooking videos — check out the one for vegan paella! — are the
                            next best thing to an office visit. Vegetarians or anybody curious about the lifestyle can consider this
                            blog your starter kit for plant-based recipes that range in ingredients and complexity.
                        </div>
                    </div>
                    <h4 class="text-left text-info mt-3"><ins>The Real Food dietitians</ins></h4>
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <img src="./Images/realfood.png">
                        </div>
                        <div class="col-10 mt-5">
                            Diet adventurers is for people who love their Instant Pot, slow cooker, and Whole30 plan.
                            This blog has recipes for each of these phenomena, plus tips for doing meal prep efficiently.
                            Not only are there tons of dietitian-authored recipes, but you can also opt in for customized meal plans
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <?php
        include_once('footer.html'); ?>
        <hr>
    </div>
    <script>
        function Order(itemid,userid) {
            <?php
            if (!isset($_SESSION['user_id'])) {
                echo "window.location='./login.php';";
            }
            if (isset($_SESSION['user_id'])) {?>
                //console.log($("."+itemid+"cart").css("background-color"));
                if ($("."+itemid+"cart").css("background-color") != "rgb(0, 128, 0)") {
                    //$("#"+itemid+"like").css("color", "green");
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
            <?php }
            ?>
        }

        function Like(itemid,userid) {
            <?php
            if (!isset($_SESSION['user_id'])) {
                echo "window.location='./login.php';";
            }
            if (isset($_SESSION['user_id'])) { ?>
                //console.log($("#"+itemid+"like").css("color"));
                if ($("#"+itemid+"like").css("color") == "rgb(33, 37, 41)") {
                    $("#"+itemid+"like").css("color", "green");
                    $.ajax({
                        type: 'POST',
                        url: 'update.php',
                        data: {
                            add_like_item: itemid,
                            add_like_user: userid
                        },
                    })
                    //.done(function(data) {
                        //alert(data);
                    //});
                } else {
                    $("#"+itemid+"like").css("color", "rgb(33, 37, 41)");
                    $.ajax({
                        type: 'POST',
                        url: 'update.php',
                        data: {
                            delete_like_item: itemid,
                            delete_like_user: userid
                        },
                    })
                    //.done(function(data) {
                        //alert(data);
                    //});
                }
                //if($("#likebutton").css("color","green"));

            <?php } ?>

        }
    </script>
</body>

</html>