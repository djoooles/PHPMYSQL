<?php 
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="obradaLogina.php" method="post">
            <input type="text" name="username" placeholder="Unestie Username">
            <input type="password" name="sifra" placeholder="Unesite Sifru">
            <button type="submit">Login</button>
        </form>
    </body>

    </html>