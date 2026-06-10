<?php
$db = mysqli_connect('localhost','root','','zgloszenia');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>ZGŁOSZENIA</title>
</head>
<body>
    <header>
    <h1>Zgłoszenie wydarzen</h1>
    </header>
    <main>
    <section id="lewy">
        <h2>Personel</h2>
        <form action="" method="POST">
            <input type="radio" name="opcje" id="policjant" value="policjant" checked>Policjant
            <input type="radio" name="opcje" id="ratownik" value="ratownik" >Ratownik
                <input type="submit" value="POKAZ" name="wyslij">
                
                
            </form>
            <table>
              
            <?php 
                if(isset($_POST['wyslij'])){
                    $opcja = $_POST['opcje'];
                    
                echo "<h3>Wybrano opcje: {$opcja}</h3>";
                echo  "<tr>";
                echo    "<th>Id</th>";
                 echo   "<th>Imie</th>";
                echo    "<th>Nazwisko</th>";
                echo "</tr>";
                $q = "SELECT personel.id,personel.imie,personel.nazwisko
FROM personel
WHERE personel.status = '$opcja'";
                $mq = mysqli_query($db,$q);
                while($row = mysqli_fetch_assoc($mq)){
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['imie']}</td>";
                echo "<td>{$row['nazwisko']}</td>";
                echo "</tr>";
                }
                }

                ?>
                </table>
    </section>
    <section id="prawy">
        <h2>Nowe zgłoszenia</h2>
        <ol>
        <?php
        $q = "SELECT personel.id,personel.nazwisko
FROM personel
LEFT JOIN  rejestr ON rejestr.id_personel = personel.id
WHERE rejestr.id_personel is null";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<li> {$row['id']} {$row['nazwisko']}";
}
        ?>
        </ol>
        <form action="" method="POST">
        <label for="idOsoby">Wybierz id osoby z listy</label>
        <input type="number" name="idOsoby" id="idOsoby">
        <input type="submit" value="Dodaj zgloszenie" name="wybierz">
        </form>
        <?php 
        if(isset($_POST['wybierz'])){
            $id = $_POST['idOsoby'];
            $q = "INSERT INTO rejestr (data, id_personel, id_pojazd) 
            VALUES (CURDATE(), '$id', 14);";
            $mq = mysqli_query($db,$q);
        }
                   mysqli_close($db);

        ?>
    </section>
    </main>
    <footer>
    <p>Strone wykonał: 00000000</p>
    </footer>
</body>
</html>