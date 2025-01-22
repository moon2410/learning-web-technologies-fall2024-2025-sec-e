<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BondhuShoba</title>
  <link rel="stylesheet" href="view/style.css">
</head>
<body>
  <div class="wrapper">
    <section class="form login">
      <header> Welcome to Bondhushoba </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="show">show</i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Login">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
      <div class="link">Do you want to know<a href="view/terms_condition.php">&nbsp; Our Terms and Condition </a></div>
      
      <div class="link">If you want to Reach us! <a href="view/contact_us_form.html">Click Contact Us</a></div>
      <div class="link">Go to <a href="home.php">Home Page</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
