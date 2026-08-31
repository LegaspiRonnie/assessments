<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = filter_input(INPUT_POST, "n1", FILTER_SANITIZE_NUMBER_FLOAT);
    $n2 = filter_input(INPUT_POST, "n2", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST['operator']);

    // validate
    $hasError = false;
    if (empty($n1) || empty($n2) || empty($operator)) {
        echo "All fields are required";
        $hasError = true;
    }
    if (!$hasError && (!is_numeric($n1) || !is_numeric($n2))) {
        echo "All fields must be a number";
        $hasError = true;
    }

    if (!$hasError) {
        $result = 0;
        switch ($operator) {
            
            case '+':
                $result = $n1 + $n2;
                break;
            case '-':
                $result = $n1 - $n2;
                break;
            case '*':
                $result = $n1 * $n2;
                break;
            case '/':
                $result = $n1 / $n2;
                break;
        }
        echo "Result is " . $result;
    }

    // execution
    
}
    
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="number" name="n1" placeholder="0" required><br>
    <select name="operator" required>
        <option value="">Select operator</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br>
    <input type="number" name="n2" placeholder="0" required><br>
    <button type="submit">Calculate</button>
</form> 