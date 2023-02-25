<?php
include("./admin_connection.php");

include("./admin_functionality.php");
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<title>Ollie's Bistro</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

<body>
    <section class="vh-100 gradient-none">
        <div class="container py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                    <div class="card bg-light" style="border-radius: 1rem;">
                        <h5 class="mb-0"><a href="admin_menu.php" class="text-body"><i class="me-2"></i>Continue browsing</a></h5>
                        <div class="card-body p-3 text-center">
                            <div class="mb-md-0 mt-md-4">
                                <h2 class="fw-bold mb-0 text-center">Create Menu</h2>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="img mt-4">
                                        <label><B>Menu Image</B></label>
                                        <input type="file" name="menu_img" id="menu_img" class="form-control">
                                    </div>
                                    <div class="title mt-2">
                                        <label><B>Menu Title</B></label>
                                        <input type="text" name="menu_name" id="menu_name" class="form-control" value="" placeholder="Food Title">
                                    </div>
                                    <div class="tag mt-2 ">
                                        <input class="form-check-input" type="radio" name="menu_tag" id="menu_tag" value="New Menu">
                                        <label class="form-check-label" for="inlineRadio1">New Menu</label>
                                        <input class="form-check-input" type="radio" name="menu_tag" id="menu_tag" value="Best Seller">
                                        <label class="form-check-label" for="inlineRadio1">Best Seller</label>
                                    </div>
                                    <div class="price mt-2">
                                        <label><B>Menu Price</B></label>
                                        <input type="text" name="menu_price" id="menu_price" class="form-control" value="" placeholder="Food Price">
                                    </div>
                                    <div class="create mt-3">
                                        <button type="submit" name="create-menu" class="btn btn-outline-primary">Create Menu</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="../../bootstrap/js/bootstrap.bundle.min.js""></script>
</html>