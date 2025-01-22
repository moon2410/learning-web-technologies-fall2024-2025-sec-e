<?php 
  session_start();
  include_once "model/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
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
      <section class="users">
        <header>
          <div class="content">
            <?php 
              $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
              if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
              }
            ?>
            <img src="controller/images/<?php echo $row['img']; ?>" alt="">
            <div class="details">
              <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
              <p><?php echo $row['status']; ?></p>
            </div>
          </div>
          <a href="controller/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
          
        
        </header>
        <div class="search">
          <span class="text">Select an user to start chat</span>
          <input type="text" placeholder="Enter name to search...">
          <button><i class="srch">search</i></button>
        </div>
        <div class="users-list">
    
        </div>
      </section>
    </div>

    <script src="javascript/users.js"></script>

  </body>
</html>
