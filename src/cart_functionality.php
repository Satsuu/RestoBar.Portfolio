<?php
include("./admin/admin_connection.php");
include("connection.php");

if(isset($_POST['cart-btn'])){
    $menu_img = $_POST['menu_img'];
    $menu_name = $_POST['menu_name'];
    $menu_quantity = $_POST['menu_quantity'];
    $menu_price = $_POST['menu_price'];

    $select_query = mysqli_query($admin_connection, "SELECT * FROM ollies_cart WHERE menu_name='$menu_name'");

    if(mysqli_num_rows($select_query) > 3){
        echo "already added";
    }else{
        $insert_query = mysqli_query($admin_connection, "INSERT INTO ollies_cart (menu_img,menu_name,menu_quantity,menu_price) 
        VALUES ('$menu_img', '$menu_name', '$menu_quantity', '$menu_price')");
    }
}

?>