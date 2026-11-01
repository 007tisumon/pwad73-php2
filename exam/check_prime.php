<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num = $_POST['number'];
        $status = true;
        function prime($num){
            if ($num < 1) {
               
                return false;
            }
            if ($num == 2) {
              return true;

            }
            if ($num % 2 == 0) {
                return false;
            }
            $limit = sqrt($num);
            for ($i = 3; $i < $limit; $i += 2) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        if(prime($num)){
            echo "$num is prime number";
        }else{
            echo "$num is not prime";
        }

    }
    
    ?>

   <form action="" method="post">
     <input type="number" name="number">
     <input type="submit" value="Submit">
   </form>
</body>
</html>