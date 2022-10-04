<?php 
$title = "Date and time manipulation";
include 'includes/header.php'  ?>
    <h1><?php echo $title ?></h1>
    <?php
        $datenow = getdate();
        echo "Todays Date: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "Todays date: " . $datenow['mon'] . '/' . $datenow['mday'] . '/' . $datenow['year'];
        echo '<br/>';
        echo time() . '<br/>';

        print date("m/d/y G.i:<br/>",time()) . "<br/>";
        
    ?>
<?php  
    require 'includes/footer.php'
    ?>