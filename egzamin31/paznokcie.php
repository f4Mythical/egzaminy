<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylizacja paznokci</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <aside>
        <img src="manicure.jpg" alt="Stylizacja
paznokci">
    </aside>
    <main>
        <header>
            <h1>Twoje wymarzone paznokcie</h1>
        </header>
        <nav>
            <button type="button" onmouseenter="zmiana(1)" id="kolor">Kolor</button>
            <button type="button" onmouseenter="zmiana(2)" id="ksztalt">Kształt</button>
            <button type="button" onmouseenter="zmiana(3)" id="wzor">Wzór</button>
        </nav>
        <section id="sekcja1">
        <h2>Kolor</h2>
        <img src="kolory.png" alt="Kolory paznocki"><br>
        <input type="color" name="kolor" id="kolor" value="#FF0000" >
        </section>
        <section id="sekcja2">
        <h2>Kształt</h2>
        <img src="ksztalt.png" alt="Ksztalty paznocki"><br>
        <select name="rodzaj">
            <option value="migdał">migdał</option>
            <option value="zaokrąglony">zaokrąglony</option>
            <option value="kwadratowy">kwadratowy</option>
            <option value="balerina">balerina</option>
            <option value="zaokrąglony_kwadrat">zaokrąglony kwadrat</option>

        </select>
        </section>
        <section id="sekcja3">
            <h2>Wzór</h2>
            <?php 
            for($i =1; $i<=10; $i++){
            echo "<img src='{$i}.jpg' class='wzory' title='{$i}'>";
            }
            echo "<br>";
            ?>
            <input type="number" name="liczby" id="liczby" min="0" max="10">
        </section>
    </main>
    <footer>
<p>Autor strony: <em>00000</em></p>
    </footer>
    <script>
        function zmiana(zmienna) {
            let kolor = document.getElementById("kolor");
            let ksztalt = document.getElementById("ksztalt");
            let wzor = document.getElementById("wzor");
            let sekcja1 = document.getElementById("sekcja1");
            let sekcja2 = document.getElementById("sekcja2");
            let sekcja3 = document.getElementById("sekcja3");
            if (zmienna == 1) {
                sekcja1.style.display = "block";
                sekcja2.style.display = "none";
                sekcja3.style.display = "none";


                kolor.style.backgroundColor = "Salmon";
                ksztalt.style.backgroundColor = "Crimson";
                wzor.style.backgroundColor = "Crimson";
            }
            else if (zmienna == 2) {
                sekcja1.style.display = "none";
                sekcja2.style.display = "block";
                sekcja3.style.display = "none";
                kolor.style.backgroundColor = "Crimson";
                ksztalt.style.backgroundColor = "Salmon";
                wzor.style.backgroundColor = "Crimson";
            }
            else if (zmienna == 3) {
                sekcja1.style.display = "none";
                sekcja2.style.display = "none";
                sekcja3.style.display = "block";
                kolor.style.backgroundColor = "Crimson";
                ksztalt.style.backgroundColor = "Crimson";
                wzor.style.backgroundColor = "Salmon";
            }
        }

    </script>
</body>

</html>