<?php
$db = mysqli_connect("localhost", "root", "", "smoki");
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoki</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h2>Poznaj smoki!</h2>
    </header>
    <div id="kontener">
        <nav>
            <div id="blok1" onclick="pokazBloki(1)">Baza</div>
            <div id="blok2" onclick="pokazBloki(2)">Opisy</div>
            <div id="blok3" onclick="pokazBloki(3)">Galeria</div>
        </nav>
        <main>
            <section id="sekcja1">
                <h3>Baza Smoków</h3>
                <form action="" method="post">
                    <select name="opcje">
                        <?php
                        $q = "SELECT DISTINCT smok.pochodzenie
FROM smok
ORDER BY smok.pochodzenie ";

                        $mq = mysqli_query($db, $q);
                        while ($row = mysqli_fetch_assoc($mq)) {
                            echo '<option value=' . $row['pochodzenie'] . ' >' . $row['pochodzenie'] . '</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" value="Szukaj" name="szukaj">
                    <?php
                    
                    if (isset($_POST['szukaj'])) {
                        $pochodzenie = $_POST['opcje'];
                        $q = "SELECT smok.nazwa,smok.dlugosc,smok.szerokosc
                    FROM smok
                    WHERE smok.pochodzenie = '$pochodzenie'";
                        $mq = mysqli_query($db, $q);


                        echo '<table>';
                        echo '<tr><th>Nazwa</th><th>Długość</th><th>Szerokość</th></tr>';

                        while ($row = mysqli_fetch_assoc($mq)) {
                            echo '<tr>';
                            echo '<td>' . $row['nazwa'] . '</td>';
                            echo '<td>' . $row['dlugosc'] . '</td>';
                            echo '<td>' . $row['szerokosc'] . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                    }
                    ?>

                </form>
            </section>
            <section id="sekcja2">
                <h3>Opisy smoków</h3>
                <dl>
                    <dt>Smok czerwony</dt>
                    <dd>Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach
                        wschodnich do wyrabiania lekarstw. Jest dziki i groźny.</dd>

                    <dt>Smok zielony</dt>
                    <dd>Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze
                        zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały.</dd>

                    <dt>Smok niebieski</dt>
                    <dd>Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych
                        malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak
                        próżny i nie lubi się przepracowywać.</dd>
                </dl>
            </section>
            <section id="sekcja3">
                <h3>Galeria</h3>
                <img src="smok1.JPG" alt="Smok czerwony">
                <img src="smok2.jpg" alt="Smok wielki">
                <img src="smok3.jpg" alt="Skrzydlaty łaciaty">
                

            </section>
        </main>
    </div>
    <footer>
Stronę wykonał: 000000000000
    </footer>
    <script>
        function pokazBloki(numer) {
            const blok1 = document.getElementById("blok1");
            const blok2 = document.getElementById("blok2");
            const blok3 = document.getElementById("blok3");
            const sekcja1 = document.getElementById("sekcja1");
            const sekcja2 = document.getElementById("sekcja2");
            const sekcja3 = document.getElementById("sekcja3");
            blok1.style.backgroundColor = "#FFAEA5";
            blok2.style.backgroundColor = "#FFAEA5";
            blok3.style.backgroundColor = "#FFAEA5";

            if (numer === 1) {
                blok1.style.backgroundColor = "MistyRose";
                sekcja1.style.display = "block";
                sekcja2.style.display = "none";
                sekcja3.style.display = "none";
            } else if (numer === 2) {
                blok2.style.backgroundColor = "MistyRose";
                sekcja2.style.display = "block";
                sekcja1.style.display = "none";
                sekcja3.style.display = "none";
            } else if (numer === 3) {
                blok3.style.backgroundColor = "MistyRose";
                sekcja3.style.display = "block";
                sekcja2.style.display = "none";
                sekcja1.style.display = "none";
            }
        }
    </script>
</body>

</html>
