<?php
include("./admin_connection.php");

$target_dir = "upload/";
$uploadOk = 1;

if(isset($_POST['create-menu'])){
    $menu_img = $_FILES['menu_img']['name'];
    $menu_name = $_POST['menu_name'];
    $menu_tag = $_POST['menu_tag'] ?? "";
    $menu_price = $_POST['menu_price'];
    
    $target_file = $target_dir . basename($_FILES["menu_img"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        echo  "Sorry, file already exists.";
        $uploadOk = 0;
    }else{
        $create_query = mysqli_query($admin_connection, "INSERT INTO admin_create_tbl (menu_img,menu_name,menu_tag,menu_price) VALUES ('$menu_img','$menu_name','$menu_tag','$menu_price')");
        if (move_uploaded_file($_FILES["menu_img"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["menu_img"]["name"])). " has been uploaded.";
        }else{
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
}

//Delete function
if(isset($_POST['delete-btn'])){
    $menu_id = mysqli_real_escape_string($admin_connection, $_POST['delete-btn']);
    $query_delete = mysqli_query($admin_connection, "DELETE FROM admin_create_tbl WHERE menu_id='$menu_id'");

        if(!$query_delete){
            echo 'Menu not deleted';
            header('Location: admin_menu.php');
            exit(0);
        }else{
            echo 'Menu Deleted';
            header('Location: admin_menu.php');
            exit(0);
        }
    
}
