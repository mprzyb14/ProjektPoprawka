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

    <style>
        table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 25px;
            min-width: 400px;
            padding: 12px 15px;
        }

        table th {
            background-color: #fff;
            color: black;
            text-align: left;
            font-weight: bold;
        }

        table td {
            color: #fff;
            text-align: left;
        }

        a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="index.php"><img src="logo.png" class="logo"></a>
            <nav>
                <ul>
                    <li><a href="logout.php">Wyloguj się</a></li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col">
                <h1>Rezerwacje</h1>
                <?php
                $connect = mysqli_connect('localhost', 'root', '', 'test');
                if ($connect) {
                } else {
                    die('Błąd połączenia z bazą danych');
                }

                $sql = 'SELECT * FROM reserv;';
                $result = mysqli_query($connect, $sql);
                $rowCount = mysqli_num_rows($result);
                echo '<br><center><table>
	            <tr>
	            <th>Dzień</th>
	            <th>Miesiąc</th>
	            <th>Rok</th>	
	            <th>Nazwisko</th>	
	            </tr>';

                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['day'] . "</td>";
                        echo "<td>" . $row['month'] . "</td>";
                        echo "<td>" . $row['year'] . "</td>";
                        echo "<td>" . $row['surname'] . "</td>";
                        $surname = $row['surname'];
                ?>
                        <td>
                            <form action='delete.php' method='post'>
                                <input type='hidden' name='surname' value='<?= $row['surname'] ?>' readonly />
                                <button type='submit'>Usuń</button>
                            </form>
                        </td>
                <?php
                        echo "</form></td>";
                        echo "</tr>";
                    }
                } else echo 'No results found.';

                echo "</table><center>";


                mysqli_close($connect);
                ?>
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
</body>

</html>