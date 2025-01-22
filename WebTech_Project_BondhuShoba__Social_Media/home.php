<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BondhuShoba</title>
  <link rel="stylesheet" href="view/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f8ff;
    }
    .wrapper {
      width: 90%;
      max-width: 600px;
      text-align: center;
      padding: 40px;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }
    .logo img {
      width: 120px;
      height: auto;
      margin-bottom: 30px;
    }
    h1 {
      font-size: 28px;
      color: #333;
      margin-bottom: 30px;
    }
    .section {
      margin-bottom: 30px;
    }
    .section p {
      font-size: 16px;
      color: #555;
      margin-bottom: 10px;
    }
    .links a {
      display: inline-block;
      text-decoration: none;
      color: #fff;
      background-color: #007bff;
      padding: 12px 25px;
      border-radius: 8px;
      margin: 10px;
      font-size: 16px;
      transition: background-color 0.3s, transform 0.2s;
    }
    .links a:hover {
      background-color: #0056b3;
      transform: translateY(-3px);
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="logo">
      <img src="view/img/logob.png" alt="BondhuShoba Logo">
    </div>


    <h1>Welcome to BondhuShoba</h1>


    <div class="section">
      <p>If you already have an account:</p>
      <div class="links">
        <a href="login.php">Login Now</a>
      </div>
    </div>

    <div class="section">
      <p>Don't have an account?</p>
      <div class="links">
        <a href="index.php">Signup</a>
      </div>
    </div>

    <div class="section">
      <p>If you want to contact us:</p>
      <div class="links">
        <a href="view/contact_us_form.html">Contact Us</a>
      </div>
    </div>
  </div>
</body>
</html>
