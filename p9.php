// write a php script to find the sum of first n odd numbers

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of First n Odd Numbers</title>
</head>
<body>

<form method="post">
    <label for="n">Enter the value of n:</label>
    <input type="number" id="n" name="n" min="1">
    <button type="submit">Calculate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];

    function sumOfNnos($n) {
        $sum = 0;
        $num = 1; // Start with the first odd number

        for ($i = 0; $i < $n; $i++) {
            $sum += $num; // Add the current odd number to the sum
            $num += 2; // Move to the next odd number
        }

        return $sum;
    }

    $sum = sumOfNnos($n);
    echo "<p>Sum of the first $n odd numbers is: $sum</p>";
}
?>

</body>
</html>
