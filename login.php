<?php
    include_once 'header.php'
?>


<h1 style="text-align:center;">Login</h1>
<div class="container col-6" style="margin-top:30px;">
    <div class="bg-dark text-center p-5 wow fadeIn" data-wow-delay="0.5s">
        <form action="includes/login.inc.php" method="post">
            <div class="row g-3">
                <div class="col-12">
                    <input type="text" class="form-control border-0" name = "uid" placeholder="Your Username/Email" style="height: 55px;">
                </div>
                <div class="col-12">
                    <input type="password" class="form-control border-0" name="password" placeholder="Your password" style="height: 55px;">
                </div>
                    <button class="btn btn-primary w-50 py-3" name="submit" type="submit">Login</button>
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
    else if ($_GET["error"] == "wronglogin") {
        echo "<h4>Incorrect login details!</h4>";
    }
}
?>
</div>



<?php
    include_once 'footer.php'
?>