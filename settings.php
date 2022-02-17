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
                        <li><a href="user.php">Wróć</a></li>
                        <li><a href="logout.php">Wyloguj sie</a></li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col">
                    <h1>Ustawienia</h1>
                    <br>
                    <br>
                    <form action="changePassword.php" method="post">
                        <h2>Zmień hasło</h2>
                        <br>
                        <input type="text" value=<?= $_SESSION['user'] ?> name="login" readonly />
                        <br>
                        <br>
                        <input type="text" name="password" />
                        <br>
                        <br>
                        <button type="submit">Zamień</button>
                    </form>
                </div>
            </div>

            <?php
            include("footer.php");
            ?>
        </div>
    <?php endif; ?>
</body>

</html>