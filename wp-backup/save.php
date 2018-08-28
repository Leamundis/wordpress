<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Backup</title>
    </head>
    <body>
        <h1>Sauvegarde du site</h1>    

        <form action="./actionController/saveAction.php" method=POST>
            <p>Nom de la base de donnée : </p>
            <input type="text" name="db" value="wordpress">
            <input type="submit" value="Ok">
        </form> 
    </body>
</html>