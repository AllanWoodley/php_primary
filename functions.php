<?php include 'includes/header.php'  ?>
    <h1>Functions<h1/>
    <?php 
        //Defining a function
        function writeMessage(){
            echo "You are a really nice person have a nice time <br/>";
        }
            writeMessage();
            echo "<hr/>";

            //Functions with parameters
            function addFunction($num1,$num2){
                $sum = $num1 + $num2;
                echo "The sum of $num1 and $num2 is: $sum <br/>";
            }

            function changeNum($num){
                $num += 10;
            }

            function returnProduct($num1, $num2){
                $prod = $num1* $num2;
                return $prod;
            }

            $num = 12;
            addFunction(10,20);
            addFunction($num,20);

            changeNum($num);
            echo $num . '<br/>';

            $return_value = returnProduct(10,200);
            echo $return_value . '<br/>';
        

    ?>
<?php  
    require 'includes/footer.php'
    ?>