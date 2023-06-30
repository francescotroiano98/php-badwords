<?php
    $paragraph = $_POST['paragraph'];
    $badword = $_POST['badword'];
    $singlewordarray = explode(' ', $paragraph);
    var_dump($singlewordarray)
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
        <h2>
        <?php
            foreach ($singlewordarray as $word) {
                if($word === $badword){
                    $word = '***';
                }
                echo $word;
            }
            ?>
        </h2>
    </body>
</html>