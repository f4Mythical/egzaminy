<?php
$db = mysqli_connect('localhost', 'root', '', 'choroby');
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wykaz chorob</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>Informacja o chorobach w Polsce</h1>
    </header>
    <nav>
        <a href="https://szpitale.pl/" target="_blank">Szpital</a>
        <a href="https://www.przychodnie.pl/" target="_blank">Przychodnie</a>
        <a href="https://www.nfz.gov.pl/" target="_blank">NFZ</a>
    </nav>
    <main>
    <section id="lewy">
        <h2>Choroby zakazne</h2>
        <ol>
            <?php
            $q = "SELECT choroby.nazwa
FROM choroby
WHERE choroby.zakazna = 'T'
ORDER BY choroby.nazwa";
            $mq = mysqli_query($db, $q);
            while ($row = mysqli_fetch_assoc($mq)) {
                echo "<li>{$row['nazwa']}</li>";
            }
            ?>
        </ol>
    </section>
    <section id="prawy">
        <h2>Objawy chorób</h2>
        <form action="" method="POST">
            <select name="opcje">
                <?php
                $q = "SELECT choroby.id,choroby.nazwa
FROM choroby";
                $mq = mysqli_query($db, $q);
                while ($row = mysqli_fetch_assoc($mq)) {
                    echo "<option value='{$row['id']}'>{$row['nazwa']}</option>";
                }
                ?>
            </select>
            <input type="submit" value="Sprawdź" name="wyslij">
        </form>
        <div id="blok">
            <?php
            if (isset($_POST['wyslij'])) {
                $idElementu = $_POST['opcje'];
                $q = "SELECT objawy.nazwa
FROM objawy
JOIN choroby_objawy ON objawy.id = choroby_objawy.id_objawy
JOIN choroby ON choroby.id = choroby_objawy.id_choroby
WHERE choroby.id = '$idElementu'
";
                $mq = mysqli_query($db, $q);
                while ($row = mysqli_fetch_assoc($mq)) {
                    echo "<span> {$row['nazwa']} </span>";
                }
            }
            ?>
        </div>
    </section>
</main>
    <footer>
        <p>Strone opracował: 000000000</p>
    </footer>
    <img src="zdrowia.png" alt="Życzymy zdrowia!">
</body>

</html>
<?php
mysqli_close($db);
?>