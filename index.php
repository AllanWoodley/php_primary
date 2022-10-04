<?php 
$title = "index";
include 'includes/header.php'  ?>
    <!--basic html-->
    <h1> <?php echo $title ?></h1>
    <?php
    //Printing to HTML using echo
        echo " Hello PHP";
        echo "<br/>";
        echo " second line";
    ?>

    <?php
    // declaring variables
    $name = "Allan Woodley";
    $age = 29;
    echo "<br/>";

    //echo variable
    echo "$name";
    echo "<h1> My Name is: ". $name. "</h1>";
    echo "<h1> My age is: ". $age. "</h1>";
    ?>

    <button type="button" class="btn btn-primary"> CLICK ME</button>
    
    <?php  
    require 'includes/footer.php'
    ?>