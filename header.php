<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="User SignIn"
          <meta name=viewport content="width = device-width, initial-scale=1">
    <title>User Login</title>
    <link rel="stylesheet" href="loginStyle.css"/>
</head>
<body>

<header >
    <nav  class="nav-header-main">
        <nav>
        <a class="header-logo" href="C:\xampp\htdocs\teamtrackerreport\index.php">
            <imp class="header-logo" src="Images/earthLogo.jpg" alt="logo" width="200" align="left">
        </a>
        <ul>
            <li><a href="header.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Extra</a></li>
                <li><a href="#">Extra2</a></li>

        </ul>
        </nav>
        <div class="header-login">
            <a href="signupPage.php">Signup</a><br><br><br><br>
            <form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
                <br><br><br>
            </form>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button><br><br>
            </form>

        </div>
    </nav>
</header>

<section>
    <img class="section-logo" src="Images/Antarctica.png">
</section>
<hr>
</body>
</html>



