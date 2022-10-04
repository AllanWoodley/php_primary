<?php 
$title = "While do wile loops";
include 'includes/header.php'  ?>
    <h1> <?php echo $title ?></h1>
    <?php 
        $grade = 0;
        //pre-conditioned loop
        while($grade <10){
            echo '<p> I am less than 10!</p>';
            $grade++;
        }
        echo 'EXIT LOOP';
    ?>
       
    <h1> DO-While loop</h1>
    <?php
        $grade = 0;
        //post condition loop
        do{
            echo '<p>I am  DO WHILE LOOP</p>';
            $grade++;
        }while($grade<10);
        echo 'EXIT LOOP';
    ?>

<?php  
    require 'includes/footer.php'
    ?>