<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?
    family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <?php if (empty($_SESSION['user'])) : ?>
    <?php else : ?>
        <div class="container">
            <div class="navbar">
                <a href="index.php"><img src="logo.png" class="logo"></a>
                <nav>
                    <ul>
                        <li><a href="settings.php">Ustawienia</a></li>
                        <li><a href="logout.php">Wyloguj się</a></li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col">
                    <h1>Rezerwacja</h1>
                    <form action="reservation.php" method="post">
                        <h2>Dzień</h2>
                        <br>
                        <input type="text" name="day" />
                        <br>
                        <h2>Miesiąc</h2>
                        <br>
                        <input type="text" name="month" />
                        <br>
                        <h2>Rok</h2>
                        <br>
                        <input type="text" name="year" />
                        <br>
                        <h2>Nazwisko</h2>
                        <br>
                        <input type="text" value=<?= $_SESSION['user'] ?> name="surname" readonly />
                        <br>
                        <br>
                        <button type="submit">Rezerwacja</button>
                    </form>
                </div>
            </div>
            <div class="footer">
                <div class="address">
                    ADRES
                    <br>
                    <br>
                    ul. Meissnera 2C
                    <br>
                    60-408 Poznań
                </div>
                <div class="contact">
                    KONTAKT
                    <br>
                    <br>
                    123456789
                </div>
            </div>
        </div>
    <?php endif; ?>
</body>

</html>