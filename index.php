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
    <div class="main-wrap">
        <div class="container">
            <div class="heading">
                <h2>Login</h2>
            </div>
            <div class="login-form">
                <form action="./includes/login.inc.php" method="POST">
                    <input type="text" name="user" id="user" placeholder="Pick a username"><br>
                    <input type="submit" name="submit_user" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>