<?php
include_once 'header.php';
?>

    <section class="index-intro">
    <?php
            if (isset($_SESSION["useruid"])) {
              echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
            }
            ?>
        <h1>Introduction to PHP</h1>
        <p>PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page,but it now stands for the recursive initialism PHP: Hypertext Preprocessor.</p>

    </section>

    <section class="index-categories">
        <h2>Some Basic Categories</h2>
        <div class="index-categories-list">
            <div>
                <h3>Fun Stuff</h3>
            </div>
            <div>
                <h3>Serious Stuff</h3>
            </div>
            <div>
                <h3>Exciting Stuff</h3>
            </div>
            <div>
                <h3>Boring Stuff</h3>
            </div>
        </div>
    </section>


    <?php
include_once 'footer.php';
?>
