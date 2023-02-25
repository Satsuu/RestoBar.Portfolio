<?php
include("connection.php");
$url = 'C:\XAMPP\htdocs\web\img\header.jpg';

$email_valid = $password_valid = NULL;
$input = [];

if (isset($_POST["login-submit"])) {
    if (empty($_POST["email"])) {
        $error["email"] = "Email Required";
    } else {
        $input["email"] = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $error["password"] = "Password Required";
    } else {
        $input["password"] = $_POST["password"];
    }

    

    if (isset($input["email"]) and isset($input["password"])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $login_query = $connection->query("SELECT * FROM admin_tbl WHERE email = '$email' LIMIT 1");
        
        // Check if Email Exists
        if ($login_query->rowCount() == 0) {
            $error["login"] = "Email does not existing!";

            } else {
                $db_user = $login_query->fetch(PDO::FETCH_ASSOC);
                $db_id = $db_user["admin_id"];
                $db_email = $db_user["email"];
                $db_password = $db_user["password"];
            
                // Check if query password is same to the inputted password
            if ($password != $db_password) {
                $error["login"] = "Password does not exist";
            } else {
                $_SESSION["admin_id"] = $db_id;
                header("Location: admin/home.php");
            }
        };
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none"> 
                <img src="../img//logo.jpg" class="bi me-2 rounded-pill" width="40" height="32">
                <span class="fs-4">Ollie's Bistro</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Admin</a></li>
                <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
            </ul>
        </header>
    </div>
    <section class="vh-100 gradient-none">
            <div class="container py-5 h-50">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-light text-dark" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-dark mb-5">Please enter your Admin Account</p>
                                    <form method="post" novalidate>
                                    <div class="form-outline form-white mb-4">
                                        <input name="email" type="text" placeholder="Email Address" class="form-control form-control-lg <?php if (isset($error["email"])) echo "is-invalid";
                                                                                                                                        else if (isset($input["email"])) echo "is-valid" ?>"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value=<?php if (isset($input["email"])) echo htmlentities($input["email"]) ?>>
                                        <div class="invalid-feedback"><?php if (isset($error["email"])) echo htmlentities($error["email"]); ?></div>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input name="password" placeholder="Password" type="password" class="form-control form-control-lg <?php if (isset($error["password"])) echo "is-invalid";
                                                                                            else if (isset($input["password"])) echo "is-valid" ?>" id="exampleInputEmail1" 
                                        aria-describedby="passwordHelp"
                                        value=<?php if (isset($input["password"])) echo htmlentities($input["password"]) ?>>
                                        <div class="invalid-feedback"><?php if (isset($error["password"])) echo htmlentities($error["password"]); ?></div> 
                                    </div>

                                    <div class="alert alert-danger <?php if (empty($error["login"])) echo "d-none" ?>" role="alert">
                                        <?php if (isset($error["login"])) echo $error["login"] ?>
                                    </div>

                                    <input class="w-100 btn btn-lg btn-primary mt-4" type="submit" name="login-submit" value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</html>



