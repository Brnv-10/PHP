<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
   <form method="POST">
    "enter your age"
    <input type="number" name="age" id="number">
    <input type="submit" name="submit" id="submit"> 
   </form>
   <?php
   if($_POST)
   {
    $age=$_POST["age"];
    if($age<30){
        echo "your age is less than 30";
    }
    elseif($age>30 && $age<40){
        echo "you are between 30 and 40";
    }
    elseif($age>=40 && $age<=50){
        echo "your age is between 40 and 50";
    } 
   }

   ?>
</body>
</html>