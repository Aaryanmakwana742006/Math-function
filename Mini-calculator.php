<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini Calculator</title>
</head>
<body>
    <h2>Mini Calculator</h2>
    <form method="post" action="">
        <input type="text" name="number1" placeholder="Enter first number" required>
        <input type="text" name="number2" placeholder="Enter second number" required>
        <br><br>
        <button type="submit" name="operation" value="add">+</button>
        <button type="submit" name="operation" value="subtract">-</button>
        <button type="submit" name="operation" value="multiply">*</button>
        <button type="submit" name="operation" value="divide">/</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];
        $result = '';

        if (is_numeric($number1) && is_numeric($number2)) {
            switch ($operation) {
                case 'add':
                    $result = $number1 + $number2;
                    break;
                case 'subtract':
                    $result = $number1 - $number2;
                    break;
                case 'multiply':
                    $result = $number1 * $number2;
                    break;
                case 'divide':
                    if ($number2 != 0){
                        $result = $number1 / $number2;
                    }
                    else
                    {
                        $result = 'Division by zero error!';
                    }
                    break;
                default:
                    $result = 'Invalid operation!';
                    break;
            }
            echo "<h3>Result: $result</h3>";
        }
        else
        {
            echo "<h3>Please enter valid numbers</h3>";
        }
    }
    ?>
</body>
</html>