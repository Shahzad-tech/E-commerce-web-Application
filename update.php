<?php
include_once("./conn.php");
if (isset($_POST["add_like_item"])){
    $item_id= $_POST["add_like_item"];
    $user_id= $_POST["add_like_user"];
    $sql = "INSERT INTO `liked` (`id`, `user_id`, `item_id`) VALUES (NULL, '".$user_id."', '".$item_id."');";
    if (mysqli_query($conn, $sql)){
        echo "Done";
    }
    else{
        echo "Not Done";
    }
}
if (isset($_POST["delete_like_item"])){
    $ditem_id= $_POST["delete_like_item"];
    $duser_id= $_POST["delete_like_user"];
    $sql = "DELETE FROM liked WHERE user_id = '".$duser_id."' AND item_id= '".$ditem_id."' ";
    if (mysqli_query($conn, $sql)){
        echo "Done";
    }
    else{
        echo "Not Done";
    }
}
if (isset($_POST["add_cart_item"])){
    $item_id= $_POST["add_cart_item"];
    $user_id= $_POST["add_cart_user"];
    $sql = "INSERT INTO `cart` (`id`, `user_id`, `item_id`,`quantity`) VALUES (NULL, '".$user_id."', '".$item_id."',1);";
    if (mysqli_query($conn, $sql)){
        echo "Done";
    }
    else{
        echo "Not Done";
    }
}
if (isset($_POST["increment_item_id"])){
    $item_id= $_POST["increment_item_id"];
    $quantity= $_POST["increment_item_quantity"];
    $sql = "UPDATE cart SET quantity = '".$quantity."' WHERE item_id = '".$item_id."';";
    if (mysqli_query($conn, $sql)){
        echo "Done";
    }
    else{
        echo "Not Done";
    }
}
if (isset($_POST["decrement_item_id"])){
    $item_id= $_POST["decrement_item_id"];
    $quantity= $_POST["decrement_item_quantity"];
    $sql = "UPDATE cart SET quantity = '".$quantity."' WHERE item_id = '".$item_id."';";
    if (mysqli_query($conn, $sql)){
        echo "Done";
    }
    else{
        echo "Not Done";
    }
}
if (isset($_POST["delete_cart_itemid"])){
    $citem_id= $_POST["delete_cart_itemid"];
    $cuser_id= $_POST["delete_cart_userid"];
    $sql = "DELETE FROM cart WHERE user_id = '".$cuser_id."' AND item_id= '".$citem_id."' ";
    if (mysqli_query($conn, $sql)){
        echo "Done";
    }
    else{
        echo "Not Done";
    }
}
?>