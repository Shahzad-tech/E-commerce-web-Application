<?php
include_once("./conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Checkout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<!-- <style>
  div,p{
    border: 1px solid black;
  }
</style> -->

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success static-top">

    <a class="navbar-brand" href="#">My orders <i style='font-size:24px' class='fas'>&#xf058;</i> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav offset-4">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorder.php">Myorder
          </a>
        </li>
        <!--li class="nav-item">
        <a class="nav-link active" href="#">Checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.html">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Login</a>
      </li-->
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="destroy_session.php">Logout</a>
        </li>
      </ul>
    </div>

  </nav>

  <div class="container-fluid">
    <div class="row mt-5 d-flex justify-content-center">
      <div class="col-12 col-md-7">
        <h2 class="font-weight-light ">
          Checkout
        </h2>
        <hr>
        <?php
        $amount_count = 0;
        $count = 0;
        $sql = "SELECT c.quantity, i.item_name, i.price, c.item_id FROM cart c, items i  WHERE c.user_id = '" . $_SESSION['user_id'] . "' && c.item_id = i.id";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows > 0) {
          while ($row1 = mysqli_fetch_assoc($result)) {
            $item_id = $row1['item_id'];
            $iname = $row1['item_name'];
            $quantity = $row1['quantity'];
            $price = $row1['price'];
            $price = $price * $quantity;
            $count += $quantity;
            $amount_count += $price;
            echo '
              <h5 class="font-weight-light text-muted">' . $iname . '</h5>
              <p><span>' . $quantity . '</span> items
                <span class="float-right text-muted">' . $price . 'Rs</span>
              </p>
              <hr>
            ';
          }
        }
        ?>
        <p class="text-muted text-right">
          Total (<span><?php echo $count; ?></span>) items <br> <span class="text-warning"><?php echo $amount_count; ?> Rs</span>
        </p>
        <p class="text-muted text-center">
          <button type="button" class="btn btn-danger mt-5" id="placeOrder">Place Order</button>
        </p>

      </div>
    </div>
    <?php
    include_once("footer.html");
    ?>
  </div>
  <script src="./Js/myorderjavascript.js"></script>
  <script>
    $("#placeOrder").click(function() {
      swal("Order Processed", "Our man will reach you in a while \n\n Thankyou for shopping with us!\n\n \t\tShop Again!");
      <?php
      $sql = "DELETE FROM cart WHERE user_id = '".$_SESSION['user_id']."' ";
      mysqli_query($conn, $sql);
      $sql1 = "UPDATE session SET money_spent = '".$amount_count."' where user_id ='".$_SESSION['user_id']."' ORDER BY id DESC LIMIT 1 ";
      mysqli_query($conn, $sql1);
      sleep(3);
      ?>
      window.location.href = "./index.php";
    });
  </script>
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>