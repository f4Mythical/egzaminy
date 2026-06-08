<?php
$db = mysqli_connect('localhost', 'root', '', 'bazar');
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zdrowy bazarek</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>Zdrowy bazarek</h1>
    </header>
    <nav>
        <?php
        $q = 'SELECT towar.nazwa, towar.plik
FROM towar
LIMIT 10';
        $mq = mysqli_query($db, $q);
        while ($row = mysqli_fetch_assoc($mq)) {
            echo "<img src='{$row['plik']}' alt='{$row['nazwa']}'>";

        }
        ?>
    </nav>
    <main>
        <aside>
            <img src="market.png" alt="bazarek">
        </aside>
        <section>
            <p>Wybierz owoc lub warzywo i podaj jego wagę:</p>
            <form action="" method="POST">
                <?php
                echo "<select name='opcje'>";
                $q = 'SELECT towar.id,towar.nazwa
FROM towar';
                $mq = mysqli_query($db, $q);
                while ($row = mysqli_fetch_assoc($mq)) {
                    echo "<option value='{$row['id']}'>{$row['nazwa']}</option>";
                }

                echo "</select>";
                ?>
                <input type="number" name="liczba" id="liczba">
                <input type="submit" value="ZAMOW" name="wyslij">
                <?php
                if (isset($_POST['wyslij'])) {
                    $opcje = $_POST['opcje'];
                    $liczba = (float) $_POST['liczba'];
                    $q = "SELECT towar.rodzaj,towar.nazwa,towar.cena
                    FROM towar
                    WHERE towar.id = '$opcje'";
                    $mq = mysqli_query($db, $q);
                    while ($row = mysqli_fetch_assoc($mq)) {
                        $wartosc = $liczba * $row['cena'];
                        echo "<p>{$row['rodzaj']} {$row['nazwa']} wartość: {$wartosc} zł</p>";
                    }
                    $wstaw = "INSERT INTO zamowienie VALUES (null,'$opcje',2,'$liczba')";
                    $wyslij = mysqli_query($db, $wstaw);
                   
                }
mysqli_close($db);

                ?>

            </form>
        </section>
            </main>

        <footer>
            <p>Stronę opracował:00000000</p>
        </footer>
</body>

</html>