<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form  method="post">
    <input type="text" name="email" id="" placeholder="Enter eamil">
    <input type="password" name="password" placeholder="Enter Password" id="">
    <input type="submit" value="Submit">
</form>



<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo $email;

    if (!empty($email) || !empty($password)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'email not valid';
        } else {
            echo "Valid email and password logn success";
        }


    }
}



?>
</body>
</html>