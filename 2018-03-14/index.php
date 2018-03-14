<?php
// Kreiramo varijablu i dodijeljujemo joj vrijednost
$ime = "Sasa";

echo $ime;

$broj1 = 10;
$broj2 = 20;

echo $broj1 + $broj2;
// $zbroj = $broj1 + $broj2;
// echo $zbroj;

// Ovdje smo prikazali razlike izmedju include, include_once
include_once "konstante.php";
$odlican = 2;
include_once "konstante.php";
//include "konstante.php";
echo $odlican;

// Ovdje pokusavamo dodati datoteku koja ne postoji pa analiziramo gresku.
//require "pero.php";
echo "-------------------";
include "pero.php";
echo "-------------------";
 
// Polja (arrays & associative arrays)
$polje = array("Marko", "Pero", "Ivana", "Maja");
$asocPolje = array("ime"=>"sasa", "prezime"=>"Fajkovic");

//echo $polje;
print_r($polje);

var_dump($polje); // jako korisna funkcija

// koristenje HTMLa i PHPa

?>

<!DOCTYPE html>
<html>
    <head>
        <title>2018-03-14</title>
    </head>

    <body>
        <br>
        <p>Ovo je odlomak u htmlu</p>
        <p>
            <!-- Koristimo PHP unutar HTMLa -->
            <?php echo "Moje ime je $ime"; ?>
        </p>

        <h3>Petlje</h3>

        <?php

//  For petlja
        for ($i = 0; $i<10; $i++) {
            echo "Sad sam na broju " . $i . "<br>";
        }

        echo "<br> Ispis polja <br>";

        // Ovdje smo simulirali kada pokusamo citati s indeksa koji ne postoji [9]
        // Zatim smo korigirali da se petlja vrti do broja koji odgovara broju elemenata u polju.
        for ($i = 0; $i < sizeof($polje); $i++) {
            echo $polje[$i];
        }

        $brojac = 5;
        while($brojac<10) {
            echo "Brojac: " . $brojac;
            $brojac++; // $brojac = $brojac + 1;
        }

        do {
            echo "JA SAM BROJAC ". $brojac;
        } while ($brojac<1);

        echo "<p> IF </p>";
        
        // IF - kontrole toka

        $brojac = 7;
        if ($brojac == 10) {
            echo "Ja sam deset!";
        } else if ($brojac == 20) {
            echo "Ja sam dvadeset!";
        } else {
            echo "Ja sam nesto sasvim drugo!";
        }

        echo "<br> SWITCH <br>";

        $brojac = 1;

        // Switch

        switch ($brojac) {
            case 0:
                echo "Ja sam nula!";
                break;
            case 1:
                echo "Ja sam jedan";
                break;
            case 2:
                echo "Ja sam dva";
                break;
        }

        // Null vrijednost
        echo "<br> NULL <br>";
        $n = null;
        echo $n;
        var_dump($n);

        echo sizeof($n);

        array_push($n, 123);

        if ($n != true) {
            echo "NOT TRUE";
        }

        echo "<br> LOGICKI OPERATORI <br>";

        $brojac = 10;
        $ime = "pero";

        // logicki operatiri AND i OR ( i, ili)
        if ($brojac == 10 && $ime == "pero") {
            echo "AND je zadovoljen";
        }

        if ($brojac == 5 && $ime == "pero") {
            echo "AND nije zadovoljen";
        }

        if ($brojac == 10 || $ime == "pero") {
            echo "OR je zadovoljen";
        }

        if ($brojac == 5 || $ime == "pero") {
            echo "OR je opet zadovoljen";
        }

        // jednolinijski komentari
        /*

        kuizuiu
        kljh
        .kj
        */

        ?>

    </body>
</html>

