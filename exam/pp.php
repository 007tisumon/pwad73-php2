<!DOCTYPE html>
<html>

<body>

    <h3> Check Prime Number </h3>

    <form method="POST">
        Enter a Number:
        <input type="number" name="num" required><br><br>
        <button type="submit" name="submit">Check</button>
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $num = (int) $_POST['num'];
        $count = 0;

        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $count++;
            }
        }





        if ($count == 2) {
            echo "$num is a prime Number";

        } else {
            echo "$num is not a prime number";
        }
    }


    ?>




</body>

</html>