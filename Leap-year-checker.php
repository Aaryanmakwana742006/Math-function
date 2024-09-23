<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
<form method="post">
    Enter a year: <input type="text" name="year">
    <input type="submit" value="Check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $year = $_POST['year'];
    
    if (is_numeric($year)){
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)){
            echo "<p>$year is a leap year.</p>";
        }
        else
        {
            echo "<p>$year is not a leap year.</p>";
        }
    }
    else
    {
        echo "<p>Please enter a valid number.</p>";
    }
}
?>
</body>
</html>