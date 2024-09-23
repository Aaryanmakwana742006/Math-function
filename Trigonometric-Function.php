<html>
<head>
    <title>Trigonometric Functions</title>
</head>
<body>
    <h1>Enter a Number</h1>
    <form method="post">
        <label for="number">Number:</label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = floatval($_POST["number"]);
        $radians = deg2rad($number);

        $sin = sin($radians);
        $cos = cos($radians);
        $tan = tan($radians);

        echo "<h2>Results:</h2>";
        echo "sin($number) = $sin<br>";
        echo "cos($number) = $cos<br>";
        echo "tan($number) = $tan<br>";
    }
    ?>
</body>
</html>