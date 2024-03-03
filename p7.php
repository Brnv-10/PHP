<!DOCTYPE html>
<html lang="en">
<head>
    
</head>

<body>
<h2>sorting of an array</h2>
<form method="post">
    <label for="numbers">numbers separated by commas</label>
    <input type="text" id="numbers" name="numbers" >
    <button type="submit">SORT the numbers </button>
    
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $input=$_POST["numbers"];
    // post method retrives information from the form

    $numbers=explode(",", $input);
    // the explode method will fetch each value from the input string which are separated by commas
    $numbers=array_map("trim",$numbers);

    sort($numbers);

    echo"<p>the sorted array is:" .implode(",", $numbers). "</p>";
}

?>
</body>
</html>