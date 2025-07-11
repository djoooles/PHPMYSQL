    <?php  
        require_once "baza.php";

        $rezultat = $baza->query("SELECT * FROM proizvodi");

        $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

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
        <form action="proizvodi.php" method="get">
            <p>Dodaj proizvode</p>
            <input type="text" name="ime" placeholder="Unesite Ime Proizvoda">
            <input type="text" name="opis" placeholder="Unesite Opis Proizvoda">
            <input type="text" name="cena" placeholder="Unesite Cenu Proizvoda">
            <input type="text" name="slika" placeholder="Unesite Sliku Proizvoda">
            <input type="text" name="kolicina" placeholder="Unesite Kolicinu Proizvoda">
            <button>Dodaj Proizvod</button>
        </form>
            <div>
                <a href="profil.php">Glavna</a>

                <?php if(isset($_SESSION['ulogovan'])): ?>
                    <a href="logout.php">Logout</a>
                    <?php else: ?>
                <a href="login.php">Login</a>
                <?php header("Location: login.php") //Hteo sam da dodam ako se klikne na logout da Ne ostanemo na istoj stranici nego da nas vrati na login ?>
                <?php endif; ?>
            </div>

            <?php foreach($proizvodi as $proizvod):?> 
            <div>
                <h1><?= $proizvod['ime']?></h1>
                <p><?= $proizvod['opis']?></p>
                <p>Cena Proizvoda: <?= $proizvod['cena'] ?></p>
                <p>Na stanju: <?= $proizvod['kolicina'] ?></p>
                
                <?php if($proizvod['kolicina'] == 0): ?>
                    <p>Nema na stanju</p>
                <?php else:?>
                <p>Ima na stanju</p>
                <?php endif;?>

                <a href="jedanProizvod.php?id=<?= $proizvod['id'] ?>">Pogledaj proizvod</a>
            </div>
        <?php endforeach;?>
    </body>

    </html>
