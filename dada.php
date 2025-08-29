<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        First Number: <input type="number" step="any" name="num1" required><br><br>
        Second Number: <input type="number" step="any" name="num2" required><br><br>
        Operation:
        <select name="operation" required>
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (-)</option>
            <option value="multiply">Multiply (&times;)</option>
            <option value="divide">Divide (&divide;)</option>
        </select><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = "";

        switch($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if($num2 == 0) {
                    $result = "Cannot divide by zero!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Invalid Operation";
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
