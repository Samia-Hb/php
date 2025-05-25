<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <form method="POST">
            <label for="operand1">Operand 1 :</label>
            <input type="text" name="Operand1" required><br>

            <label for="operand2">Operand 2 :</label>
            <input type="text" name="Operand2" required><br>

            <select name="Operation">
                <option value="Add">Add</option>
                <option value="Sub">Sub</option>
                <option value="Div">Div</option>
                <option value="Mul">Mul</option>
            </select> <br>

            <input type="submit" name="submit">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $First_number = floatval($_POST['Operand1']);
                $Second_number = floatval($_POST['Operand2']);
                $Operation = $_POST['Operation'];
                switch($Operation)
                {
                    case 'Add':
                        $Result = $First_number + $Second_number;
                        break;
                    case 'Sub':
                        $Result = $First_number - $Second_number;
                        break;
                    case 'Mul':
                        $Result = $First_number * $Second_number;
                        break;
                    case 'Div':
                        if ($Second_number != 0) {
                            $Result = $First_number / $Second_number;
                        } else {
                            $Result = "Error: Division by zero!";
                        }
                        break;
                }
                if (isset($_POST['submit']))
                {
                    echo "Result = " . $Result . "<br>";
                }
            }
        ?>
    </body>
</html>