<?php
include("connection.php");

include("./admin/admin_connection.php");

?>


<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8"/>
    <title>Menu</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!--Navbar (Sit on Top) -->
    <div class="cover-container d-flex w-100 mx-auto flex-column">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto  text-decoration-none"> 
                    <img src="../img//logo.jpg" class="bi me-2 rounded-pill" width="40" height="32">
                    <span class="fs-4 text-dark">Ollie's Bistro</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Admin</a></li>
                    <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                </ul>
            </header>
        </div>
    </div>
    <!-- Menu List -->
    <div class="container ">
        <h3 class="h3">Menu List</h3>
            <div class="row g-3 d-flex flex-wrap">
                <?php
                    $query = mysqli_query($admin_connection, "SELECT * FROM admin_create_tbl");
                        if(mysqli_num_rows($query) > 0){
                            while($fetch_menu = mysqli_fetch_assoc($query)){
                    ?>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="product-grid3 ">
                            <form action="cart.php" method="POST">
                                <div class="product-image3">
                                    <img class="pic-1" src="../img//<?php echo $fetch_menu['menu_img']; ?>">
                                    <span class="product-new-label"><?php echo $fetch_menu['menu_tag']; ?></span>
                                </div>
                                <div class="product-content text-center">
                                    <h3 class="title" ><?php echo $fetch_menu['menu_name']; ?></h3>
                                    <div class="price">
                                        &#8369 <?php echo $fetch_menu['menu_price']; ?>.00
                                        <div class="quantity mt-2">
                                            <div class="col-12">
                                                <h5 class="text-danger fw-bold">Quantity:</h5>
                                                <input type="number" min="1" max="25" name="menu_quantity" class="form-control text-center fw-bolder" value=""> 
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" name="menu_img" value="<?php echo $fetch_menu['menu_img']; ?> ">  
                                    <input type="hidden" name="menu_name" value="<?php echo $fetch_menu['menu_name']; ?> ">  
                                    <input type="hidden" name="menu_price" value="<?php echo $fetch_menu['menu_price']; ?> ">  

                                    <div class="align-baseline mt-3 text-center text-decoration-none">
                                        <button class="btn btn-outline-danger fw-bold" name="cart-btn" value="<?php echo $fetch_menu['menu_id']; ?>">Add to Cart</button>
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
            <script src="../bootstrap/js/bootstrap.bundle.min.js""></script>
    </div>

</html>




