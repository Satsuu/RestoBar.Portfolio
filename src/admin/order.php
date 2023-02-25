<?php
include("./admin_connection.php");

if(isset($_GET['remove_product'])){
   $remove_id = $_GET['remove_product'];
   mysqli_query($admin_connection, "DELETE FROM ollies_cart WHERE menu_id = '$remove_id'");
}

if(isset($_GET['delete_all_products'])){
   mysqli_query($admin_connection, "DELETE FROM ollies_cart");
}

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
    <title>Ollie's Bistro</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <body style="background-color: #eee;">
    <div class="card table-responsive px-0">
                
                <table class="table table-bordered table-striped">

                <thead>
                    <th style="text-align:center;">Menu Image</th>
                    <th style="text-align:center;">Menu Name</th>
                    <th style="text-align:center;">Menu Quantity</th>
                    <th style="text-align:center;">Menu Price</th>
                    <th style="text-align:center;">Action</th>
                </thead>

                <tbody>

                    <?php 
                    
                    $query = mysqli_query($admin_connection, "SELECT * FROM ollies_cart");

                    $sub_total = 0;

                    if(mysqli_num_rows($query) > 0){
                        while($fetch_cart = mysqli_fetch_assoc($query)){
                    ?>

                    <tr>
                        <td style="text-align:center;"><img src="../../img/<?php echo $fetch_cart['menu_img']; ?>" height="100"></td>
                        <td style="text-align:center;"><?php echo $fetch_cart['menu_name']; ?></td>
                        <td style="text-align:center;"><?php echo ($fetch_cart['menu_quantity']); ?></td>
                        <td style="text-align:center;">₱ <?php echo $total = ($fetch_cart['menu_price']); ?>.00</td>
                    </tr>
                    <?php
                        $sub_total += $total;  
                        }
                    }
                    ?>
                    <tr class="table-bottom">
                        <td style="text-align:center;"><a href="admin_menu.php" class="btn btn-custom fw-bold" style="margin-top: 0;">Continue Shopping</a></td>
                        <td style="text-align:center;" colspan="2">Grand total</td>
                        <td style="text-align:center;">₱ <?php echo $sub_total; ?>.00</td>
                        <td style="text-align:center;"><a href="../cart.php?delete_all_products" onclick="return confirm('Are you sure you want to delete all?');" class="btn btn-custom fw-bold"> <i class="fas fa-trash"></i> Delete all </a>
                    </tr>
                </tbody>
                </table>
                    <div class="text-center">
                        <a href="admin_alert.php" class="btn btn-custom fw-bold col-md-3 mb-2 <?= ($total > 1)?'':'disabled'; ?>">Finish Order</a>
                    </div>
            </div>
    </body>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js""></script>
</html>

<style>
    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }

</style>