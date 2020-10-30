<?php
require "header.php";
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <form class="form-signupPage" action="includes/signupPage.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="Email">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button type="submit" name="signupPage-submit">Signup</button>
            </form>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>
