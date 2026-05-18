<?php
$db = mysqli_connect('localhost', 'root', '', 'samochody');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfigurator samochodów</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>Serwis konfiguracji samochodów</h1>
    </header>
    <nav>
        <h2>Samochody</h2>
        <h2>Konfigurator</h2>
        <h2>Kontakt</h2>
    </nav>
    <main>
        <section id="lewy">
            <table>
                <?php
                $q = "SELECT pojazdy.marka,pojazdy.model, pojazdy.cena, kolory.nazwa, kolory.doplata
FROM pojazdy
JOIN kolory ON kolory.id = pojazdy.kolor
WHERE pojazdy.model = 'alfa'";
                $mq = mysqli_query($db, $q);
                while ($row = mysqli_fetch_assoc($mq)) {
                    $cena_cal = $row['cena'] + $row['doplata'];
                    echo "<tr><td>{$row['marka']}</td><td>{$row['model']}</td><td>{$row['nazwa']}</td><td>{$cena_cal}</td> </tr>";
                }
                ?>
            </table>
        </section>
        <section id="srodek">
            <table>
                <tr>
                    <th colspan="2">Konfiguracja</th>
                    <th>Cena</th>
                </tr>
                <tr>
                    <td colspan="3"><img src="a1.jpg" alt="Konfiguracja 1"></td>
                </tr>
                <?php
                $q = "SELECT pojazdy.marka,pojazdy.model,pojazdy.cena
FROM pojazdy
ORDER BY rand()
LIMIT 2";
                $mq = mysqli_query($db,$q);
                $row1 = mysqli_fetch_assoc($mq);
                echo "<tr><td>Marka</td><td>{$row1['marka']}</td><td rowspan='2'>{$row1['cena']}</td></tr>";
                echo "<tr><td>Model</td><td>{$row1['model']}</td></tr>";
                echo "<tr><td colspan=3><img src='a2.jpg' alt='Konfiguracja'></td></tr>";
                 $row2 = mysqli_fetch_assoc($mq);
                echo "<tr><td>Marka</td><td>{$row2['marka']}</td><td rowspan='2'>{$row2['cena']}</td></tr>";
                echo "<tr><td>Model</td><td>{$row2['model']}</td></tr>";
                mysqli_close($db);
                ?>
            </table>

        </section>
        <section id="prawy">
            <h3>111 222 444</h3>
            <img src="a3.png" alt="„Samochód”">
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>

</html>