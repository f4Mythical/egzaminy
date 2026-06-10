# Notatka z projektu: JavaScript, PHP, HTML i CSS

Projekt składa się z wielu katalogów `egzamin*`, czyli osobnych zadań egzaminacyjnych. W kodzie są głównie pliki PHP, HTML, CSS, SQL oraz zasoby graficzne. JavaScript nie występuje jako osobne pliki `.js` — jest wpisany bezpośrednio w `<script>` w plikach HTML/PHP.

## 1. Najważniejszy schemat projektu

- PHP obsługuje głównie połączenie z bazą, formularze i zapytania SQL.
- HTML buduje strukturę stron, formularze, tabele, galerie, nawigację i sekcje.
- CSS odpowiada za układ strony, kolory, efekty `hover`, `float`, `clear`, `display`, czcionki i responsywność.
- JavaScript obsługuje interakcje po stronie przeglądarki: kliknięcia, obliczenia, zmianę obrazków, ukrywanie/pokazywanie bloków, dopisywanie elementów.
- SQL zawiera bazy do ćwiczeń: tabele, relacje, dane i zapytania.

## 2. JavaScript w projekcie

### Główne pliki z JavaScriptem

| Plik | Funkcje | Co robi |
|---|---|---|
| `egzamin11/notatki.html` | `zaznacz()`, `dodaj()` | Dodaje zadania do listy i przekreśla wykonane elementy. |
| `egzamin13/systemy.html` | `licz()` | Zamienia liczbę dziesiętną na binarną przez `parseInt(...).toString(2)`. |
| `egzamin14/raty.html` | `oblicz()` | Liczy koszt kursów i raty na podstawie checkboxów, miasta i liczby rat. |
| `egzamin15/koszty.html` | `oblicz()` | Liczy pole pomieszczenia i koszt montażu paneli. |
| `egzamin16/obrazki.html` | `zmiana1()`, `kolorowy()`, `czarnoBialy()`, `transformacja()`, `transformacja2()` | Nakłada filtry CSS na obrazy: `blur`, `sepia`, `invert`, `grayscale`, `opacity`, `brightness`. |
| `egzamin17/pracownicy.html` | `zmiana()` | Przełącza cytaty przez zmianę `display`. |
| `egzamin18/galeria.html` | `zmianaWLewo()`, `zmianaWPrawo()` | Przewija galerię zdjęć przez zmianę `src`. |
| `egzamin19/rejestracja.html` | `znikniecie()`, `zatwierdzajaca()`, `stracenie()` | Przełącza kroki formularza i zwiększa pasek postępu. |
| `egzamin20/rejestracja.html` | `zmiana()`, `zatwierdz()` | Pokazuje kolejne karty formularza i sprawdza zgodność haseł. |
| `egzamin21/kolory.html` | `generuj()` | Generuje paletę kolorów w `hsl()`. |
| `egzamin22/chat.html` | `wyslij()`, `generuj()` | Dodaje wiadomości do czatu i losuje odpowiedź z tablicy. |
| `egzamin23/obliczenia.html` | `oblicz()` | Liczy orientacyjny koszt paliwa. |
| `egzamin30/index.html` | `zmianaObrazku()`, `oblicz()` | Zmienia figurę i liczy pole trójkąta/prostokąta. |
| `egzamin31/paznokcie.php` | `zmiana()` | Przełącza zakładki po najechaniu myszą. |
| `egzamin34/index.html` | `dodaj()` | Dodaje wzór do galerii i pokazuje `alert`. |
| `egzamin4/smoki.php` | `pokazBloki()` | Pokazuje/ukrywa sekcje strony. |
| `egzamin7/zamowienie.html` | `funkcja1()` | Tworzy koszyk z obrazkiem, liczbą kopii i ceną. |
| `egzaminkroltrudny/filtrowanie2.php`, `egzaminkroltrudny/filtrowanie3.php` | skrypt wstawiony po PHP | Po filtrowaniu przewija stronę do wyników przez `scrollIntoView()`. |

### Najważniejsze konstrukcje JS

#### Pobieranie elementów

```js
let element = document.getElementById("id");
let lista = document.querySelectorAll("li");
let radio = document.getElementsByClassName("typy");
```

#### Pobieranie wartości z formularza

```js
let tekst = document.getElementById("imie").value;
let zaznaczone = document.getElementById("rodo").checked;
```

- `.value` pobiera tekst/liczbę z inputa.
- `.checked` sprawdza checkbox lub radio.
- Przy `input type="number"` wartość i tak przychodzi jako tekst, ale JS często sam zamienia ją podczas mnożenia.

#### Wpisywanie wyniku do HTML

```js
document.getElementById("wynik").innerHTML = `Koszt: ${koszt} zł`;
```

- `innerHTML` pozwala wstawić tekst i znaczniki HTML.
- Do samego tekstu bez HTML bezpieczniejsze jest `textContent`.

#### Zmiana stylu przez JS

```js
blok.style.display = "none";
blok.style.display = "block";
postep.style.width = `${i}%`;
obraz.style.filter = "grayscale(100%)";
```

Najczęściej zmieniane style w projekcie:

- `display`
- `visibility`
- `backgroundColor`
- `filter`
- `width`
- `textDecoration`

#### Tworzenie nowych elementów

```js
let element = document.createElement("li");
element.innerHTML = "Treść";
lista.appendChild(element);
```

Występuje m.in. w planerze zadań, czacie, koszyku i galerii tatuaży.

#### Warunek skrócony, czyli operator trójargumentowy

```js
let cena = rodzaj == 1 ? 4 : (rodzaj == 2 ? 3.5 : 0);
```

Schemat:

```js
warunek ? wartość_gdy_prawda : wartość_gdy_fałsz
```

#### Losowanie

```js
let losowyIndex = Math.floor(Math.random() * tablica.length);
```

- `Math.random()` losuje liczbę od `0` do prawie `1`.
- `Math.floor()` zaokrągla w dół.
- W projekcie używane do losowej odpowiedzi w czacie i losowego rozmycia obrazu.

#### Zamiana systemu liczbowego

```js
let binarny = parseInt(liczba).toString(2);
```

- `parseInt()` zamienia tekst na liczbę całkowitą.
- `.toString(2)` zamienia liczbę na system binarny.
- Można użyć też `.toString(16)` dla szesnastkowego.

## 3. PHP w projekcie

### Typowy schemat PHP + MySQL

```php
$db = mysqli_connect('localhost', 'root', '', 'nazwa_bazy');

$q = "SELECT * FROM tabela";
$mq = mysqli_query($db, $q);

while ($row = mysqli_fetch_assoc($mq)) {
    echo $row['kolumna'];
}

mysqli_close($db);
```

### Najważniejsze funkcje PHP

- `mysqli_connect()` — połączenie z bazą danych.
- `mysqli_query()` — wykonanie zapytania SQL.
- `mysqli_fetch_assoc()` — pobranie jednego wiersza jako tablicy asocjacyjnej.
- `mysqli_num_rows()` — liczba wyników zapytania.
- `mysqli_close()` — zamknięcie połączenia.
- `isset()` — sprawdzenie, czy zmienna istnieje.
- `empty()` — sprawdzenie, czy pole jest puste.
- `include()` — dołączenie innego pliku PHP.
- `header("Location: ...")` — przekierowanie.
- `exit()` — zatrzymanie dalszego wykonywania skryptu.
- `date()` — data/czas.
- `file_put_contents()` — zapis do pliku.
- `mysqli_real_escape_string()` — podstawowe zabezpieczenie tekstu przed SQL injection.
- `(int)`, `intval()`, `(float)` — rzutowanie danych z formularza na liczby.

### Dane z formularzy

#### POST

```php
if (isset($_POST['wyslij'])) {
    $imie = $_POST['imie'];
}
```

`POST` jest używany przy formularzach dodawania, filtrowania i zapisywania danych.

#### GET

```php
$id = $_GET['id'];
```

`GET` jest używany głównie w linkach, np. `strona.php?id=5`, do pokazywania szczegółów albo usuwania rekordu.

### Pliki PHP i bazy danych

| Plik | Baza / temat | Ważne operacje |
|---|---|---|
| `egzamin10/przewozy.php` | `przewozy` | `SELECT`, `INSERT`, `DELETE`, formularz `POST`, usuwanie przez `GET`. |
| `egzamin2/index.php` | `szkolenia` | Lista kursów, `INSERT` uczestnika, walidacja `empty()`. |
| `egzamin24/index.php` | `bazar` | Galeria towarów, `SELECT`, `INSERT` zamówienia, obliczenie wartości. |
| `egzamin25/index.php`, `egzamin25/wynik.php` | `matura` | Linki z `GET`, średnie, `MIN`, `MAX`, `AVG`, `GROUP BY`. |
| `egzamin26/index.php`, `egzamin26/aktor.php` | `kino` | Aktorzy, filmy, relacje wiele-do-wielu przez `JOIN`. |
| `egzamin27/przepisy.php` | `przepisy` | Lista potraw, szczegóły przez `GET`, `JOIN`. |
| `egzamin28/index.php`, `egzamin28/szczyty.php` | `korona` | Lista szczytów, miniatury, szczegóły przez `GET`. |
| `egzamin29/index.php` | `pogoda` | Tabela pogody, średnia temperatura, `round(avg(...), 2)`. |
| `egzamin32/index.php` | `zgloszenia` | Filtrowanie personelu i `INSERT` zgłoszenia. |
| `egzamin33/zdrowie.php` | `choroby` | Lista chorób i objawów, `JOIN`, formularz `POST`. |
| `egzamin35/szkolenia.php` | `firma` | Lista szkoleń, parametr `GET`. |
| `egzamin4/smoki.php` | `smoki` | Filtrowanie smoków po pochodzeniu. |
| `egzamin5/index.php` | `wyprawy` | Symulacja kosztu wycieczki i lista ofert. |
| `egzamin6/biblioteka.php` | `biblioteka` | Rezerwacja książek przez `UPDATE`. |
| `egzamin8/kalendarz.php` | `kalendarz` | Data, imieniny, filtrowanie po dniu. |
| `egzamin9/index.php` | `samochody` | Konfigurator, `JOIN`, `ORDER BY rand()`. |
| `egzaminkroltrudny/*.php` | `gory` | Panel admina: filtrowanie, dodawanie, usuwanie, `include()`, przekierowania. |

### SQL widoczny w PHP

Najczęściej pojawiają się:

```sql
SELECT ...
INSERT INTO ...
UPDATE ...
DELETE FROM ...
JOIN ...
ORDER BY ...
GROUP BY ...
LIMIT ...
LIKE ...
AVG(), MIN(), MAX(), COUNT(), ROUND()
```

### Ważna uwaga bezpieczeństwa

W wielu plikach dane z `$_POST` lub `$_GET` są wstawiane bezpośrednio do SQL:

```php
$q = "SELECT * FROM tabela WHERE id = $id";
```

Na egzaminach taki styl często przechodzi, ale w prawdziwym projekcie trzeba używać:

- rzutowania liczb: `(int)$_GET['id']`, `intval($_POST['id'])`;
- escapowania tekstu: `mysqli_real_escape_string($db, $tekst)`;
- najlepiej zapytań przygotowanych, czyli prepared statements.

Najbardziej „poprawne” kierunkowo przykłady są w `egzaminkroltrudny`, gdzie pojawia się `mysqli_real_escape_string()`, `intval()` i przekierowanie po operacji.

## 4. HTML — specjalne elementy, atrybuty i wartości

### Formularze

Najczęściej używany schemat:

```html
<form action="" method="POST">
    <input type="text" name="imie" id="imie">
    <input type="submit" value="Wyślij" name="wyslij">
</form>
```

W projekcie są też formularze bez `method`, wtedy domyślną metodą jest `GET`.

### Typy inputów używane w projekcie

| Typ | Do czego służy |
|---|---|
| `text` | Zwykły tekst. |
| `number` | Liczby, np. wiek, liczba kopii, liczba rat. |
| `date` | Data. |
| `submit` | Przycisk wysłania formularza. |
| `button` | Przycisk bez wysyłania formularza. |
| `radio` | Wybór jednej opcji z grupy. |
| `checkbox` | Wybór tak/nie lub wielu opcji. |
| `range` | Suwak, np. jasność lub przezroczystość obrazu. |
| `email` | Pole na e-mail. |
| `tel` | Pole na telefon. |
| `password` | Hasło. |
| `color` | Wybór koloru. |
| `file` | Wybór pliku. |

### Atrybuty, które warto pamiętać

```html
required
placeholder="Wpisz imię..."
min="0"
max="100"
value="1"
checked
accept="image/png"
pattern="[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+"
title="Komunikat podpowiedzi"
target="_blank"
target="_parent"
```

- `required` wymusza wypełnienie pola.
- `placeholder` pokazuje podpowiedź w pustym polu.
- `min` i `max` ograniczają zakres liczby, daty albo suwaka.
- `value` ustawia wartość pola.
- `checked` domyślnie zaznacza radio/checkbox.
- `accept` ogranicza typ pliku w `input type="file"`.
- `pattern` pozwala wpisać wyrażenie regularne do walidacji.
- `title` pokazuje opis błędu/podpowiedź przy walidacji.
- `target="_blank"` otwiera link w nowej karcie.
- `target="_parent"` otwiera link w nadrzędnym kontekście strony.

### Zdarzenia HTML użyte w projekcie

```html
onclick="funkcja()"
onfocusout="funkcja()"
onmouseenter="funkcja()"
```

- `onclick` — po kliknięciu.
- `onfocusout` — gdy użytkownik opuści pole formularza.
- `onmouseenter` — gdy kursor najedzie na element.

## 5. CSS — specjalne wartości i selektory

### Układ strony

W projekcie najczęściej używany jest stary, egzaminacyjny układ na `float`:

```css
section {
    float: left;
}

footer {
    clear: both;
}
```

Ważne wartości:

- `float: left`
- `float: right`
- `clear: both`
- `width: 20%`, `width: 80%`
- `height: 500px`
- `margin: auto`
- `padding: 10px`

### Pokazywanie i ukrywanie

```css
display: none;
display: block;
display: inline-block;
display: flex;
visibility: hidden;
visibility: visible;
```

Różnica:

- `display: none` usuwa element z układu strony.
- `visibility: hidden` ukrywa element, ale zostawia jego miejsce.

### Przewijanie i obcinanie

```css
overflow: auto;
overflow: hidden;
overflow: scroll;
```

- `auto` pokazuje pasek przewijania tylko gdy potrzeba.
- `hidden` ucina nadmiar.
- `scroll` wymusza przewijanie.

### Kolory

W projekcie występują różne sposoby zapisu:

```css
color: white;
background-color: #880E4F;
background-color: rgb(173, 20, 87);
background-color: rgba(211, 211, 211, 0.3);
background-color: hsl(120, 80%, 50%);
background: linear-gradient(#A0522D, #F5DEB3);
```

- Nazwy kolorów: `white`, `black`, `tomato`, `salmon`, `crimson`, `navy`.
- HEX: `#880E4F`.
- RGB: `rgb(173, 20, 87)`.
- RGBA: kolor z przezroczystością.
- HSL: barwa, nasycenie, jasność.
- `linear-gradient()` tworzy gradient.

### Efekty wizualne

```css
border-radius: 20px;
border-radius: 50%;
box-shadow: 4px 4px 8px dimgray;
cursor: pointer;
z-index: 999;
position: absolute;
position: relative;
```

- `border-radius: 50%` robi koło/okrągły obraz.
- `box-shadow` dodaje cień.
- `cursor: pointer` pokazuje „łapkę”.
- `z-index` działa przy pozycjonowaniu i ustawia warstwy.

### Pseudoklasy i selektory specjalne

```css
a:hover {
    background-color: maroon;
}

li:nth-child(even) {
    background-color: #DDCADD;
}

tr:nth-child(odd) {
    background-color: #eee;
}

input[type="submit"]:hover {
    background-color: white;
}

#prawy > img:hover {
    transform: scale(1.1);
}
```

- `:hover` — styl po najechaniu myszą.
- `:nth-child(even)` — elementy parzyste.
- `:nth-child(odd)` — elementy nieparzyste.
- `:nth-child(2)` — konkretny element.
- `input[type="submit"]` — selektor atrybutu.
- `#prawy > img` — tylko bezpośrednie dzieci elementu `#prawy`.

### Czcionki i responsywność

W projekcie pojawiają się:

```css
@font-face {
    font-family: 'Lato';
    src: url('lato-regular.woff2') format('woff2');
    font-display: swap;
}

@media only screen and (min-width: 801px) {
    section {
        width: 22%;
    }
}
```

- `@font-face` dodaje własną czcionkę z pliku.
- `font-display: swap` pozwala pokazać tekst od razu, zanim załaduje się font.
- `@media` pozwala zmieniać styl zależnie od szerokości ekranu.

### Filtry obrazów

Filtry są ustawiane głównie przez JavaScript, ale są wartościami CSS:

```css
filter: blur(5px);
filter: sepia(100%);
filter: invert(100%);
filter: grayscale(100%);
filter: opacity(50%);
filter: brightness(150%);
```

## 6. Szybka ściąga egzaminacyjna

### JS: pobierz input i pokaż wynik

```js
function oblicz() {
    let liczba = document.getElementById("liczba").value;
    let wynik = liczba * 2;
    document.getElementById("wynik").innerHTML = wynik;
}
```

### JS: sprawdź radio

```js
let opcje = document.getElementsByClassName("opcja");
let wybrana = "";

for (let i = 0; i < opcje.length; i++) {
    if (opcje[i].checked) {
        wybrana = opcje[i].value;
    }
}
```

### PHP: obsługa formularza

```php
if (isset($_POST['wyslij'])) {
    $nazwa = $_POST['nazwa'];
    echo "Wpisano: " . $nazwa;
}
```

### PHP: SELECT z bazy

```php
$db = mysqli_connect('localhost', 'root', '', 'baza');
$q = "SELECT nazwa FROM tabela";
$wynik = mysqli_query($db, $q);

while ($row = mysqli_fetch_assoc($wynik)) {
    echo "<p>{$row['nazwa']}</p>";
}
```

### PHP: INSERT z formularza

```php
if (isset($_POST['wyslij'])) {
    $nazwa = mysqli_real_escape_string($db, $_POST['nazwa']);
    $q = "INSERT INTO tabela VALUES (NULL, '$nazwa')";
    mysqli_query($db, $q);
}
```

### HTML: input z walidacją

```html
<input type="number" name="wiek" min="1" max="120" required>
<input type="text" name="imie" placeholder="Wpisz imię" required>
```

### CSS: klasyczny układ egzaminacyjny

```css
aside {
    width: 20%;
    float: left;
}

main {
    width: 80%;
    float: left;
}

footer {
    clear: both;
}
```

## 7. Co warto zapamiętać

- W PHP formularz działa dopiero po `name` w inputach i sprawdzeniu `isset($_POST['...'])`.
- W SQL najczęściej łączysz PHP z `SELECT`, potem pętla `while` i `echo`.
- W JS prawie wszystko zaczyna się od pobrania elementu przez `document.getElementById()`.
- Do radio/checkbox używaj `.checked`, a do zwykłych inputów `.value`.
- `display: none/block` jest najczęstszym sposobem przełączania widoczności sekcji.
- `float` wymaga potem `clear: both`, najczęściej w stopce.
- `:hover`, `nth-child`, `@font-face`, `@media`, `rgba()`, `hsl()` i `linear-gradient()` to najważniejsze „specjalne” rzeczy z CSS w tym projekcie.
