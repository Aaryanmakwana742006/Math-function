<html>
<head>
    <title>Number Conversion</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="number" required>
        <input type="submit" value="Convert">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = $_POST['number'];

        if (is_numeric($number)){
            $decimal = (int)$number;
            $binary = decbin($decimal);
            $octal = decoct($decimal);

            echo "<h2>Conversions:</h2>";
            echo "Decimal: $decimal<br>";
            echo "Binary: $binary<br>";
            echo "Octal: $octal<br>";
}
else
{
            echo "Please enter a valid number.";
}
}
?>
</body>
</html>