<?php
include_once 'header.php';
?>

    <section class="">
        <h2>Log In</h2>
        <div class="pt-5">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Log In</button>

</form>
</div>
<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyimput") {
    echo "<p>Fill in all fields!</p>";
    }
    elseif ($_GET["error"] == "wronglogin") {
    echo "<p>Incorrect login information!</p>";
    }
}
?>
    </section>




    <?php
include_once 'footer.php';
?>