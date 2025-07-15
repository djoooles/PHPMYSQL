<?php
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    if(!isset($_SESSION['ulogovan']))
    {
        die("Morate biti ulogovani da bi vidlelo ovu stranicu");
    }
    require_once "modeli/baza.php";
    $userId = $_SESSION['user_id'];
    
    $rezultat = $baza->query("SELECT 
    narudzbine.kolicina, narudzbine.cena, proizvodi.ime 
    FROM narudzbine
    INNER JOIN proizvodi ON proizvodi.id = narudzbine.id_proizvoda
    WHERE narudzbine.id_korisnika = $userId");
    
    $narudzbine = $rezultat->fetch_all(MYSQLI_ASSOC);

    $proizvodi = $baza->query("SELECT * FROM proizvodi");

    $proizvod = $proizvodi->fetch_all(MYSQLI_ASSOC);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($rezultat->num_rows == 0): ?>
    <h1>Nemate nijedan proizvod</h1>
    <?php else: ?>
        <?php foreach($narudzbine as $narudzbina):?> 
            <div>
                <p>Proizvod: <?= $narudzbina['ime']?></p>
                <p>Kolicina: <?php echo $narudzbina['kolicina'];?></p>
                <p>Cena: <?php echo $narudzbina['cena'];?></p>
            </div>
        <?php endforeach;?>
    <?php endif; ?>
</body>
</html>