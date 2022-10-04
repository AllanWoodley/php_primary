<?php 
$title = "If Statements";
include 'includes/header.php'  ?>
    <?php 
    //if statements
    echo "<h2> If Statement</h2>";
    $grade = 50;

    if($grade >= 50){
        echo "<h3 style ='color:green'> You have passed</h3>";
       // html code for color..... <h3 style = "color: red"></h3>;
    }else {
        echo '<h3 style ="color:red">You have failed</h3>';
    }
    $grade = "A";
    //If-Else IF-Else
    if($grade =='A'){
        echo '<h2> You are a SUPERSTAR!</h2>';
    }
    elseif($grade == 'B'){
        echo '<h2>You did well</h2>'; 
    }
    else{
        echo '<h2>You have failed...</h2>';
    }
    ?>
<?php  
    require 'includes/footer.php'
    ?>