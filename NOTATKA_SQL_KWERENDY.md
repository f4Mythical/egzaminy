# Notatka SQL z plików `kwerendy.txt`

Ta notatka powstała po sprawdzeniu wszystkich plików `kwerendy.txt` w katalogach `egzamin*`. Obejmuje zapytania typu `SELECT`, `JOIN`, agregacje, filtrowanie, sortowanie, modyfikację danych, modyfikację struktury tabel oraz użytkowników MySQL.

## 1. Sprawdzone pliki

Sprawdzone zostały pliki:

- `egzamin2/kwerendy.txt`
- `egzamin3/kwerendy.txt`
- `egzamin4/kwerendy.txt`
- `egzamin5/kwerendy.txt`
- `egzamin6/kwerendy.txt`
- `egzamin7/kwerendy.txt`
- `egzamin8/kwerendy.txt`
- `egzamin9/kwerendy.txt`
- `egzamin10/kwerendy.txt`
- `egzamin11/kwerendy.txt`
- `egzamin13/kwerendy.txt`
- `egzamin14/kwerendy.txt`
- `egzamin15/kwerendy.txt`
- `egzamin16/kwerendy.txt`
- `egzamin17/kwerendy.txt`
- `egzamin18/kwerendy.txt`
- `egzamin19/kwerendy.txt`
- `egzamin20/kwerendy.txt`
- `egzamin21/kwerendy.txt`
- `egzamin22/kwerendy.txt`
- `egzamin23/kwerendy.txt`
- `egzamin24/kwerendy.txt`
- `egzamin25/kwerendy.txt`
- `egzamin26/kwerendy.txt`
- `egzamin27/kwerendy.txt`
- `egzamin28/kwerendy.txt`
- `egzamin29/kwerendy.txt`
- `egzamin31/kwerendy.txt`
- `egzamin32/kwerendy.txt`
- `egzamin33/kwerendy.txt`
- `egzamin34/kwerendy.txt`
- `egzamin35/kwerendy.txt`
- `egzamin36/kwerendy.txt`

## 2. Co pojawia się najczęściej

Najczęstsze zagadnienia z plików `kwerendy.txt`:

- `SELECT ... FROM ...` — pobieranie danych.
- `WHERE` — filtrowanie rekordów.
- `ORDER BY` — sortowanie.
- `LIMIT` — ograniczanie liczby wyników.
- `JOIN ... ON ...` — łączenie tabel.
- `GROUP BY` — grupowanie wyników.
- `COUNT()`, `AVG()`, `SUM()`, `MIN()`, `MAX()` — funkcje agregujące.
- `LIKE` — wyszukiwanie wzorca w tekście.
- `DISTINCT` — usuwanie powtórzeń.
- `INSERT INTO` — dodawanie rekordów.
- `UPDATE ... SET ...` — aktualizacja rekordów.
- `DELETE FROM` — usuwanie rekordów.
- `ALTER TABLE` — zmiana struktury tabeli.
- `CREATE USER`, `GRANT` — użytkownicy i uprawnienia w MySQL.

## 3. Mapa plików i tematów

| Plik | Najważniejsze rzeczy SQL |
|---|---|
| `egzamin2/kwerendy.txt` | `ORDER BY`, `INSERT`, `JOIN`, `COUNT`, `GROUP BY`. |
| `egzamin3/kwerendy.txt` | `AVG`, `MIN`, `MAX`, `DISTINCT`, `JOIN` wielu tabel. |
| `egzamin4/kwerendy.txt` | `LIKE`, `DISTINCT`, `JOIN`, `AVG`, `GROUP BY`, `ALTER TABLE ADD COLUMN`. |
| `egzamin5/kwerendy.txt` | `ORDER BY`, `LIKE`, `ROUND(AVG())`, `JOIN`, `CREATE TABLE`. |
| `egzamin6/kwerendy.txt` | `JOIN`, `ORDER BY`, `LIMIT`, `ALTER TABLE`, `UPDATE`. |
| `egzamin7/kwerendy.txt` | Warunki liczbowe, mnożenie w `SELECT`, `SUM`, `CREATE USER`. |
| `egzamin8/kwerendy.txt` | `LIKE`, `COUNT`, `ALTER TABLE ADD COLUMN`. |
| `egzamin9/kwerendy.txt` | `LIMIT`, `AVG`, `MAX`, `JOIN`, `ORDER BY RAND()`. |
| `egzamin10/kwerendy.txt` | `SELECT`, `INSERT`, `DELETE`, `JOIN`. |
| `egzamin11/kwerendy.txt` | `MIN`, `LIKE`, `JOIN`, `COUNT`, `GROUP BY`. |
| `egzamin13/kwerendy.txt` | `YEAR`, `MONTH`, `LIKE`, `ORDER BY`, `LIMIT`, `DATEDIFF`, `NOW`. |
| `egzamin14/kwerendy.txt` | `JOIN`, `CREATE USER`, `GRANT`. |
| `egzamin15/kwerendy.txt` | `LIKE`, `ORDER BY`, `COUNT`, `GROUP BY`, `ALTER TABLE DROP COLUMN`. |
| `egzamin16/kwerendy.txt` | `AVG`, `JOIN`, `GROUP BY`, podzapytanie z `MAX`, `UPDATE`. |
| `egzamin17/kwerendy.txt` | `COUNT`, `GROUP BY`, `ORDER BY DESC`, `JOIN`, `ALTER TABLE ADD COLUMN`. |
| `egzamin18/kwerendy.txt` | `AVG`, `GROUP BY`, `JOIN`, `CREATE USER`. |
| `egzamin19/kwerendy.txt` | `YEAR`, `DISTINCT`, `JOIN`, `ALTER TABLE ADD COLUMN ... AFTER`. |
| `egzamin20/kwerendy.txt` | `AVG`, `SUM`, `COUNT`, `JOIN`, `ALTER TABLE DROP COLUMN`. |
| `egzamin21/kwerendy.txt` | `OR`, porównania liczbowe, `SUM()/COUNT()`, `JOIN`, `GROUP BY`. |
| `egzamin22/kwerendy.txt` | `INSERT`, `FLOOR(AVG())`, `JOIN`, `LIKE`, `CREATE USER`, `GRANT`. |
| `egzamin23/kwerendy.txt` | `LIKE`, `COUNT(*)`, `OR`, `AND`, `UPDATE`, `CREATE USER`, `GRANT`. |
| `egzamin24/kwerendy.txt` | `LIMIT`, proste `SELECT`, `WHERE id`, `INSERT INTO`. |
| `egzamin25/kwerendy.txt` | `ORDER BY`, `DISTINCT`, `MAX`, `MIN`, `AVG`, `GROUP BY`, `LIMIT`, `JOIN`. |
| `egzamin26/kwerendy.txt` | Sortowanie po wielu kolumnach, `JOIN` przez tabelę pośrednią, `COUNT`, `GROUP BY`. |
| `egzamin27/kwerendy.txt` | Szczegóły rekordu po `id`, `JOIN` wielu tabel. |
| `egzamin28/kwerendy.txt` | `ORDER BY DESC`, `LIMIT`, `JOIN`, `LIKE "Beskid%"`. |
| `egzamin29/kwerendy.txt` | `ROUND(AVG())`, `INSERT`, `JOIN`, `GROUP BY`. |
| `egzamin31/kwerendy.txt` | Filtrowanie po dacie przez `YEAR`, `MONTH`, `DAY`, `JOIN`, `ALTER TABLE`. |
| `egzamin32/kwerendy.txt` | `COUNT`, `GROUP BY`, `LEFT JOIN`, `IS NULL`, `INSERT`, `CURDATE()`. |
| `egzamin33/kwerendy.txt` | `ORDER BY`, `JOIN` wielu tabel, `COUNT`, `GROUP BY`. |
| `egzamin34/kwerendy.txt` | Warunki `AND`, `ORDER BY DESC`, `COUNT`, `GROUP BY`, `JOIN`, `UPDATE`. |
| `egzamin35/kwerendy.txt` | `ORDER BY`, `JOIN`, `COUNT`, `GROUP BY`, `ALTER TABLE CHANGE COLUMN`. |
| `egzamin36/kwerendy.txt` | `JOIN`, `CREATE USER`, `GRANT` z wieloma uprawnieniami. |

## 4. Podstawowy `SELECT`

Najprostsze zapytanie:

```sql
SELECT kolumna1, kolumna2
FROM tabela;
```

Przykład z projektu:

```sql
SELECT kursy.kod, kursy.nazwa, kursy.cena
FROM kursy
ORDER BY kursy.cena ASC;
```

Warto pamiętać:

- `SELECT` wskazuje kolumny do wyświetlenia.
- `FROM` wskazuje tabelę.
- Jeśli kolumna występuje w wielu tabelach, najlepiej pisać `tabela.kolumna`.

## 5. Filtrowanie przez `WHERE`

`WHERE` ogranicza wyniki do rekordów spełniających warunek.

```sql
SELECT imie, nazwisko
FROM pracownicy
WHERE staz < 5;
```

Najczęstsze operatory:

```sql
=
<>
>
>=
<
<=
AND
OR
IS NULL
IS NOT NULL
```

Przykład z dwoma warunkami:

```sql
SELECT tatuaze.wzor, tatuaze.cena
FROM tatuaze
WHERE tatuaze.kolor = "czarny" AND tatuaze.cena > 100
ORDER BY tatuaze.cena DESC;
```

## 6. `LIKE`, czyli szukanie po fragmencie tekstu

`LIKE` służy do dopasowywania tekstu.

```sql
SELECT osoby.imie, osoby.nazwisko
FROM osoby
WHERE osoby.imie LIKE "A%";
```

Najważniejsze wzorce:

| Wzorzec | Znaczenie |
|---|---|
| `"A%"` | Zaczyna się na `A`. |
| `"%na%"` | Zawiera `na` gdziekolwiek. |
| `"%karol%"` | Zawiera `karol`. |
| `"Beskid%"` | Zaczyna się od `Beskid`. |
| `"0%"` | Zaczyna się od `0`. |
| `"_%”` | Ma co najmniej jeden znak, ale lepiej uważać na cudzysłów. |

Przykład:

```sql
SELECT szczyty.nazwa, szczyty.wysokosc, szczyty.pasmo
FROM szczyty
WHERE szczyty.pasmo LIKE "Beskid%";
```

## 7. Sortowanie `ORDER BY`

`ORDER BY` sortuje wyniki.

```sql
SELECT maturzysta.id, maturzysta.imie, maturzysta.nazwisko
FROM maturzysta
WHERE maturzysta.szkola = "T3"
ORDER BY maturzysta.nazwisko;
```

Kierunki sortowania:

```sql
ORDER BY kolumna ASC;
ORDER BY kolumna DESC;
```

- `ASC` — rosnąco, domyślne.
- `DESC` — malejąco.

Sortowanie po wielu kolumnach:

```sql
SELECT aktorzy.*
FROM aktorzy
ORDER BY aktorzy.nazwisko, aktorzy.imie;
```

Losowe rekordy:

```sql
SELECT pojazdy.marka, pojazdy.model, pojazdy.cena
FROM pojazdy
ORDER BY RAND()
LIMIT 2;
```

## 8. Ograniczanie wyników `LIMIT`

`LIMIT` pokazuje tylko określoną liczbę rekordów.

```sql
SELECT szczyty.nazwa, szczyty.plik
FROM szczyty
LIMIT 10;
```

Częsty wzór egzaminacyjny:

```sql
SELECT ...
FROM ...
ORDER BY ...
LIMIT 1;
```

Przykład: najlepszy wynik średni:

```sql
SELECT wynik.maturzysta_id, AVG(wynik.punkty) AS "Wynik"
FROM wynik
GROUP BY wynik.maturzysta_id
ORDER BY Wynik DESC
LIMIT 1;
```

## 9. Usuwanie powtórzeń `DISTINCT`

`DISTINCT` pokazuje unikalne wartości.

```sql
SELECT DISTINCT adresy.miasto
FROM adresy
ORDER BY adresy.miasto;
```

Przykłady z projektu:

- unikalne miasta;
- unikalne przedmioty;
- unikalne pochodzenia smoków.

## 10. Łączenie tabel `JOIN`

`JOIN` łączy dane z kilku tabel.

Podstawowy schemat:

```sql
SELECT tabela1.kolumna, tabela2.kolumna
FROM tabela1
JOIN tabela2 ON tabela2.id = tabela1.id_z_obcej_tabeli;
```

Przykład:

```sql
SELECT osoby.imie, osoby.nazwisko, telefony.numer
FROM osoby
JOIN telefony ON osoby.id = telefony.Osoby_id;
```

Ważne:

- `JOIN` bez dopisku zwykle oznacza `INNER JOIN`.
- Pokazuje tylko rekordy pasujące w obu tabelach.
- Warunek łączenia piszemy po `ON`.

## 11. `JOIN` wielu tabel

W kilku plikach pojawiają się łączenia więcej niż dwóch tabel.

Przykład z filmami i aktorami:

```sql
SELECT filmy.id_filmu, filmy.tytul, filmy.rok_produkcji
FROM filmy
JOIN filmy_aktorzy ON filmy_aktorzy.id_filmu = filmy.id_filmu
JOIN aktorzy ON aktorzy.id_aktora = filmy_aktorzy.id_aktora
WHERE aktorzy.id_aktora = 3;
```

To jest relacja wiele-do-wielu:

- jeden aktor może grać w wielu filmach;
- jeden film może mieć wielu aktorów;
- tabela `filmy_aktorzy` łączy aktorów z filmami.

Drugi przykład:

```sql
SELECT potrawy.nazwa, alergeny.alergen
FROM potrawy
JOIN lista_alergenow ON lista_alergenow.idPotrawy = potrawy.idPotrawy
JOIN alergeny ON lista_alergenow.idAlergeny = alergeny.idAlergeny
WHERE potrawy.idPotrawy = 7;
```

## 12. `LEFT JOIN` i szukanie braków

Bardzo ważny wzór z `egzamin32`:

```sql
SELECT personel.id, personel.nazwisko
FROM personel
LEFT JOIN rejestr ON rejestr.id_personel = personel.id
WHERE rejestr.id_personel IS NULL;
```

Znaczenie:

- `LEFT JOIN` bierze wszystkich z lewej tabeli, tutaj `personel`.
- Jeśli nie ma pasującego rekordu w `rejestr`, pola z `rejestr` są `NULL`.
- `WHERE rejestr.id_personel IS NULL` znajduje osoby bez wpisu w rejestrze.

To jest klasyczny sposób na pytanie: „pokaż rekordy, które nie mają powiązania w drugiej tabeli”.

## 13. Funkcje agregujące

Funkcje agregujące liczą coś dla wielu rekordów.

| Funkcja | Znaczenie |
|---|---|
| `COUNT()` | Liczy rekordy. |
| `SUM()` | Sumuje wartości. |
| `AVG()` | Liczy średnią. |
| `MIN()` | Najmniejsza wartość. |
| `MAX()` | Największa wartość. |
| `ROUND()` | Zaokrągla wynik. |
| `FLOOR()` | Zaokrągla w dół. |

Przykłady:

```sql
SELECT AVG(liczba_pracownikow) AS "średnia",
       MIN(liczba_pracownikow) AS "najmniej",
       MAX(liczba_pracownikow) AS "najwięcej"
FROM wykonawcy;
```

```sql
SELECT ROUND(AVG(pomiary.temperatura), 2)
FROM pomiary
WHERE pomiary.id_miesiac = 7;
```

```sql
SELECT SUM(zamowienia.liczba_odbitek)
FROM zamowienia
WHERE zamowienia.rodzaj = "błyszczący";
```

## 14. Grupowanie `GROUP BY`

`GROUP BY` grupuje rekordy według wskazanej kolumny. Używa się go razem z agregacjami.

```sql
SELECT osoby.nazwisko, COUNT(zadania.id_zadania) AS "Liczba zadan"
FROM osoby
JOIN zadania ON osoby.id_osoba = zadania.osoba_id
GROUP BY osoby.id_osoba;
```

Inne przykłady:

```sql
SELECT pojazdy.typ, COUNT(pojazdy.id)
FROM pojazdy
GROUP BY pojazdy.typ;
```

```sql
SELECT miesiace.nazwa, AVG(pomiary.temperatura)
FROM miesiace
JOIN pomiary ON pomiary.id_miesiac = miesiace.id
GROUP BY miesiace.nazwa;
```

Zasada:

- Jeśli w `SELECT` masz zwykłą kolumnę i funkcję agregującą, zwykła kolumna powinna być w `GROUP BY`.

## 15. Aliasy `AS`

Alias zmienia nazwę kolumny w wyniku.

```sql
SELECT COUNT(zadania.id_zadania) AS "Liczba zadan"
FROM zadania;
```

Alias przydaje się szczególnie przy:

- `COUNT()`;
- `AVG()`;
- obliczeniach matematycznych;
- długich nazwach.

Przykład obliczenia ceny:

```sql
SELECT (zamowienia.liczba_odbitek * zdjecia.cena) AS "Do zapłaty"
FROM zamowienia
JOIN zdjecia ON zdjecia.rodzaj = zamowienia.rodzaj
WHERE zamowienia.nr_klienta = 3;
```

## 16. Daty w SQL

W plikach występują funkcje:

```sql
YEAR(data)
MONTH(data)
DAY(data)
DATEDIFF(data1, data2)
NOW()
CURDATE()
```

Przykład filtrowania po roku i miesiącu:

```sql
SELECT zawodnicy.pseudonim
FROM zawodnicy
WHERE YEAR(zawodnicy.data_zdobycia) = 2020
  AND MONTH(zawodnicy.data_zdobycia) = 8;
```

Przykład filtrowania konkretnego dnia:

```sql
SELECT klienci.imie, klienci.cena
FROM klienci
WHERE YEAR(klienci.termin) = 2024
  AND MONTH(klienci.termin) = 5
  AND DAY(klienci.termin) = 23;
```

Różnica dni:

```sql
SELECT zawodnicy.pseudonim,
       zawodnicy.data_zdobycia,
       DATEDIFF(NOW(), zawodnicy.data_zdobycia) AS "dni"
FROM zawodnicy;
```

Bieżąca data przy dodawaniu rekordu:

```sql
INSERT INTO rejestr (data, id_personel, id_pojazd)
VALUES (CURDATE(), 1, 14);
```

## 17. Podzapytanie

Podzapytanie to zapytanie wewnątrz zapytania.

Przykład z maksymalną pensją:

```sql
SELECT pracownicy.imie, pracownicy.nazwisko, pracownicy.pensja
FROM pracownicy
WHERE pracownicy.pensja = (SELECT MAX(pensja) FROM pracownicy);
```

Znaczenie:

- najpierw SQL oblicza `MAX(pensja)`;
- potem wybiera pracownika/pracowników z taką pensją.

## 18. Dodawanie rekordów `INSERT INTO`

Schemat:

```sql
INSERT INTO tabela (kolumna1, kolumna2)
VALUES (wartosc1, wartosc2);
```

Przykład:

```sql
INSERT INTO uczestnicy (imie, nazwisko, wiek)
VALUES ('Tadeusz', 'Wysocki', 36);
```

Można też użyć pełnego wstawiania:

```sql
INSERT INTO zamowienie
VALUES (NULL, 9, 2, 20);
```

Bezpieczniejszy i czytelniejszy styl to podawać nazwy kolumn:

```sql
INSERT INTO zamowienie (id, towar_id, klient_id, liczba)
VALUES (NULL, 9, 2, 20);
```

## 19. Aktualizacja rekordów `UPDATE`

Schemat:

```sql
UPDATE tabela
SET kolumna = nowa_wartosc
WHERE warunek;
```

Przykład:

```sql
UPDATE samochody
SET samochody.stan = "dobry"
WHERE samochody.rocznik < 2004;
```

Bardzo ważne:

- `UPDATE` bez `WHERE` zmienia wszystkie rekordy.
- W `egzamin16` jest przykład:

```sql
UPDATE pracownicy SET staz = staz + 1;
```

To zwiększa staż wszystkim pracownikom.

## 20. Usuwanie rekordów `DELETE`

Schemat:

```sql
DELETE FROM tabela
WHERE warunek;
```

Przykład:

```sql
DELETE FROM zadania
WHERE id_zadania = 2;
```

Bardzo ważne:

- `DELETE FROM tabela` bez `WHERE` usuwa wszystkie rekordy z tabeli.

## 21. Zmiana struktury tabeli `ALTER TABLE`

Dodanie kolumny:

```sql
ALTER TABLE parada
ADD COLUMN lokalizacja VARCHAR(100);
```

Dodanie kolumny z wartością domyślną:

```sql
ALTER TABLE ksiazka
ADD COLUMN rezerwacja TINYINT DEFAULT 0;
```

Usunięcie kolumny:

```sql
ALTER TABLE osoby
DROP COLUMN telefon;
```

Zmiana nazwy kolumny:

```sql
ALTER TABLE zapisy
CHANGE COLUMN Id_klienta Id_sluchacza INT;
```

Dodanie kolumny po konkretnej kolumnie:

```sql
ALTER TABLE adresy
ADD COLUMN numerMieszkania INT AFTER numer;
```

## 22. Tworzenie tabeli `CREATE TABLE`

Przykład z `egzamin5`:

```sql
CREATE TABLE klienci (
    id_klienta INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    imie VARCHAR(20),
    nazwisko VARCHAR(40),
    data_ur DATE
);
```

Ważne słowa:

- `INT` — liczba całkowita.
- `VARCHAR(20)` — tekst do 20 znaków.
- `DATE` — data.
- `PRIMARY KEY` — klucz główny.
- `AUTO_INCREMENT` — automatyczne zwiększanie id.
- `NOT NULL` — pole nie może być puste.
- `UNSIGNED` — liczba bez znaku, czyli bez wartości ujemnych.

## 23. Użytkownicy i uprawnienia

Tworzenie użytkownika:

```sql
CREATE USER 'Marek'@'localhost' IDENTIFIED BY 'M@reK';
```

Nadawanie uprawnień:

```sql
GRANT SELECT, UPDATE ON obuwie.produkt TO 'Marek'@'localhost';
```

Przykład z kilkoma uprawnieniami:

```sql
GRANT SELECT, UPDATE, INSERT, DELETE
ON firma.*
TO 'zaopatrzenie'@'localhost';
```

Znaczenie:

- `SELECT` — odczyt danych.
- `INSERT` — dodawanie rekordów.
- `UPDATE` — zmiana rekordów.
- `DELETE` — usuwanie rekordów.
- `baza.tabela` — uprawnienia do jednej tabeli.
- `baza.*` — uprawnienia do wszystkich tabel w bazie.

## 24. Kolejność pisania zapytania

Najczęstszy układ:

```sql
SELECT kolumny
FROM tabela
JOIN inna_tabela ON warunek_laczenia
WHERE warunek_filtrowania
GROUP BY kolumna
ORDER BY kolumna
LIMIT liczba;
```

Nie każde zapytanie musi mieć wszystkie części.

## 25. Kolejność logicznego działania SQL

SQL jest pisany w jednej kolejności, ale logicznie działa mniej więcej tak:

1. `FROM`
2. `JOIN`
3. `WHERE`
4. `GROUP BY`
5. funkcje agregujące, np. `COUNT`, `AVG`
6. `SELECT`
7. `ORDER BY`
8. `LIMIT`

To pomaga zrozumieć, czemu np. `WHERE` nie powinien filtrować po wyniku `COUNT()` — do tego zwykle służy `HAVING`, którego w tych plikach praktycznie nie ma.

## 26. Szybka ściąga wzorów

### Prosty SELECT

```sql
SELECT kolumna
FROM tabela;
```

### SELECT z warunkiem

```sql
SELECT kolumna
FROM tabela
WHERE kolumna = "wartosc";
```

### SELECT z LIKE

```sql
SELECT kolumna
FROM tabela
WHERE kolumna LIKE "A%";
```

### Sortowanie

```sql
SELECT kolumna
FROM tabela
ORDER BY kolumna DESC;
```

### JOIN

```sql
SELECT tabela1.kolumna, tabela2.kolumna
FROM tabela1
JOIN tabela2 ON tabela2.id = tabela1.tabela2_id;
```

### Liczenie rekordów

```sql
SELECT COUNT(*)
FROM tabela;
```

### Grupowanie

```sql
SELECT kategoria, COUNT(*)
FROM tabela
GROUP BY kategoria;
```

### Średnia

```sql
SELECT AVG(cena)
FROM produkty;
```

### Dodawanie rekordu

```sql
INSERT INTO tabela (kolumna1, kolumna2)
VALUES ("wartosc1", "wartosc2");
```

### Aktualizacja

```sql
UPDATE tabela
SET kolumna = "nowa wartosc"
WHERE id = 1;
```

### Usuwanie

```sql
DELETE FROM tabela
WHERE id = 1;
```

### Dodanie kolumny

```sql
ALTER TABLE tabela
ADD COLUMN nowa_kolumna INT;
```

## 27. Rzeczy, na które warto uważać

Kilka zapytań wygląda jak typowe egzaminacyjne robocze wersje i warto je sprawdzić przed użyciem:

- `egzamin29/kwerendy.txt` — `INSERT INTO miejscowosc (kraj,nazwa) VALUES ("Kijów","Ukraina")`; jeśli kolumny to `kraj`, `nazwa`, to wartości wyglądają na odwrócone.
- `egzamin34/kwerendy.txt` — `UPDATE tatuaze SET cena = cena * 0.1 WHERE tatuaze.cena = "czerwony"`; warunek porównuje cenę z kolorem, prawdopodobnie powinno być `WHERE tatuaze.kolor = "czerwony"`.
- `egzamin33/kwerendy.txt` — zapytanie wybiera `choroby.nazwa`, ale grupuje po `choroby.zakazna`; bezpieczniej grupować po identyfikatorze/nazwie choroby, jeśli wynik ma być dla każdej choroby.
- `egzamin11/kwerendy.txt` — `SELECT min(notatki.priorytet) ... WHERE notatki.priorytet=3` zwróci po prostu `3`, jeśli istnieje taki rekord; samo `MIN()` ma większy sens bez warunku równości tej samej wartości.

## 28. Najważniejsze do zapamiętania

- `SELECT` pobiera dane, `INSERT` dodaje, `UPDATE` zmienia, `DELETE` usuwa.
- `WHERE` filtruje rekordy przed grupowaniem.
- `JOIN` łączy tabele po kluczach.
- `LEFT JOIN ... IS NULL` znajduje brakujące powiązania.
- `GROUP BY` jest potrzebne przy `COUNT`, `AVG`, `SUM`, jeśli wynik ma być osobno dla grup.
- `ORDER BY` sortuje, a `LIMIT` ogranicza liczbę wyników.
- `LIKE "A%"` szuka tekstów zaczynających się na `A`.
- `DISTINCT` usuwa powtarzające się wartości.
- `ALTER TABLE` zmienia strukturę tabeli, a nie dane w rekordach.
- Przy `UPDATE` i `DELETE` prawie zawsze trzeba sprawdzić, czy jest poprawny `WHERE`.
