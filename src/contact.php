<?php

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<title>Ollie's Bistro</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<body>

    
<div class="container">
  <form action="https://app.99inbound.com/e/123" method="POST" target="_blank">
    <h3 style="text-align: center;">Contact Us</h3>

    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white">
            <i class="fa fa-user"></i>&nbsp
          </span>
        </div>
        <input name="name" type="name" placeholder="Name" class="form-control border-left-0" required>
      </div>
    </div>

    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white">
            <i class="fa fa-envelope"></i>
          </span>
        </div>
        <input name="email" type="email" placeholder="Email" class="form-control border-left-0" required>
      </div>
    </div>

    <div class="form-group">
      <textarea class="form-control" id="message" rows="5" placeholder="Enter message" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary float-right">
      <i class="fa fa-paper-plane"></i> 
      Send
    </button>
  </form>
</div>





    </body>
</body>
<script src="../bootstrap/js/bootstrap.bundle.min.js""></script>
</html>