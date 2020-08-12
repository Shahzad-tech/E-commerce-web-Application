<?php
include_once("./conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Order</title>
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
    <a class="navbar-brand" href="#">My orders <i style='font-size:24px' class='fas'>&#xf07a;</i> </a>
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
          <a class="nav-link active" href="myorder.php">Myorder
          </a>
        </li>
        <!--li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
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
  <div class="container">
    <div class="row mt-5">
      <div class="col-12 col-md-7">
        <h2 class="font-weight-light ">
          Cart
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
              <div class="DataOrder">
              <h5 class="font-weight-light text-muted">' . $iname . '</h5>
              <p id="para1">
              <span id="volume">' . $quantity . '</span>
              <button onCLick="plus(' . $item_id . ',' . $quantity . ')" class="btn btn-info text-light offset-1" id="' . $item_id . 'plus">+</button>
              <button onCLick="minus(' . $item_id . ',' . $quantity . ')" class="btn btn-info text-light" id="' . $item_id . 'minus">-</button>
              <button onCLick="DELETE(' . $item_id . ',' . $_SESSION['user_id'] . ')" class="btn btn-dark text-light" id="' . $item_id . 'delete">Delete</button>
              <span class="float-right text-muted" id="amount">' . $price . ' Rs</span>
              <hr>
              </p>
              </div>
            ';
          }
        }
        ?>
        <p class="float-right text-muted text-right">
          Total (<span id="totalVolume"><?php echo $count; ?></span>) items <br> <span class="text-warning" id="totalAmount"><?php echo $amount_count; ?> Rs</span><br>
          <a class="btn btn-danger mt-3" href="Checkout.php">Proceed to Checkout</a>
        </p>
      </div>
    </div>

  </div>
  <div class="container-fluid">
    <?php
    include_once('footer.html');
    ?>
  </div>
  <script src="./Js/myorderjavascript.js"></script>
  <script>
    function plus(itemid, quan) {
      quan = quan + 1;
      $.ajax({
          type: 'POST',
          url: 'update.php',
          data: {
            increment_item_id: itemid,
            increment_item_quantity: quan
          },
        })
        .done(function(data) {
          //alert(data);
          window.location.reload();
        });
    }

    function minus(itemid, quan) {
      if (quan == 1) {
        swal({
          title: "Error",
          text: "Can't be less then one",
          icon: "warning",
          type: "error",
          confirmButtonText: "Ok",
        });
      } else {
        quan = quan - 1;
        $.ajax({
            type: 'POST',
            url: 'update.php',
            data: {
              decrement_item_id: itemid,
              decrement_item_quantity: quan
            },
          })
          .done(function(data) {
            //alert(data);
            window.location.reload();
          });
      }
    }

    function DELETE(itemid, userid) {
      $.ajax({
          type: 'POST',
          url: 'update.php',
          data: {
            delete_cart_itemid: itemid,
            delete_cart_userid: userid
          },
        })
        .done(function(data) {
          //alert(data);
          window.location.reload();
        });
    }
  </script>
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>