<?php
session_start();
if(!isset($_SESSION["user"])){
    header('location: index.php');
    exit();
}else{
    $username = $_SESSION["user"];
}
require("./includes/db.inc.php");
$query = "SELECT * FROM chats ORDER BY time desc;";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>ChatBox</title>
</head>
<body>
    <div class="notice"><marquee>You need to refresh manually to check for new messages</marquee></div>
    <div class="main-wrap">
        <div class="container">
            <div class="heading">
                <h2>ChatBox!</h2>

            </div>
            <div class="messages">
                <ul class="chats">
                    <?php while($row = mysqli_fetch_assoc($result)):   ?>
                    <li class="chat"><span class="time"><?php echo $row["time"] ?> - </span><strong><?php echo $row["user"] ?>: </strong><br><?php echo htmlspecialchars($row["message"]) ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="login-form">
                <form action="./includes/send.inc.php" method="POST">
                    <span class="helper"><?php echo $username.':' ?></span><br>
                    <input type="text" name="message" placeholder="Type a message">
                    <input type="submit" name="submit_message" value="Submit">
                    <a href="./includes/logout.inc.php">Change User</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>