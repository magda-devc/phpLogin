<?php
include_once 'header.php'
?>
<div class="container">
<?php
if (isset($_SESSION["useruid"])) {
    echo "<h2>Hello, " . $_SESSION["useruid"] . "</h2>";
}
?>
</div>
<div class="container row">
    <div class="col-sm-6">
        <p>Community funds is all about 'chama' and saving money. <br>
        Your contributions made this month to the charity basket is Ksh.2000. <br>
        Grow profits with your money by buying bonds in the community bank.</p>
    </div>
    <div class="col-sm-6">
        <img src="images/flaticon.png" alt="">
    </div>
</div>



<?php
include_once 'footer.php'
?>