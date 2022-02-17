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
                    <li><a href="strLogin.php">Logowanie</a></li>
                    <li><a href="strRegist.php">Rejestracja</a></li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col">
                <h1>Barber</h1>
                <p>Fryzjer męski i barber w Poznaniu z prawdziwego zdarzenia.
                    Jesteśmy zespołem, który stawia na barberów rzemieślników
                    z własnym stylem. Chcemy Cię poznać i zaproponować Ci
                    fryzjerstwo, jakiego dotąd nie znałeś.
                    Wyróżnia nas zaangażowanie i pasja,
                    którą okazujemy każdemu klientowi.
                    Na początku wizyty przeprowadzamy dokładny wywiad,
                    który pozwoli nam lepiej zrozumieć Twój codzienny
                    styl życia. Dzięki temu jesteśmy w stanie dopasować
                    fryzurę oraz strzyżenie brody nie tylko do Twojego
                    kształtu twarzy, ale również do całego życia!
                </p>
            </div>
        </div>

        <?php
        include("footer.php");
        ?>
    </div>
</body>

</html>