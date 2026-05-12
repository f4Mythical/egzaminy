<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remonty</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Malowanie i gipsowanie</h1>
    </header>
    <nav>
        <a href="kontakt.html">Kontakt</a>
        <a href="https://remonty.pl" target="_blank">Partnerzy</a>
    </nav>
    <main>
        <section id="left">
            <h2>Dla klientów</h2>
            <form action="" method="post">
                <label for="liczba">Ilu co najmniej pracowników potrzebujesz?</label><br>
                <input type="number" name="liczba" id="liczba" step="1">
                <input type="submit" value="Szukaj firm" name="wyslij">
            </form>
        </section>
        <section id="mid">
            <h2>Dla wykonawców</h2>
            <form action="" method="post">
                <select name="lista">
                    <option value="1">Dortowo</option>
                </select>
                <br>
                <input type="radio" name="opcja" id="malowanie" checked>
                <label for="malowanie">malowanie</label>
                <br>
                <input type="radio" name="opcja" id="gipsowanie">
                <label for="gipsowanie">gipsowanie</label>
                <br>
                <input type="submit" value="Szukaj klientów" name="wyslijMid">
            </form>
            <ul>
                </ul>
        </section>
        <aside>
            <img src="tapeta_lewa.png" alt="usługi"><br>
            <img src="tapeta_prawa.png" alt="usługi"><br>
            <img src="tapeta_lewa.png" alt="usługi"><br>
        </aside>
    </main>
    <footer>
        <p><strong>Stronę wykonał: 00000000000</strong></p>
    </footer>
</body>
</html>