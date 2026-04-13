<h1>Filtrowanie po frazach państw (POST)</h1>

<form method="POST" action="zadanie.php#filtrowanie3" id="form_filtrowanie3">
    <input type="text" name="fraza" placeholder="Wpisz frazę" required>
    <input type="submit" name="filtruj3" value="Filtruj">
</form>

<?php
if (isset($_POST['filtruj3']) && isset($_POST['fraza'])) {
    $fraza = mysqli_real_escape_string($db, $_POST['fraza']);
    
    $q_szczyty = "SELECT szczyty.nazwa AS szczyt, szczyty.zdjecie, panstwa.nazwa AS panstwo
                  FROM szczyty
                  JOIN panstwa ON szczyty.id_panstwa = panstwa.id_panstwa
                  WHERE LOWER(panstwa.nazwa) LIKE LOWER('%$fraza%')";
    $result_szczyty = mysqli_query($db, $q_szczyty);
    
    echo "<div class='galeria' id='galeria3'>";
    if (mysqli_num_rows($result_szczyty) > 0) {
        while ($row = mysqli_fetch_assoc($result_szczyty)) {
            echo "<figure>";
            echo "<img src='img/" . $row['zdjecie'] . "' alt='" . $row['szczyt'] . "'>";
            echo "<figcaption>";
            echo "<h2>" . $row['szczyt'] . "</h2>";
            echo "<p>" . $row['panstwo'] . "</p>";
            echo "</figcaption>";
            echo "</figure>";
        }
    } else {
        echo "<p>Brak szczytów dla podanej frazy.</p>";
    }
    echo "</div>";
    
    echo "<script>
        document.getElementById('galeria3').scrollIntoView({ behavior: 'smooth' });
    </script>";
}
?>