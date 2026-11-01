<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime Number Checker</title>
</head>
<body>

    <h2>Prime Number Checker</h2>
    
    <form action="" method="POST">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required min="1">
        <button type="submit">Check</button>
    </form>

    <?php
    function isPrime(int $num): bool {
        if ($num <= 1) return false;
        if ($num === 2) return true;
        if ($num % 2 === 0) return false;

        $limit = sqrt($num);
        for ($i = 3; $i <= $limit; $i += 2) {
            if ($num % $i === 0) return false;
        }
        return true;
    }

    // Process the form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['number'])) {
        // Sanitize and cast input to an integer
        $inputNum = (int)$_POST['number'];

        if (isPrime($inputNum)) {
            echo "<p style='color: green;'><strong>$inputNum</strong> is a prime number!</p>";
        } else {
            echo "<p style='color: red;'><strong>$inputNum</strong> is not a prime number.</p>";
        }
    }
    ?>

</body>
</html>
