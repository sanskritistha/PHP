
<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>
<form method="post" action="">
    <input type="number"   value=num1 name="num1"  >
    <input type="number"  value=num2 name="num2" >
    <select name="operation">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if(isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    
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
            if($num2 != 0)
                $result = $num1 / $num2;
            else
                $result = "Cannot divide by zero!";
            break;
        default:
            $result = "Invalid operation";
    }
    
    echo "Result: $result";
}
?>

</body>
</html>

