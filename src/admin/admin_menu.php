<?php
include("./admin_connection.php");

include("./admin_functionality.php");

?>


<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<title>About</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!--Navbar (Sit on Top) -->
<div class="cover-container d-flex w-100 mx-auto flex-column">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto  text-decoration-none">
                <img src="../../img//logo.jpg" class="bi me-2 rounded-pill" width="40" height="32">
                <span class="fs-4 text-dark">Ollie's Bistro</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="home.php" class="nav-link " aria-current="page">Home</a></li>
                <li class="nav-item"><a href="admin_menu.php" class="nav-link ">Menu</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link ">Logout</a></li>
                <li class="nav-item"><a href="order.php" class="nav-link ">Order</a></li>
            </ul>
        </header>
    </div>
</div>
<!-- Menu List -->
<div class="container ">
    <h3 class="h3">Menu List</h3>
    <div class="align-baseline mb-3 text-center text-decoration-none">
        <a href="create_menu.php" class="btn btn-outline-info">Create Menu</a>
    </div>
    <div class="row g-3 d-flex flex-wrap">
        <?php
        $query = mysqli_query($admin_connection, "SELECT * FROM admin_create_tbl");
        if (mysqli_num_rows($query) > 0) {
            while ($fetch_menu = mysqli_fetch_assoc($query)) {
        ?>
                <div class="col-md-3 col-sm-6 ">
                    <div class="product-grid3 ">
                        <form action="admin_functionality.php" method="POST" class="">
                            <div class="product-image3">
                                <img class="pic-1" src="../../img//<?php echo $fetch_menu['menu_img']; ?>">
                                <span class="product-new-label"><?php echo $fetch_menu['menu_tag']; ?></span>
                            </div>
                            <div class="product-content text-center">
                                <h3 class="title"><?php echo $fetch_menu['menu_name']; ?></h3>
                                <div class="price">
                                    &#8369 <?php echo $fetch_menu['menu_price']; ?>.00
                                    <div class="quantity">
                                        <div class="col-12">
                                            <h5 class="text-danger fw-bold">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control text-center fw-bolder" value=""> </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="align-baseline mt-3 text-center text-decoration-none">
                                    <button class="btn btn-outline-danger fw-bold" name="delete-btn" value="<?php echo $fetch_menu['menu_id']; ?>">Delete Menu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>
<script src="../../bootstrap/js/bootstrap.bundle.min.js""></script>
</html>