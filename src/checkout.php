<?php

include("connection.php");
include("./admin/admin_connection.php");
include("./checkout_functionality.php");

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="checkout_functionality.php" method="POST">
                        <div class="row">
                            <div class="col-50">
                                <h5 class="mb-3"><a href="menu.php" class="text-body"><i
                                    class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" required="" name="client_name" placeholder="John M. Doe">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Full Address</label>
                                <input type="text" id="adr" required="" name="client_address" placeholder="542 W. 15th Street">
                                <label for="adr"><i class="fa fa-phone"></i> Number</label>
                                <input type="text" id="num" required="" name="client_number" placeholder="09123456789">
                                <label for="notes"><i class="fa fa-sticky-note-o"></i> Notes</label>
                                <input type="text" id="note" required="" name="client_notes" placeholder="Not Spicy">
                                <select class="custom-select" style="width:170px;" name="client_payment" required="">
                                    <option>Gcash</option>
                                    <option>Cash on Delivery</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" value="Continue to checkout" name="order-btn" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
        <script src="../bootstrap/js/bootstrap.bundle.min.js""></script>
    </body>
</html>
<style>
    body {
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
    }

    * {
        box-sizing: border-box;
    }

    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }

    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .btn {
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }

    a {
        color: #2196F3;
    }

    hr {
        border: 1px solid lightgrey;
    }

    span.price {
        float: right;
        color: grey;
    }

    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }
        .col-25 {
            margin-bottom: 20px;
        }
    }
</style>
