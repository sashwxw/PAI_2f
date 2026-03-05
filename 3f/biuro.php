<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>
    <section id="first">
        <h3>ARCHIWUM WYCIECZEK</h3>
    <?php
    $mysqli = mysqli_connect("localhost", "root", "", "egzamin4")
    or
    die("Błąd połączenia: ". mysqli_connect_errno());
    $result=mysqli_query($mysqli, "SELECT id, cel, cena FROM wycieczki")
    or
    die("błąd w zapytaniu");
    while($row=mysqli_fetch_array($result)){
        echo $row['id'] . ". " . $row['cel'] . ", cena: " . $row['cena'] . "<br>";
    }
    mysqli_close($mysqli);
    ?>
    </section>
    <section id="second">
        <div class="panel" id="left">
            <h3>NAJTANIEJ...</h3>
            <table>
                <tr>
                    <td>Włochy</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Francja</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Hiszpania</td>
                    <td>od 1400 zł</td>
                </tr>
            </table>
        </div>
        <div class="panel" id="centr">
            <h3>TU BYLIŚMY</h3>
            <?php
            $mysqli = mysqli_connect("localhost", "root", "", "egzamin4")
            or 
            die("Błąd połączenia: " . mysqli_connect_errno());
            $result = mysqli_query($mysqli, "SELECT nazwaPliku, podpis FROM zdjecia")
            or
            die("błąd w zapytaniu");
            while($row=mysqli_fetch_array($result)){
                echo "<img src='egzamin4/$row[nazwaPliku]' alt='$row[podpis]'>";
            }
            mysqli_close($mysqli);
            ?>
        </div>
        <div class="panel" id="right">
            <h3>SKONTAKTUJ SIĘ</h3>
            <a href="wycieczki@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </div>

    </section>
    <footer>
        <p>Stronę wykonał: 000000000</p>
    </footer>
    

</body>
</html>