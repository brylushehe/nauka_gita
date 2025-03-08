<?php
$a = 10; // przykładowa wartość dla a
$b = 20; // przykładowa wartość dla b
<<<<<<< HEAD
$średnia = ($a + $b) / 2; // obliczanie średniej
echo $średnia; // wyświetlenie wyniku
//dodaje wagi
?>
=======

// Średnia arytmetyczna
$średnia = ($a + $b) / 2;
echo "Średnia arytmetyczna: " . $średnia . "\n";

// Średnia ważona (przykładowe wagi: waga_a = 0.6, waga_b = 0.4)
$waga_a = 0.6;
$waga_b = 0.4;
$średnia_ważona = ($a * $waga_a + $b * $waga_b) / ($waga_a + $waga_b);
echo "Średnia ważona: " . $średnia_ważona . "\n";
?>
>>>>>>> konflikt
