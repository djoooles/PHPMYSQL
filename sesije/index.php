<?php 
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Index.php</title>
</head>

<body>
    <?php if( isset($_SESSION['ime']) ): ?>
        <p>Pozdrav <?php $_SESSION['ime'] ?></p>
        <a href="prekini_sesiju.php">Prekini Sesiju</a>
    <?php else: ?>
        
    <form action="logika.php" method="post">
        <input type="text" name="ime">
        <button>Zapamti Ime</button>
    </form>

    <?php endif; ?>
    
</body>
</html>