<!DOCTYPE html>
<html lang="en">
<head>
    
</head>

<body>
<h2>program to find greatest of the values</h2>
<form>
    <form method="post">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="number" name="num3">
    <button type="submit">calculate the value</button>
</form>
<?php
if(isset($_POST["submit"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];

   if($num1>$num2 && $num1>$num3){
     echo "<h3>the greatest integer is" $num1 "</h3>";
   }
   if($num2>$num1 && $num2>$num3){
     echo "<h3>the greatest integer is" $num2 "</h3>";
   }
   else{
     echo "<h3>the greatest integer is" $num3 "</h3>";
   }
    
}
?>
</body>
</html>