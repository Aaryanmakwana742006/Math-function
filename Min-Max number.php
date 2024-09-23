<html>
<head>
    <title>Min and Max Number</title>
</head>
<body>

<form method="post">
    <?php for ($i = 0; $i < 10; $i++):?>
        Number <?php echo $i + 1; ?>: <input type="number" name="numbers[]"><br>
    <?php endfor; ?>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])){
    $numbers = $_POST['numbers'];

    if (count($numbers) == 10){
        $min = min($numbers);
        $max = max($numbers);

        echo "Minimum number: " . $min . "<br>";
        echo "Maximum number: " . $max . "<br>";
    }
    else
    {
        echo "Please enter 10 numbers.";
    }
}
?>
</body>
</html>