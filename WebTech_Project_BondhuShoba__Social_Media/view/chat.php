<?php 
session_start();
include_once "model/config.php";

if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}

$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);


$logged_in_user_id = $_SESSION['unique_id'];
$update_query = "UPDATE messages SET is_read = 1 WHERE incoming_msg_id = {$logged_in_user_id} AND outgoing_msg_id = {$user_id} AND is_read = 0";
mysqli_query($conn, $update_query);


$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
}else{
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
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: ../users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="bcki">Back</i></a>
        <img src="controller/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">
      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        
          <div class="emoji-dropdown">
          <select id="emojiSelect">
            <option value="😀">😀</option>
            <option value="😂">😂</option>
            <option value="😍">😍</option>
            <option value="😢">😢</option>
            <option value="👍">👍</option>
            <option value="❤️">❤️</option>
            <option value="🎉">🎉</option>
          </select>
        </div>
        
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        
        <button><i class="snd">send</i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>
  
  <script>
    document.getElementById("emojiSelect").addEventListener("change", function() {
      const emoji = this.value;
      const messageField = document.querySelector(".input-field");
      messageField.value += emoji;  
    });
  </script>

</body>
</html>
