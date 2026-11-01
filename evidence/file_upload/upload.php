<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo "<pre>";
    // print_r($_FILES);
    
    $file = $_FILES['myfile'];

    $allowType = ['jpg', 'pdf'];
    $fileExt = pathinfo($file['name'], PATHINFO_EXTENSION);

    $status = true;


    if (!in_array($fileExt, $allowType)) {
        echo 'file type not allowed';
        $status = false;
    }
    if ($file['size'] / 1024 > 400) {
        echo 'file is too big';
        $status = false;
    }
    if ($status) {
        move_uploaded_file($file['tmp_name'], "data/{$file['name']}");
    }







    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="submit">
    </form>
</body>

</html>