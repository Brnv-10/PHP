<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php
     $color = array('white', 'green', 'red');

     foreach($color as $x){
        echo "$x"," ";
        
     }
     echo "<ul>" ;
     foreach($color as $x){
        echo "<li>" .$x. "</li";
     }
     echo "</ul>";
     

    ?>
    
</body>
</html>