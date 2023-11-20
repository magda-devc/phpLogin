<?php
    include_once 'header.php'
?>

<h1 style="text-align:center;">Sign up</h1>
<div class="container" style="margin-top:30px;">
    <div class="bg-dark text-center p-5 wow fadeIn" data-wow-delay="0.5s">
        <form action="includes/signup.inc.php" method="post">
            <div class="row g-3">
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control border-0" name = "name" placeholder="Your Full Name" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="password" class="form-control border-0" name="password" placeholder="Your password" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="email" class="form-control border-0" name="email" placeholder="Your Email" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="password" class="form-control border-0" name="passwordRepeat" placeholder="Confirm password" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control border-0" name = "userid" placeholder="Your Username" style="height: 55px;">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Sign up</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<h4>Fill in all fields!</h4>";
    }
    else if ($_GET["error"] == "invaliduserid") {
        echo "<h4>Invalid username!</h4>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<h4>Invalid email!</h4>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<h4>Passwords don't match!</h4>";
    }
    else if ($_GET["error"] == "stmtfailed") {
        echo "<h4>Something went wrong. Try again!</h4>";
    }
    else if ($_GET["error"] == "usernamenotavailable") {
        echo "<h4>Username or email already taken!</h4>";
    }
    else if ($_GET["error"] == "none") {
        echo "<h4>Signed up successfully! <br> Login to continue. </h4>";
    }
}
?>
</div>


<?php
    include_once 'footer.php'
?>