<?php 
$title = "String manipulation";
include 'includes/header.php'  ?>
    <h1> <?php echo $title ?></h1>
    <?php 
        //concatenation of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "allan woodley";
        echo $phrase1 .", named Tiffany, ". $phrase2;

        echo '<hr/>';
        //string transformation
        echo '<p>Uppercase first letter: ' . ucfirst($name).'<br/></p>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Upper case:  ' . strtoupper($name).'<br/>';
        echo 'Lower case:  ' . strtolower("THIS WAS ALL UPPERCASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('PHP-',10) . '<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('html-',10)) . '<br/>';
        echo 'Get a Substring: ' . substr($name,6,12).'<br/>';
       
        echo 'Get position of string: ' . strpos($name,'w') . '<br/>';
        //returns NULL
        
        echo 'Find Character "L": ' . strchr($name,'w') . '<br/>';
        echo 'Find length of a string: ' . strlen($name) . '<br/>';
        echo 'Without trim: ' . "A" . "B C D" . " E " . '<br/>';
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D "). " E " . '<br/>';
        echo 'Trim spaces on left sides: ' . "A" . ltrim(" B C D ") . " E " . '<br/>';
        echo 'Trim spaces on right sides: ' . "A" . rtrim(" B C D ") . " E " . '<br/>';

        echo 'Replace string with another: ' . str_replace("stand","sit", $phrase2) . '<br/>';
    ?>
<?php  
    require 'includes/footer.php'
    ?>