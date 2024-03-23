<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="number" id="number">
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
    $num=$_POST["number"];

    $i=0;
    $j=0;

    for($i=0;$i<=$num;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "</br>";
    }
}
    ?>
</body>
</html>