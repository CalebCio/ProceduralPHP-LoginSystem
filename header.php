<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
    <nav class="nav-header-main">
        <a class="header-logo" href="#">
            <img src="images/favicon.png" alt="logo">
        </a>

        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">PORFOLIO</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>

        <div class="header-login">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">LOGOUT</button>
                </form>';
                }
                else {
                    echo '<form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">LOGIN</button>
                </form>
    
                <a href="signup.php">SIGNUP</a>';
                }
            ?>
            

            
        </div>
    </nav>
</header>