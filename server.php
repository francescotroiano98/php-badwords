<?php
    $name = $_POST['username'];
    $surname = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Server</title>
    </head>
    <body>

        <h1>
            <?php echo $name; ?> <?php echo $surname; ?> <?php echo strlen($name . $surname)?>
        </h1>

    </body>
</html>