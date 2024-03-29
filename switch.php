<!DOCTYPE html>
<html lang="en">
<head>
    <title>SWITCH_CASE</title>
</head>
<body>
    <form method="POST" action="switch.php">
    <h5>press 1 for google</h5>
    <h5>press 2 for youtube</h5>
    <h5>press 3 for instagram</h5>
    <h5>press 4 for github</h5>
    <input type="text" name="option" id="number">
    <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"]))
    {
        $opt=$_POST["option"];
        switch ($opt){
            case "1":
                echo "you selected google so here it is";
                echo '<a href="https://www.google.com/"> click here to visit </a>';
                break;
            case "2":
                echo "you selected youtube so here it is";
                echo '<a href="https://www.youtube.com/"> click here to visit</a>';
                break;
            case "3":
                echo "you selected instagram so here it is";;
                echo '<a href="https://www.instagram.com/"> click here to visit</a>';
                break;
            case "4":
                echo"you selected github so here it is";
                echo '<a href="https://www.github.com/">click here to visit </a>';   
                break;
        }
    }
    ?>
</body>
</html>