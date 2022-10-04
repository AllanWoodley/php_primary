<?php 
$title = "ARRAYS and printouts";
include 'includes/header.php' 
 ?>
    <h1><?php echo $title ?></h1>
    <?php 
        // a variable
        $num = 3;

        // an array NB. Only 1 datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,99,100);
        // accessing an array value using the index
        echo $numbers[5];
        
        echo "<p>$numbers[11]</p>";

        $size = count($numbers);
        echo "<p>Array numbers is size $size</p>";

        for($count = 0; $count < $size; $count ++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
<?php  
    require 'includes/footer.php'
    ?>