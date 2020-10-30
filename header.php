<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="User SignIn"
          <meta name=viewport content="width = device-width, initial-scale=1">
    <title>User Login</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>

<header>
    <nav>
        <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
            <imp src="Images/earthLogo.png" alt="logo" width="200" align="left"></imp>
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Extra</a></li>
            <li><a href="#">Extra2</a></li>
        </ul>
        </nav>
        <div class="header-login">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signupPage.php">Signup</a>
            <form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
    </nav>
</header>


</body>
</html>



