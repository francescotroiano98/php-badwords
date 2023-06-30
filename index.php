<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php</title>
    </head>
    <body>

        <!--  ACTION : destinatario dei miei dati del form -->
        <!--  Il metodo usato per passare i dati : destinatario dei miei dati del form -->

        <form action="./server.php" method="POST">
            <input type="text" placeholder='paragraph' name="paragraph">
            <input type="text" placeholder='badword' name="badword">

            <button type="submit">
                Invia il form
            </button>
        </form>
    </body>
</html>