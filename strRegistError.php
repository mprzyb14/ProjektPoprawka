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
    <div class="container">
        <div class="navbar">
            <a href="index.php"><img src="logo.png" class="logo"></a>
            <nav>
                <ul>
                    <li><a href="index.php">Główna Strona</a></li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col">
                <h1>Rejestracja</h1>
                <br>
                <br>
                <section>Błędny login lub hasło
                    <br>
                    (Hasło minimum 8 znaków)
                </section>
                <br>
                <form action="regist.php" method="post">
                    <h2>Login</h2>
                    <br>
                    <input type="text" name="login" />
                    <br>
                    <br>
                    <h2>Hasło</h2>
                    <br>
                    <input type="password" name="password" />
                    <br>
                    <button type="submit">Rejestracja</button>
                </form>
            </div>
        </div>

        <?php
        include("footer.php");
        ?>
    </div>
</body>

</html>