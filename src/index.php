<?php
include("connection.php");
$url = 'C:\XAMPP\htdocs\web\img\header.jpg';

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
    <title>Ollie's Bistro</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
    <body>
        <!--Navbar (Sit on Top) -->
        <body class="d-flex h-100 text-center text-white">
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <div class="container">
                    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto  text-decoration-none"> 
                            <img src="../img//logo.jpg" class="bi me-2 rounded-pill" width="40" height="32">
                            <span class="fs-4 text-light">Ollie's Bistro</span>
                        </a>
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a href="index.php" class="nav-link text-light" aria-current="page">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-link text-light">About</a></li>
                            <li class="nav-item"><a href="contact.php" class="nav-link text-light">Contact</a></li>
                            <li class="nav-item"><a href="login.php" class="nav-link text-light">Admin</a></li>
                            <li class="nav-item"><a href="cart.php" class="nav-link text-light">Cart</a></li>      
                        </ul>
                    </header>
                </div>
                <main class="fw-bolder px-5 py-2 border border-5 rounded-3 position-absolute top-50 start-50 translate-middle">
                    <h1>Ollie's Bistro</h1>
                    <p class="lead">
                        <a href="menu.php" class="btn btn-lg bg-primary text-light">Order Now</a>
                    </p>
                </main
            </div>
        </body>
        <style>
            body {
                background-image: url("../img/header.jpg");
                background-size: 100% 100%;
                background-repeat: no-repeat;
                font-weight: bolder;
                font-family: 'Fredoka One', cursive;
            }

            h1 {
                font-weight: bolder;
            }
        </style> 
    </body>
    <script src="../boostrap/js/bootstrap.min.js"></script>
</html>