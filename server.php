<?php
    $paragraph = $_POST['paragraph'];
    $badword = $_POST['badword'];
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
            <?php echo $paragraph; ?> <?php echo strlen($paragraph)?>
        </h1>

    </body>
</html>