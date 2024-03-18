<!DOCTYPE html>

<head>
  <title>Fibonacci Series Calculator</title>
</head>
<body>
    <h1>Fibonacci Series Calculator</h1>
    <form method="post" action="($_SERVER["p17.php"]> 
        <input type="number" id="terms" name="terms" 
        <input type="submit" value=" generate fibonacci series">
    </form>
    <hr>
    <h2>Fibonacci Series</h2>
    <p>
        <?php
        function fibonacci($n) {
            if ($n == 0)
                return 0;
            elseif ($n == 1)
                return 1;
            else
                return (fibonacci($n - 1) + fibonacci($n - 2));
        }

        if (isset($_POST["submit"])) {
            $terms = $_POST["terms"];
            echo "Fibonacci series of $terms terms:<br>";
            for ($i = 0; $i < $terms; $i++) {
                echo fibonacci($i) . " ";
            }
        }
        ?>
    </p>
</body>
</html>
