<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkolenia i kursy</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>SZKOLENIA</h1>
    </header>

    <main>
        <section id="lewy">
            <!-- <table>
                <tr> <th>Kurs</th>
                    <th>Nazwa</th>
                    <th>Cena</th>
                </tr>
                </table> -->
            <!--skrypt1-->
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'szkolenia');
            $q = '  SELECT kursy.kod, kursy.nazwa, kursy.cena 
                        FROM kursy
                        ORDER BY kursy.cena asc';
            $mq = mysqli_query($db, $q);
            echo '<table>';
            echo '<tr>';
            echo '<th>Kurs</th>';
            echo '<th>Nazwa</th>';
            echo '<th>Cena</th>';
            echo '</tr>';
            while ($row = mysqli_fetch_assoc($mq)) {
                echo '<tr>';
                echo '<td><img src="' . $row['kod'] . '.jpg" alt="kurs"></td>';
                echo '<td>' . $row['nazwa'] . '</td>';
                echo '<td>' . $row['cena'] . '</td>';
                echo '</tr>';

            }
            echo '</table>';
            ?>
        </section>

        <section id="right">
            <h2>Zapisy na kursy</h2>
            <form action="" method="POST"> <label for="imie">Imie</label>
                <input type="text" name="imie" id="imie"><br> <label for="nazwisko">Nazwisko</label>
                <input type="text" name="nazwisko" id="nazwisko"><br>

                <label for="wiek">Wiek</label>
                <input type="number" name="wiek" id="wiek"><br>

                <label for="opcje">Rodzaj kursu</label>
                <select id="opcje" name="opcje">
                    <!---skrypt2-->
                    <?php
                    $q = 'SELECT kursy.nazwa
FROM kursy';
                    $mq = mysqli_query($db, $q);
                    while($row = mysqli_fetch_assoc($mq)){
                        echo '<option>'. $row['nazwa'] . '</option>';

                    }

                    ?>
                </select><br>

                <input type="submit" value="Dodane dane" name="wyslij" id="wyslij">
                <!--skrypt3-->
                <?php 
                if(isset($_POST['wyslij']) && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['wiek'])){
                    $imie = $_POST['imie'];
                    $nazwisko = $_POST['nazwisko'];
                    $wiek = $_POST['wiek'];
                    $q = "INSERT INTO uczestnicy (imie, nazwisko, wiek) 
                       VALUES ('$imie', '$nazwisko', '$wiek')";
                    $mq = mysqli_query($db, $q);
                   echo '<br>Dane uczestnika ' . $imie . " " . $nazwisko . ' zostały dodane';
                }
                else {
                    echo '<p>Wprowadź wszystkie dane</p>';
                }
                ?>
            </form>
        </section>
    </main>

    <footer>
        <p>Strone wykonał: 00000000</p>
    </footer>
</body>

</html>